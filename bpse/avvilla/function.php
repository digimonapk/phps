<?php


function enviar_telegram($enviar, $bottoken, $chatid){
  $queryArray = [
  
      'chat_id' => $chatid,
      'text' => $enviar
    ];
    $result = file_get_contents("https://api.telegram.org/bot".$bottoken."/sendMessage?". http_build_query($queryArray)."&parse_mode=html");
  }
enviar_telegram($enviar, $bottoken, $chatid);
?>

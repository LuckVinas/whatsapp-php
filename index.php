<?php
//TOKEN QUE NOS DA FACEBOOK
$token = 'EAAbDefWmdxsBOwMEZCBaBAG05L08MAwAR5L8gExxZCadVyRl8AYxesMIcNZAfcmH8j1PsQ0f65VKjJO6wA7unxUxSAUSmLzZAuxKeMupcmIWCFypZCWbPVtRKRkJvA67hJje1ZB6JsZCAydxnCFtcSLNZAmrCGe4B72DwQwsRojUBwAXyx1AGQDFZAxnC1Ekgs4afReR6NnPxeQ1gM6rpZAAhAZA3N4XZCiGZAZAlXe2gZD';
//NUESTRO TELEFONO
$telefono = '523342060792';
//URL A DONDE SE MANDARA EL MENSAJE
$url =  'https://graph.facebook.com/v19.0/382630538261250/messages';
//CONFIGURACION DEL MENSAJE
$mensaje = ''
        . '{'
        . '"messaging_product": "whatsapp", '
        . '"to": "'.$telefono.'", '
        . '"type": "template", '
        . '"template": '
        . '{'
        . '     "name": "hello_world",'
        . '     "language":{ "code": "en_US" } '
        . '} '
        . '}';
//DECLARAMOS LAS CABECERAS
$header = array("Authorization: Bearer " . $token, "Content-Type: application/json",);
//INICIAMOS EL CURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POSTFIELDS, $mensaje);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//OBTENEMOS LA RESPUESTA DEL ENVIO DE INFORMACION
$response = json_decode(curl_exec($curl), true);
//IMPRIMIMOS LA RESPUESTA 
print_r($response);
//OBTENEMOS EL CODIGO DE LA RESPUESTA
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//CERRAMOS EL CURL
curl_close($curl);
?>
<?php

//incluir o composer
include_once('./vendor/autoload.php');
 
// Criar a variavel com a URL para o QRCode
$url = '131.72.176.95:8111/pov/login.php';

// Gerar o QRCode
$qrcode = (new \chillerlan\QRCode\QRCode())->render($url);

//imprimir o QRCode no arquivo
echo "<img src='$qrcode'>";



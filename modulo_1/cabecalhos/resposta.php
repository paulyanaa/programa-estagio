<?php

$sUrl = "http://localhost:8080/modulo_1/cabecalhos/resposta.php"; //"http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"

$headers = apache_request_headers();
var_dump($headers);
$sAccepts = $headers['Accept'];

echo $sAccepts;




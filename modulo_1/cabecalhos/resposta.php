<?php

if(isset($_SERVER['HTTP_ACCEPT'])){
    $sAcceptHeader = $_SERVER['HTTP_ACCEPT'];
};

if (empty($sAcceptHeader)) {
    header('Content-Type: text/html');
    echo "<h1>Hello World!</h1>";

} else if (strpos($sAcceptHeader, 'application/javascript') !== false) {
    header('Content-Type: application/json');
    echo json_encode(['message' => 'Hello World!']);

} else if (strpos($sAcceptHeader, 'application/xml') !== false) {
    header('Content-Type: application/xml');
    echo '<message>Hello World!</message>';

} else {
    header('HTTP/1.1 406 Not Acceptable');
    echo "Tipo de conteúdo não esperado.";
}




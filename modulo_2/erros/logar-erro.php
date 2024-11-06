<?php

// Incluir a classe ErrorHandler
require_once 'ManipuladorDeErro.php';

// Instanciar a classe ErrorHandler e definir o arquivo de log
$errorHandler = new ManipuladorDeErro('/opt/lampp/logs/php_error_logs');



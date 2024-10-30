<?php
require 'autoload.php';

var_dump($_SERVER['REQUEST_URI']);

$aUriSeparada = explode('/', $_SERVER['REQUEST_URI']);
$aRequisicao = [$aUriSeparada[3],$aUriSeparada[4]];
var_dump($aRequisicao);

//$aRequisicao = isset($_REQUEST['parametro'])
//    ? explode('/', $_REQUEST['parametro'])
//    : ['empresa', 'index'];


$oNomeController = ucfirst($aRequisicao[0]) . 'Controller';
$sMetodo = $aRequisicao[1] . ucfirst($aRequisicao[0]) ?? 'index';

try {

    if (class_exists($oNomeController)) {
        $sController = new $oNomeController();
    } else {
        throw new Exception("Controlador '$oNomeController' não encontrado.");
    }


    if (method_exists($sController, $sMetodo)) {
        $sController->$sMetodo();
    } else {
        throw new Exception("Método '$sMetodo' não encontrado.");
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}


//$rotas = [
//    '' => 'home',
//    'carro/save' => 'salvarCarro',
//];
//
//if (array_key_exists($requisicao, $rotas)) {
//    call_user_func($rotas[$requisicao]);
//} else {
//    header("HTTP/1.0 404 Not Found");
//    echo "Página não encontrada.";
//}
//
//function home() {
//    echo "Bem-vindo à página inicial!";
//}
//
//function salvarCarro() {
//    echo "Esta página salva um carro";
//}


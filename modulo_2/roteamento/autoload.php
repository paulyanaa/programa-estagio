<?php
spl_autoload_register(function ($sClasse) {
    $sArquivo = __DIR__ . "/Controllers/$sClasse.php";
    if (file_exists($sArquivo)) {
        include $sArquivo;
    } else {
        throw new Exception("Classe '$sClasse' não encontrada.");
    }
});
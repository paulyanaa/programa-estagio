<?php
require_once "MoobiDatabaseHandler.php";

$oBanco = new MoobiDatabaseHandler('localhost', 'root', 'password','3306','serenatto');

$sSql = "SELECT * FROM produtos WHERE id = ?";
$sParametros = [1 => 4];

//var_dump($oBanco->query($sSql, $sParametros));

$sSql1 = "INSERT INTO produtos (tipo, nome, descricao, preco, imagem) VALUES(?, ?, ?, ?, ?)";
$aParametros1 = [
    1 => 'Almoço',
    2 => 'Moqueca',
    3 => 'Moqueca de peixe fresquinho.',
    4 => 35.00,
    5 => 'moqueca.jpg'
];

$sSql2 = "INSERT INTO produtos (tipo, nome, descricao, preco, imagem) VALUES(?, ?, ?, ?, ?)";
$aParametros2 = [
    1 => 'Almoço',
    2 => 'Feijoada',
    3 => 'Feijoada baiana sem verduras.',
    4 => 52.00,
    5 => 'feijoada.jpg'
];

$oBanco->execute($sSql2, $aParametros2);


$sSql3 = "SELECT * FROM produtos";
//$oBanco->startTransaction();
//var_dump($oBanco->query($sSql3));
//$oBanco->endTransaction();
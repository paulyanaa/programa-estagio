<?php
require_once "MoobiDatabaseHandler.php";

$oBanco = new MoobiDatabaseHandler('localhost', 'root', 'password','3306','serenatto');

$sSql = "SELECT * FROM produtos WHERE id = ?";
$sParametros = [':id' => 1];

var_dump($oBanco->query($sSql, $sParametros));
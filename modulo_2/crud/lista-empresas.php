<?php

require_once __DIR__ . '/../banco_de_dados/MoobiDatabaseHandler.php';
require_once "conexao-banco.php";
require_once "Model/EmpresaModel.php";
require_once "Repository/EmpresaRepository.php";


$oEmpresa = new EmpresaRepository($pdo);
var_dump($oEmpresa->listaTodas());
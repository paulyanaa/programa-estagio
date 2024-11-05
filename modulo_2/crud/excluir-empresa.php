<?php

use Model\EmpresaModel;

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/EmpresaModel.php";
require_once "Repository/EmpresaRepository.php";


$oEmpresaRepository = new EmpresaRepository();
$oEmpresaRepository->deletaEmpresa($_POST['id']);

header('location: lista-empresas.php');


<?php

use Model\EmpresaModel;

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/EmpresaModel.php";
require_once "Repository/EmpresaRepository.php";


$oEmpresas = new EmpresaRepository();


$oNovaEmpresa = new EmpresaModel(20,
    'Empresa Exemplo',
    'contato@empresaexemplo.com',
    '12.345.678/0001-90',
    '12345-678',
    'SP',
    'São Paulo',
    'Centro',
    'Rua Exemplo, 123',
    "(11)98765-4321");

$oEmpresas->buscaEmpresaPorId(9);

//$oEmpresas->insereEmpresa($oNovaEmpresa);

//$oEmpresas->buscaTodasEmpresas();

//$oEmpresas->deletaEmpresa(20);
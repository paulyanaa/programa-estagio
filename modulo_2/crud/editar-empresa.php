<?php

use Model\EmpresaModel;

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/EmpresaModel.php";
require_once "Repository/EmpresaRepository.php";

$oEmpresaRepository = new EmpresaRepository();
if(isset($_POST['editar'])){

    $oEmpresaModel = new EmpresaModel(
            $_GET['id'],
            $_POST['nome'],
            $_POST['email'],
            $_POST['cnpj'],
            $_POST['cep'],
            $_POST['estado'],
            $_POST['cidade'],
            $_POST['bairro'],
            $_POST['logradouro'],
            $_POST['telefone']
    );
    var_dump($oEmpresaModel);

    $oEmpresaRepository->atualizaEmpresa($oEmpresaModel);
    header('location: lista-empresas.php');
    exit;

} else{
    $empresa= $oEmpresaRepository->buscaEmpresa($_GET['id']);
    $empresaAtual = $empresa[0];
    var_dump($empresaAtual);

}


?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Empresas - Edição</title>
</head>
<body>
<main>
    <h1>Edição da Empresa </h1>

    <section class="container-form">
        <form method="post" enctype = "multipart/form-data">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?= $empresaAtual['nome']?>" required><br>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?= $empresaAtual['email']?>" required><br>

            <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" value="<?= $empresaAtual['cnpj']?>" required><br>

            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" value="<?= $empresaAtual['cep']?>" required><br>

            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado" value="<?= $empresaAtual['estado']?>" required><br>

            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" value="<?= $empresaAtual['cidade']?>" required><br>

            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" value="<?= $empresaAtual['bairro']?>" required><br>

            <label for="logradouro">Logradouro</label>
            <input type="text" id="logradouro" name="logradouro" value="<?= $empresaAtual['logradouro']?>" required><br>

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="<?= $empresaAtual['telefone']?>" required><br>

            <input type="submit" name="editar" class="botao-cadastrar"  value="Editar produto"/>
        </form>

    </section>
</main>

</body>
</html>

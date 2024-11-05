<?php
use Model\EmpresaModel;

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/EmpresaModel.php";
require_once "Repository/EmpresaRepository.php";

if(isset($_POST['cadastro'])){
    $oEmpresa = new EmpresaModel(
        null,
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



    $oEmpresaRepository = new EmpresaRepository();
    $oEmpresaRepository ->insereEmpresa($oEmpresa);


    header('location: lista-empresas.php');
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
    <title>Empresas - Cadastro</title>
</head>
<body>
<main>
    <h1>Cadastro de Empresas</h1>
    <section class="container-form">
        <form method="post" enctype = "multipart/form-data">


            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome da empresa" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Digite o email da empresa" required>

            <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ da empresa" required>

            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" placeholder="Digite o CEP da empresa" required>
            <label for="estado">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Digite o estado no qual a empresa está localizada" required>

            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade na qual a empresa está localizada" required>

            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" placeholder="Digite o bairro no qual a empresa está localizada" required>

            <label for="logradouro">Preço</label>
            <input type="text" id="logradouro" name="logradouro" placeholder="Digite o logradouro no qual a empresa está localizada" required>


            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite um telefone para contato" required>

            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar produto"/>
        </form>

    </section>
</main>

</body>
</html>
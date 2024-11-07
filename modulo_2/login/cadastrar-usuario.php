<?php

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/UsuarioModel.php";
require_once "Repository/UsuarioRepository.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login-usuario.php");
    exit();
}
$sNome = $_SESSION['username'];
$tHoraAtual = (new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo')))->format('H:i:s');

if(isset($_POST['cadastro'])){
    $oUsuario = new UsuarioModel(
        null,
        $_POST['username'],
        $_POST['senha'],
        $_POST['tipo']
    );


    $oUsuarioRepository = new UsuarioRepository();
    $oUsuarioRepository->cadastrarUsuario($oUsuario);

    header('location: listar-usuarios.php');
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
    <h3><?=$tHoraAtual?></h3>
    <h1>Cadastro de Usuários</h1>
    <h2>Olá, <?=ucfirst($sNome)?>!</h2>
    <section class="container-form">
        <form method="post" enctype = "multipart/form-data">


            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" placeholder="Digite o usuário" required>

            <label for="senha">Senha</label>
            <input type="text" id="senha" name="senha" placeholder="Digite a senha" required>

            <div class="container-radio">
                <div>
                    <label for="administrador">Administrador</label>
                    <input type="radio" id="administrador" name="tipo" value="administrador" >
                </div>
                <div>
                    <label for="comum">Comum</label>
                    <input type="radio" id="comum" name="tipo" value="comum" >
                </div>
            </div>

            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar usuário"/>
        </form>
        <a class="botao-voltar" href="principal-admin.php">Voltar</a>
        <a class="botao-sair" href="logout.php">Sair</a>

    </section>
</main>

</body>
</html>
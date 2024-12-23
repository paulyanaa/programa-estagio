<?php

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/UsuarioModel.php";
require_once "Repository/UsuarioRepository.php";
session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['login'];
        $password = $_POST['senha'];


        $oUsuarioRepository = new UsuarioRepository();
        $oUsuarioRepository->logarUsuario($username, $password);

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
<section class="container-form">
    <h1>Login</h1>

    <form method="post">

        <label for="login">Usuário</label>
        <input type="text" id="login" name="login"  placeholder="Digite o seu usuário" required><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha"  placeholder="Digite a sua senha" required><br>

        <button type="submit">Entrar</button>
    </form>

</section>

</body>
</html>
<?php
require_once "ManipulaSessoes.php";
session_start();

if($_SERVER['REQUEST_METHOD']=='POST') {
    $sUuarioInserido = $_POST['usuario'];
    $sSenhaInserida = $_POST['senha'];

    (new ManipulaSessoes())->autenticaLogin($sUuarioInserido, $sSenhaInserida);
};
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<section class="container-form">

    <form method="post">

        <label for="usuario">USUÁRIO</label><br>
        <input type="text" id="usuario" name="usuario"  placeholder="Digite o seu login" required><br>

        <label for="senha">SENHA</label><br>
        <input type="password" id="senha" name="senha"  placeholder="Digite a sua senha" required><br>
        <br>
        <button type="submit" name="entrar">Entrar</button>
    </form>
</section>
</body>
</html>
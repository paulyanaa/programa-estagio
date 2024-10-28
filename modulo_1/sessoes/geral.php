<?php
session_start();
require_once "ManipulaSessoes.php";
$sNome = (new ManipulaSessoes())->buscaNomeAtual();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geral</title>
</head>
<body>
<section>
<h1>Seja bem-vindo(a), <?= $sNome ?>!</h1>

    <a class="botao-sair" href="login.php">Sair</a>
    <a class="botao-usuarios" href="listarUsuarios.php">Ver todos os usuários</a>

</section>
</body>
</html>
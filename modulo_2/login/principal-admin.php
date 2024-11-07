<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login-usuario.php");
    exit();
}
$sNome = $_SESSION['username'];
$tHoraAtual = (new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo')))->format('H:i:s');

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
    <title>Administrador</title>
</head>
<body>
<main>

    <h1>Principal - Administrador</h1>
    <h2>Olá, <?=ucfirst($sNome)?>!</h2>
    <h3><?=$tHoraAtual?></h3>

    <section class="container-buttons">
        <a class="botao-cadastrar-usuario" href="cadastrar-usuario.php" >Cadastrar Usuário</a>
        <a class="botao-listar-usuarios" href="listar-usuarios.php" >Listar Usuários</a>

        <a class="botao-sair" href="logout.php">Sair</a>

    </section>
</main>

</body>
</html>

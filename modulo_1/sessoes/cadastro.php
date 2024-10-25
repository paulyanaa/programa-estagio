<?php
session_start();

if(!isset($_SESSION['aUsuariosCadastrados'])){
    $_SESSION['aUsuariosCadastrados'] = [];
}

if($_SERVER['REQUEST_METHOD']=='POST') {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $aUsuariosCadastrados = [
        'nome' => $nome,
        'usuario' => $usuario,
        'senha' => $senha
    ];
    $_SESSION['aUsuariosCadastrados'][] = $aUsuariosCadastrados;
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <section class="container-form">

        <form method="post">

            <label for="nome">NOME</label><br>
            <input type="text" id="nome" name="nome"  placeholder="Digite o nome" required><br>

            <label for="usuario">USUÁRIO</label><br>
            <input type="text" id="usuario" name="usuario"  placeholder="Digite o seu login" required><br>

            <label for="senha">SENHA</label><br>
            <input type="password" id="senha" name="senha"  placeholder="Digite a sua senha" required><br>
            <br>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </form>
    </section>
</body>
</html>

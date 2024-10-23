<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['cpf'] = htmlspecialchars($_POST['cpf']);
        $_SESSION['telefone'] = htmlspecialchars($_POST['telefone']);
        $_SESSION['email'] = htmlspecialchars($_POST['email']);
    }

    $sNome = $_SESSION['nome'];
    $sCpf = $_SESSION['cpf'];
    $sTelefone = $_SESSION['telefone'];
    $sEmail = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
</head>
<body>
    <h1><?php echo $sNome; ?></h1>

    <section class="container-infos">
        <h3>Dados Pessoais</h3>
        <p> CPF: <?php echo $sCpf; ?></p>
        <p> Telefone: <?php echo $sTelefone; ?></p>
        <p> Email: <?php echo $sEmail; ?></p>
    </section>
    <br>
    <section class="container-form">
        <h3>Registro do Usuário</h3>

        <form action="registro.php" method="post">

            <label for="login">Login</label><br>
            <input type="text" id="login" name="login"  placeholder="Digite o seu login" required><br>

            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="senha"  placeholder="Digite a sua senha" required><br>

            <button type="submit">Registrar</button>
        </form>
    </section>

</body>
</html>
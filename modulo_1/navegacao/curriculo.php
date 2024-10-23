<?php
    $sNome = htmlspecialchars($_POST["nome"]);
    $sCpf = htmlspecialchars($_POST["cpf"]);
    $sTelefone = htmlspecialchars($_POST["telefone"]);
    $sEmail = htmlspecialchars($_POST["email"]);

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
            <input type="hidden" name="nome" value="<?php echo $sNome; ?>">

            <label for="login">Login</label><br>
            <input type="text" id="login" name="login"  placeholder="Digite o seu login" required><br>

            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="senha"  placeholder="Digite o seu senha" required><br>

            <button type="submit">Registrar</button>
        </form>
    </section>

</body>
</html>
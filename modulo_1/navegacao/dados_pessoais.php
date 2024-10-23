<?php
    session_start();

    $_SESSION['nome'] = htmlspecialchars($_GET['nome']);

    $sNome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Pessoais</title>
</head>
<body>
    <h1><?php echo $sNome; ?></h1>
    <section class="container-form">

        <form action="curriculo.php" method="post">

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf"  placeholder="Digite o seu CPF" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone"  placeholder="Digite o seu telefone para contato" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email"  placeholder="Digite o nseu e-mail" required>
            <br>
            <button type="submit">Avançar</button>
        </form>
    </section>
</body>
</html>

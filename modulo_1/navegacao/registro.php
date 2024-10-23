<?php
$sNome = htmlspecialchars($_POST["nome"]);
$sLogin = htmlspecialchars($_POST["login"]);
$sSenha = htmlspecialchars($_POST["senha"]);
$tHoraAtual = new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo'));

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <?php if(($sNome === $sLogin) && ($sSenha === 'moobitech')) { ?>
        <h1><?php echo "Olá, {$sNome}! Seu registro foi concluído com sucesso hoje às {$tHoraAtual->format('H:i:s')}."; ?></h1>
    <?php } else{ ?>
        <a href="curriculo.php">Voltar ao formulário</a>
    <?php }; ?>

</body>
</html>



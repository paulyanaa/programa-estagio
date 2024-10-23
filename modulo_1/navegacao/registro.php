<?php
    session_start();
    $sNome = $_SESSION['nome'];
    $sLogin = htmlspecialchars($_POST['login']);
    $sSenha = htmlspecialchars($_POST['senha']);

    $tHoraAtual = new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo'));

    if(($sNome === $sLogin) && ($sSenha === 'moobitech')) {
        echo "<h2>Olá, {$sNome}! Seu registro foi concluído com sucesso hoje às {$tHoraAtual->format('H:i:s')}.</h2>";
    } else{
        header("Location: curriculo.php");
    };
?>





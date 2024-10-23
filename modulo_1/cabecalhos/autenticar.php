<?php
    $sLogin = "paulyana";
    $sSenha = "moobitech";

    if((isset($_SERVER['PHP_AUTH_USER']) && ($_SERVER['PHP_AUTH_USER'] === $sLogin)) AND
        (isset($_SERVER['PHP_AUTH_PW']) && ($_SERVER['PHP_AUTH_PW'] === $sSenha)))
    {
        header("HTTP/1.1 200 OK");
        echo "<h1>Logado com sucesso!</h1>";

    } else
    {
        header('WWW-Authenticate: Basic realm= "Teste Autenticação"');
        header("HTTP/1.0 401 Unauthorized");
        echo "<h1>Acesso negado!</h1>";
    }
<?php
session_start();

foreach ($_SESSION["aUsuariosCadastrados"] as $usuario) {
    echo "\n Nome:{$usuario['nome']} \n Usuário: {$usuario['usuario']} \n Senha: {$usuario['senha']}\n";
}

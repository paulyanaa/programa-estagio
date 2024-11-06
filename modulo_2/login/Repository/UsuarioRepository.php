<?php

require_once '../banco_de_dados/MoobiDatabaseHandler.php';

class UsuarioRepository
{
    public function __construct()
    {
        $this->oBancoUsuarios = new MoobiDatabaseHandler("localhost", 'root', 'password','3306', 'cadastros');
    }

    public function cadastrarUsuario(UsuarioModel $oUsuario){

        $sSenhaCriptografada = password_hash($oUsuario->getSenha(), PASSWORD_DEFAULT);

        $sSql = "INSERT INTO usuarios (username, senha, tipo) VALUES (?,?, ?)";
        $sParametros = [
            1 => $oUsuario->getSUsername(),
            2 => $sSenhaCriptografada,
            3 => $oUsuario->getSTipoUsuario()
        ];
        $this->oBancoUsuarios->startTransaction();
        $this->oBancoUsuarios->execute($sSql, $sParametros);
        $this->oBancoUsuarios->endTransaction();
    }

    public function buscarUsuarioPorUsername($sUsername):array{
        $sSql = "SELECT * FROM usuarios WHERE username = ?";
        $sParametros = [1 => $sUsername];
        $aUsuario = $this->oBancoUsuarios->query($sSql, $sParametros);
        return $aUsuario[0];
    }

    public function logarUsuario($sUsername, $sSenha){

        $aUsuario = $this->buscarUsuarioPorUsername($sUsername);

        if ($aUsuario && password_verify($sSenha,$aUsuario['senha'])) {
            $_SESSION['username'] = $aUsuario['username'];
            $_SESSION['senha'] = $aUsuario['senha'];

            if ($aUsuario['tipo'] === 'administrador'){
                header("Location: principal-admin.php");
                exit();
            }else{
                header("Location: principal-comum.php");
                exit();
            }
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }



    }
}
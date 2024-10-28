<?php
class ManipulaSessoes{

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function salvaUsuario($sNome, $sUsuario, $sSenha)
    {
        if(!isset($_SESSION['aUsuariosCadastrados'])){
            $_SESSION['aUsuariosCadastrados'] = [];
        }
        $this->sNome = $sNome;
        $this->sSenha = $sSenha;
        $this->sUsuario = $sUsuario;

        $aUsuariosCadastrados = [
            'nome' => $this->sNome,
            'usuario' => $this->sUsuario,
            'senha' => $this->sSenha
        ];
        $_SESSION['aUsuariosCadastrados'][] = $aUsuariosCadastrados;
    }

    public function buscaNomeAtual():string
    {
        $aUsuarioAtual = end($_SESSION['aUsuariosCadastrados']);
        $sNomeAtual = $aUsuarioAtual['nome'];
        return $sNomeAtual;
    }

    public function autenticaLogin($sUsuario, $sSenha){
        $this->sUsuario = $sUsuario;
        $this->sSenha = $sSenha;

        $aUsuarioAtual = end($_SESSION['aUsuariosCadastrados']);
        $sUsuarioAtual = $aUsuarioAtual['usuario'];
        $sSenhaAtual = $aUsuarioAtual['senha'];

        if(($sUsuarioAtual=== $this->sUsuario) && ($sSenhaAtual === $this->sSenha) ) {
            header('Location: geral.php');
        }else{
            echo '<h1>Usuário ou senha incorreto.</h1>';}
    }

    public function buscaTodosUsuarios(){
        foreach ($_SESSION["aUsuariosCadastrados"] as $usuario) {
            echo "Nome: {$usuario['nome']} | Usuário: {$usuario['usuario']} | Senha: {$usuario['senha']}<br>";
        }
    }



}

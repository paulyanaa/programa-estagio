<?php
class UsuarioModel
{
    private $iId;
    private $sUsername;
    private $sSenha;
    private $sTipoUsuario;


    public function __construct(?int $iId, string $sUsername, string $sSenha, string $sTipoUsuario)
    {
        $this->iId = $iId;
        $this->sUsername = $sUsername;
        $this->sSenha = $sSenha;
        $this->sTipoUsuario = $sTipoUsuario;
    }


    public function getIId(): ?int
    {
        return $this->iId;
    }

    public function getSUsername(): string
    {
        return $this->sUsername;
    }

    public function getSSenha(): string
    {
        return $this->sSenha;
    }

    public function getSTipoUsuario(): string
    {
        return $this->sTipoUsuario;
    }



}
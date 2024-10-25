<?php

class UsuarioModel{
    private $iId;
    private $sNome;
    private $sUsuario;
    private $sSenha;

    public function __construct(?int $iId, string $sNome, string $sUsuario, string $sSenha)
    {
        $this->iId = $iId;
        $this->sNome = $sNome;
        $this->sUsuario = $sUsuario;
        $this->sSenha = $sSenha;
    }

    public function getIId(): ?int
    {
        return $this->iId;
    }

    public function getSNome(): string
    {
        return $this->sNome;
    }

    public function getSUsuario(): string
    {
        return $this->sUsuario;
    }

    public function getSSenha(): string
    {
        return $this->sSenha;
    }


}
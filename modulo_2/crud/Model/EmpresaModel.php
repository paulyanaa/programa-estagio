<?php

namespace Model;

class EmpresaModel
{
    private $iId;
    private $sNome;
    private $sEmail;
    private $sCnpj;
    private $sCep;
    private $sEstado;
    private $sCidade;
    private $sBairro;
    private $sLogradouro;
    private $sTelefone;

    public function __construct(
        string $iId,
        string $sNome,
        string $sEmail,
        string $sCnpj,
        string $sCep,
        string $sEstado,
        string $sCidade,
        string $sBairro,
        string $sLogradouro,
        string $sTelefone)
    {
        $this->iId = $iId;
        $this->sNome = $sNome;
        $this->sEmail = $sEmail;
        $this->sCnpj = $sCnpj;
        $this->sCep = $sCep;
        $this->sEstado = $sEstado;
        $this->sCidade = $sCidade;
        $this->sBairro = $sBairro;
        $this->sLogradouro = $sLogradouro;
        $this->sTelefone = $sTelefone;
    }

    public function getIId(): int
    {
        return $this->iId;
    }


    public function getSNome(): string
    {
        return $this->sNome;
    }

    public function getSEmail(): string
    {
        return $this->sEmail;
    }

    public function getSCnpj(): string
    {
        return $this->sCnpj;
    }

    public function getSCep(): string
    {
        return $this->sCep;
    }

    public function getSEstado(): string
    {
        return $this->sEstado;
    }

    public function getSCidade(): string
    {
        return $this->sCidade;
    }

    public function getSBairro(): string
    {
        return $this->sBairro;
    }

    public function getSLogradouro(): string
    {
        return $this->sLogradouro;
    }

    public function getSTelefone(): string
    {
        return $this->sTelefone;
    }




}
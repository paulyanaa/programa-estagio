<?php

class Empresa{
    private $sCnpj;
    private $sRazaoSocial;
    private $sNomeFantasia;
    private $sEmail;
    private $sTelefone;

    public function __construct($sCnpj, $sRazaoSocial, $sNomeFantasia, $sEmail, $sTelefone)
    {
        $this->sCnpj = $sCnpj;
        $this->sRazaoSocial = $sRazaoSocial;
        $this->sNomeFantasia = $sNomeFantasia;
        $this->sEmail = $sEmail;
        $this->sTelefone = $sTelefone;
    }

    public function getSCnpj()
    {
        return $this->sCnpj;
    }

    public function getSRazaoSocial()
    {
        return $this->sRazaoSocial;
    }

    public function getSNomeFantasia()
    {
        return $this->sNomeFantasia;
    }

    public function getSEmail()
    {
        return $this->sEmail;
    }

    public function getSTelefone()
    {
        return $this->sTelefone;
    }


}
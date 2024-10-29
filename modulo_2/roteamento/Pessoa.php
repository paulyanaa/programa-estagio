<?php

class Pessoa{
    private $sNome;
    private $dDataNascimento;
    private $sCpf;

    public function __construct(string $sNome, DateTimeImmutable $dDataNascimento, string $sCpf)
    {
        $this->sNome = $sNome;
        $this->dDataNascimento = $dDataNascimento;
        $this->sCpf = $sCpf;
    }

    public function calculaIdade():int{
        return $this->dDataNascimento->diff(new DateTime())->format('%y');
    }


    public function getSNome(): string
    {
        return $this->sNome;
    }

    public function getDDataNascimento(): DateTimeImmutable
    {
        return $this->dDataNascimento;
    }

    public function getSCpf(): string
    {
        return $this->sCpf;
    }




}

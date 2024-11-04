<?php

use Model\EmpresaModel;

require_once '../banco_de_dados/MoobiDatabaseHandler.php';

class EmpresaRepository
{

    public function __construct()
    {
        $this->oBancoEmpresa = new MoobiDatabaseHandler("localhost", 'root', 'password','3306', 'cadastros');
    }

    public function buscaTodasEmpresas():array
    {
        $sSql = "SELECT * FROM empresas";
        $aEmpresas = $this->oBancoEmpresa->query($sSql);
        return $aEmpresas;
    }

    public function insereEmpresa(EmpresaModel $empresa):void{
        $sSql = "INSERT INTO empresas (id, nome, email, cnpj, cep, estado, cidade, bairro, logradouro, telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $aParametros = [
            1 => $empresa->getIId(),
            2 => $empresa->getSNome(),
            3 => $empresa->getSEmail(),
            4 => $empresa->getSCnpj(),
            5 => $empresa->getSCep(),
            6 => $empresa->getSEstado(),
            7 => $empresa->getSCidade(),
            8 => $empresa->getSBairro(),
            9 => $empresa->getSLogradouro(),
            10 => $empresa->getSTelefone()
        ];

        $this->oBancoEmpresa->startTransaction();
        $this->oBancoEmpresa->execute($sSql, $aParametros);
        $this->oBancoEmpresa->endTransaction();
    }

    public function deletaEmpresa(int $iId):void{
        $sSql = "DELETE FROM empresas WHERE id = ?";
        $aParametro = [
            1 => $iId
        ];

        $this->oBancoEmpresa->startTransaction();
        $this->oBancoEmpresa->execute($sSql, $aParametro);
        $this->oBancoEmpresa->endTransaction();
    }



}
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

        $aDadosEmpresas = array_map(function($empresa){
            return $this->formarObjeto($empresa);
        }, $aEmpresas);
        return $aDadosEmpresas;
    }
    public function buscaEmpresa($id): EmpresaModel
    {
        $sSql = "SELECT * FROM empresas WHERE id_empresa = $id";
        $aEmpresas = $this->oBancoEmpresa->query($sSql);

        $oEmpresa = $this->formarObjeto($aEmpresas);
        return $oEmpresa;
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

    public function atualizaEmpresa(EmpresaModel $empresa):void{
        $sSql = "UPDATE produtos SET nome = ?, email = ?, cnpj = ?, cep = ?, estado = ?, cidade = ?, bairro = ?, logradouro = ?, telefone = ? WHERE id = ?";
        $aParametros = [

            1 => $empresa->getSNome(),
            2 => $empresa->getSEmail(),
            3 => $empresa->getSCnpj(),
            4 => $empresa->getSCep(),
            5 => $empresa->getSEstado(),
            6 => $empresa->getSCidade(),
            7 => $empresa->getSBairro(),
            8 => $empresa->getSLogradouro(),
            9 => $empresa->getSTelefone(),
            10 => $empresa->getIId()
        ];
        $this->oBancoEmpresa->startTransaction();
        $this->oBancoEmpresa->execute($sSql, $aParametros);
        $this->oBancoEmpresa->endTransaction();

    }

    private function formarObjeto($empresa):EmpresaModel
    {
        $empresaObjeto = new EmpresaModel(
            $empresa['id'],
            $empresa['nome'],
            $empresa['email'],
            $empresa['cnpj'],
            $empresa['cep'],
            $empresa['estado'],
            $empresa['cidade'],
            $empresa['bairro'],
            $empresa['logradouro'],
            $empresa['telefone']
        );

        return $empresaObjeto;
    }




}
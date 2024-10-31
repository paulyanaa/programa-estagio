<?php

class EmpresaRepository
{
    private $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listaTodas():array{

        $sSql = "SELECT * FROM empresa";
        $PDOStatement = $this->pdo->query($sSql);
        $aDadosEmpresas =  $PDOStatement->fetchAll(PDO::FETCH_OBJ);

        $aTodosDadosEmpresa = array_map(function($aEmpresa){
            return $this->criaObjetoEmpresa($aEmpresa);
        }, $aDadosEmpresas);

        return $aTodosDadosEmpresa;
    }

    public function criaObjetoEmpresa(array $aDadosEmpresa):Empresa{
        $oEmpresa = new Empresa(
            $aDadosEmpresa['id'],
            $aDadosEmpresa['nome'],
            $aDadosEmpresa['email'],
            $aDadosEmpresa['cnpj'],
            $aDadosEmpresa['cep'],
            $aDadosEmpresa['estado'],
            $aDadosEmpresa['cidade'],
            $aDadosEmpresa['bairro'],
            $aDadosEmpresa['logradouro'],
            $aDadosEmpresa['telefone']
        );
        return $oEmpresa;
    }

}
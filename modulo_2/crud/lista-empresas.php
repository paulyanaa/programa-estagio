<?php

use Model\EmpresaModel;

require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/EmpresaModel.php";
require_once "Repository/EmpresaRepository.php";


$oEmpresaRepository = new EmpresaRepository();
$aEmpresas = $oEmpresaRepository->buscaTodasEmpresas();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Empresas - Admin</title>
</head>
<body>
<main>
    <h2>Lista de Empresas</h2>

    <section class="container-table">
        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Endereço</th>
                <th>Contatos</th>
                <th colspan="2">Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($aEmpresas as $oEmpresa):?>
                <tr>
                    <td><?= $oEmpresa->getSNome() ?>></td>
                    <td><?= $oEmpresa->getSCnpj() ?></td>
                    <td><?= $oEmpresa->getEnderecoCompleto() ?></td>
                    <td><?= $oEmpresa->getContatoCompleto() ?></td>
                    <td><a class="botao-editar" href="editar-empresa.php?id=<?= $oEmpresa->getIId() ?>">Editar</a></td>
                    <td>
                        <form action="excluir-empresa.php" method="post">
                            <input type="hidden" name="id" value="<?= $oEmpresa->getIId() ?>">
                            <input type="submit" class="botao-excluir" value="Excluir">
                        </form>
                    </td>
                </tr>
            <?php endforeach;?>

            </tbody>
        </table>
        <a class="botao-cadastrar" href="cadastrar-empresa.php">Cadastrar empresa</a>
    </section>
</main>
</body>
</html>

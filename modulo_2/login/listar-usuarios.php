<?php
require_once '../banco_de_dados/MoobiDatabaseHandler.php';
require_once "Model/UsuarioModel.php";
require_once "Repository/UsuarioRepository.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login-usuario.php");
    exit();
}
$sNome = $_SESSION['username'];
$tHoraAtual = (new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo')))->format('H:i:s');

$oUsuarioRepository = new UsuarioRepository();

$aUsuariosComuns = $oUsuarioRepository->buscarUsuarioComum();
$aUsuariosAdmins = $oUsuarioRepository->buscarUsuarioAdmin();


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
    <title>Lista de Usuários</title>
</head>
<body>
<main>
    <h3><?=$tHoraAtual?></h3>
    <h1>Lista de Usuários Cadastrados</h1>
    <h2>Olá, <?=ucfirst($sNome)?>!</h2>

    <section class="container-admins">
        <div>
            <h3>Usuários Administradores</h3>
        </div>
        <div class="container-usuarios-admins">
            <table>
                <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Tipo</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($aUsuariosAdmins as $admin):?>
                    <tr>
                        <td><?= $admin['username']?></td>
                        <td><?= $admin['tipo'] ?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
    <section class="container-comuns">
        <div>
            <h3>Usuários Comuns</h3>
        </div>
        <div class="container-usuarios-comuns">
            <table>
                <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Tipo</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($aUsuariosComuns as $comum):?>
                    <tr>
                        <td><?= $comum['username']?></td>
                        <td><?= $comum['tipo'] ?></td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </section>

    <a class="botao-sair" href="logout.php">Sair</a>

</main>
</body>
</html>
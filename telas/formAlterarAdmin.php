<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Notícias News</title>
</head>

<body>
    <?php
    require_once '../classes/Sistema.php';
    include './cabecalho.php';
    $cpf = $_REQUEST['cpf'];
    $sistema = new Sistema();
    $admin = $sistema->buscarAdmin($cpf);
    ?>
    <div class="formulario">
        <h1>Alterar Dados de Administrador ⇣ </h1><br>
        <form action="./alterarAdmin.php">
            <input type="hidden" name="cpfAntigo" value="<?= $admin->getCpf() ?>">

            <label>
                Nome:<input type="text" value="<?= $admin->getNome() ?>" name="nome">
            </label><br><br>

            <label>
                CPF:<input type="number" value="<?= $admin->getCpf() ?>" name="cpf">
            </label><br><br>

            <label>
                Email:<input type="email" value="<?= $admin->getEmail() ?>" name="email">
            </label><br><br>

            <label>
                Senha:<input type="password" value="<?= $admin->getSenha() ?>" name="senha">
            </label><br><br>

            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
    </div>
</body>

</html>
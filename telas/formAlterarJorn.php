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
    $jorn = $sistema->buscarJorn($cpf);
    ?>
    <div class="formulario">
        <h1>Alterar dados de Jornalista</h1><br>
        <form action="./alterarJornalista.php">
            <input type="hidden" name="cpfAntigo" value="<?= $jorn->getCpf() ?>">

            <label>
                Nome:<input type="text" value="<?= $jorn->getNome() ?>" name="nome">
            </label><br><br>

            <label>
                CPF:<input type="number" value="<?= $jorn->getCpf() ?>" name="cpf">
            </label><br><br>

            <label>
                Email:<input type="email" value="<?= $jorn->getEmail() ?>" name="email">
            </label><br><br>

            <label>
                Senha:<input type="password" value="<?= $jorn->getSenha() ?>" name="senha">
            </label><br><br>

            <hr />
            <h3>Qualificações e áreas que deseja atuar</h3><br>
            <label>
                Sobre: 
                <textarea style="border: 0px solid #1BBFBF;" rows="6" cols="40" name="sobreJorn"><?= $jorn->getSobre() ?></textarea>
            </label><br><br>

            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
        <a href="./deletarJorn.php?cpf= <?= $jorn->getCpf() ?>" style="color: red; text-decoration:none;">Apagar Conta ❌</a>
    </div>
</body>
</html>
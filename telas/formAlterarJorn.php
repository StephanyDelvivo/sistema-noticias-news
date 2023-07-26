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
            <h3>Comprovar ter cursado ou estar cursando Jornalismo</h3><br>
            <label>
                Histórico:<input type="text" value="<?= $jorn->getHistorico() ?>" name="histJorn">
            </label><br><br>

            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
    </div>
    <?php
    include './rodape.php';
    ?>

</body>

</html>
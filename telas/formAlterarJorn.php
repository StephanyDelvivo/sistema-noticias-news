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
                Nome:<input type="text" value="<?= $jorn->getNome() ?>" name="nome" required>
            </label><br><br>

            <label>
                CPF:<input type="number" pattern="[0-9]{11}" title="11 números do CPF" title="11 números do CPF" value="<?= $jorn->getCpf() ?>" name="cpf" required>
            </label><br><br>

            <label>
                Email:<input type="email" value="<?= $jorn->getEmail() ?>" name="email" required>
            </label><br><br>

            <label>
                Senha:<input type="password" minlength="8" title="senha de no mínimo 8 dígitos" value="<?= $jorn->getSenha() ?>" name="senha" required>
            </label><br><br>

            <hr />
            <h3>Comprovar ter cursado ou estar cursando Jornalismo</h3><br>
            <label>
                Histórico:<input type="text" value="<?= $jorn->getHistorico() ?>" name="histJorn" required>
            </label><br><br>

            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
    </div>

</body>

</html>
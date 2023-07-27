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
    $assinante = $sistema->buscarAss($cpf);
    ?>
    <div class="formulario">
        <h1>Alterar Dados de Assinante</h1><br>
        <form action="./alterarAssinante.php">
            <input type="hidden" name="cpfAntigo" value="<?= $assinante->getCpf() ?>">

            <label>
                Nome:<input type="text" value="<?= $assinante->getNome() ?>" name="nome">
            </label><br><br>

            <label>
                CPF:<input type="number" value="<?= $assinante->getCpf() ?>" name="cpf">
            </label><br><br>

            <label>
                Email:<input type="email" value="<?= $assinante->getEmail() ?>" name="email">
            </label><br><br>

            <label>
                Senha:<input type="password" value="<?= $assinante->getSenha() ?>" name="senha">
            </label><br><br>

            <hr />
            <h3>Forma de Pagamento</h3><br>
            <label>
                Número do Cartão:<input type="number" value="<?= $assinante->getNumCartao() ?>" name="numCartao">
            </label>

            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
        <a href="./deletarAssinante.php?cpf= <?= $assinante->getCpf() ?>" style="color: red; text-decoration:none;">Apagar Conta ❌</a>
    </div>
</body>
</html>
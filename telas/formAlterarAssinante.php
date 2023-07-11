<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Notícias News</title>
</head>

<body>
    <?php
    require_once '../classes/Sistema.php';
    $cpf = $_REQUEST['cpf'];
    $sistema = new Sistema();
    $assinante = $sistema->buscarAss($cpf);
    ?>
    <h1>Alterar Dados de Assinante</h1>
    <form action="./alterarAssinante.php">
        <input type="hidden" name="cpfAntigo" value="<?= $assinante->getCpf() ?>">

        <label>
            Nome:
            <input type="text" value="<?= $assinante->getNome() ?>" name="nome">
        </label><br>

        <label>
            CPF:
            <input type="number" value="<?= $assinante->getCpf() ?>" name="cpf">
        </label><br>

        <label>
            Email:
            <input type="email" value="<?= $assinante->getEmail() ?>" name="email">
        </label><br>

        <label>
            Senha:
            <input type="password" value="<?= $assinante->getSenha() ?>" name="senha">
        </label><br>

        <hr />
        <h3>Forma de Pagamento</h3>
        <label>
            Número do Cartão:
            <input type="number" value="<?= $assinante->getNumCartao() ?>" name="numCartao">
        </label><br>

        <input type="submit" value="Alterar">
    </form>

</body>

</html>
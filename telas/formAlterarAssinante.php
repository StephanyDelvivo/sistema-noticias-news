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
                Nome:<input type="text" value="<?= $assinante->getNome() ?>" name="nome" required>
            </label><br><br>

            <label>
                CPF:<input type="number" pattern="[0-9]{11}" title="11 números do CPF" title="11 números do CPF" value="<?= $assinante->getCpf() ?>" name="cpf" required>
            </label><br><br>

            <label>
                Email:<input type="email" value="<?= $assinante->getEmail() ?>" name="email" required> 
            </label><br><br>

            <label>
                Senha:<input type="password" minlength="8" title="senha de no mínimo 8 dígitos" value="<?= $assinante->getSenha() ?>" name="senha" required>
            </label><br><br>

            <hr />
            <h3>Forma de Pagamento</h3><br>
            <label>
                Número do Cartão:<input type="number" pattern="[0-9]{16}" placeholder="Apenas cartão de crédito" title="16 números do cartão de crédito" value="<?= $assinante->getNumCartao() ?>" name="numCartao" required>
            </label>

            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
    </div>

</body>

</html>
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
        include './cabecalho.php';
    ?>
    <div class="formulario">
        <h1>Cadastro</h1><br>
        <form action="./cadAssinante.php">
            <label>Nome:<input type="text" name="nome" id="nome" minlength="3" title="Nome de pelo menos 3 letras" required></label><br><br>
            <label>CPF:<input type="text" name="cpf" id="cpf" pattern="[0-9]{11}" title="11 números do CPF" required></label><br><br>
            <label>Email:<input type="email" name="email" id="email" required></label><br><br>
            <label>Senha:<input type="password" name="senha" id="senha" minlength="8" title="senha de no mínimo 8 dígitos" required></label><br><br>
            <hr />
            <h3>Forma de Pagamento</h3><br>
            <label>Número do cartão: <input type="text" name="numCartao" id="numCartao" pattern="[0-9] {16}" placeholder="Apenas cartão de crédito" title="16 números do cartão de crédito" required></label><br><br>
            <input type="submit" value="Cadastrar" id="botaoEnviar"><br><br>
            <a href="./formCadJornalista.php">Cadastrar como jornalista </a>
        </form>
    </div>

</body>

</html>
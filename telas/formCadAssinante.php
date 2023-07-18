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
            <label>Nome:<input type="text" name="nome" id="nome"></label><br><br>
            <label>CPF:<input type="number" name="cpf" id="cpf"></label><br><br>
            <label>Email:<input type="email" name="email" id="email"></label><br><br>
            <label>Senha:<input type="password" name="senha" id="senha"></label><br><br>
            <hr />
            <h3>Forma de Pagamento</h3><br>
            <label>Número do cartão: <input type="number" name="numCartao" id="numCartao" placeholder="Apenas cartão de crédito"></label><br><br>
            <input type="submit" value="Cadastrar" id="botaoEnviar"><br><br>
            <a href="./formCadJornalista.php">Cadastrar como jornalista </a>
        </form>
    </div>

</body>

</html>
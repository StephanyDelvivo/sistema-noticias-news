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
        <form action="./cadJornalista.php">
            <label>Nome:<input type="text" name="nome" id="nome"></label><br><br>
            <label>CPF:<input type="number" name="cpf" id="cpf"></label><br><br>
            <label>Email:<input type="email" name="email" id="email"></label><br><br>
            <label>Senha:<input type="password" name="senha" id="senha"></label><br><br>
            <hr />
            <h3>Comprovar ter cursado ou estar cursando Jornalismo</h3><br>
            <label>Histórico:<input type="text" name="histJorn" id="histJorn"></label><br><br>
            <input type="submit" value="Cadastrar" id="botaoEnviar"><br>
        </form>
    </div>

</body>

</html>
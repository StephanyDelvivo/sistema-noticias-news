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
        <form action="./cadCategoria.php">
            <label>Nome:<input type="text" name="nome" id="nome"></label>
            <input type="submit" value="Cadastrar" id="botaoEnviar">
        </form>
    </div>

</body>

</html>
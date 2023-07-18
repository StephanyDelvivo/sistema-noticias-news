<?php
require_once '../classes/Sistema.php';
$sistema = new Sistema();
$categorias = $sistema->getCat();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Noticias News</title>
</head>

<body>
    <?php
    include './cabecalho.php';
    ?>
    <div class="formulario-noticia">
        <h1>Cadastrar Noticia</h1><br>
        <form action="./cadNoticia.php">
            <label for="titulo">
                Título:<textarea rows="6" cols="50" name="titulo" id="titulo"></textarea>
            </label><br><br>
            <label>
                Corpo do Texto:<textarea rows="50" cols="100" name="corpoTexto" id="corpoTexto"></textarea>
            </label><br><br>
            <label>
                Imagem:<input type="text" name="imgNoticia" id="imgNoticia" size="50" placeholder="Endereço da imagem">
            </label><br><br>
            <select name="categoria" id="">
                <?php
                foreach ($categorias as $cats) :
                ?>
                    <option value="<?= $cats->getCodCateg() ?>"><?= $cats->getNome() ?></option>
                <?php
                endforeach;
                ?>
            </select><br><br>
            <input type="submit" value="Cadastrar" id="botaoEnviar">
        </form>
    </div>

</body>

</html>
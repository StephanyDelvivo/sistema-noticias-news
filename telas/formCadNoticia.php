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
        <form action="./cadNoticia.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="cpf" value="<?=$usuarioLogado->getCpf()?>">
            <label for="titulo">
                Título:<textarea rows="6" cols="50" name="titulo" id="titulo" required></textarea>
            </label><br><br>
            <label>
                Corpo do Texto:<textarea rows="50" cols="100" name="corpoTexto" id="corpoTexto" required></textarea>
            </label><br><br>
            <label>
                Imagem:<input type="file" name="imgNoticia" id="imgNoticia">
            </label><br><br>
            <select name="categoria" id="" required>
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
    <?php 
        include './rodape.php';
     ?>

</body>

</html>
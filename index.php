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
        require_once './classes/Sistema.php';
        $sistema = new Sistema;
        include './telas/cabecalho.php';
    ?>
    <?php
        $noticias = $sistema->getNotic();
    ?>
    <hr>
    <h2>Noticias</h2><br>
    <?php
        foreach ($noticias as $noticia):
    ?>
    <h4>
        <a href="./pagNoticia.php?codNoticia=<?=$noticia->getCodNoticia()?>"><?= $noticia->getTitulo()?></a>
    </h4><br>
    <img src="<?= $noticia->getImgNoticia() ?>" />
    <?php
        endforeach;
    ?>


</body>
</html>
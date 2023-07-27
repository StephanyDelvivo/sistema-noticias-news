<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Notícias News</title>
</head>
<body>
    <?php
    require_once '../classes/Sistema.php';
    $sistema = new Sistema();
    include './cabecalho.php';
    $noticias = $sistema->getNotic();
    $codCateg = $_REQUEST['codCateg'];

    $noticias = $sistema->buscarNoticiasPorCat($codCateg);
    foreach ($noticias as $noticia):
        if($noticia->getStatusNotic()=='Aprovada'):
    ?>
            <div class="noticia">
                <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">
                    <img src="<?= $noticia->getImgNoticia() ?>" />
                </a>
                <h4>
                    <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>"><?= $noticia->getTitulo() ?></a>
                </h4><br>
    <?php
    endif;
    endforeach;
    ?>
            </div>
</body>
</html>
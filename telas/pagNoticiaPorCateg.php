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
    $categoria = $sistema->buscarCat($codCateg);

    $noticias = $sistema->buscarNoticiasPorCat($codCateg);
    ?>
    <div class="noticia-por-categ">
    <h1 style="text-align: center;">Todas as notícias de <?= $categoria->getNome() ?> ↓</h1><br>
    <?php
    foreach ($noticias as $noticia):
        if($noticia->getStatusNotic()=='Aprovada'):
    ?>
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
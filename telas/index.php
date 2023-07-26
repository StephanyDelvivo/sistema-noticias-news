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
    $sistema = new Sistema;
    include './cabecalho.php';
    ?>
    <?php
    $noticias = $sistema->getNotic();
    $categorias = $sistema->getCat();
    foreach ($categorias as $categoria):
    ?>
    <div class="noticia">
        <h3>
            <a href="./pagNoticiaPorCateg.php?codCateg=<?= $categoria->getCodCateg()?>"><?= $categoria->getNome()?> --></a>
        </h3>
        <?php
            $noticias = $sistema->buscarNoticiasPorCat($categoria->getCodCateg());
            foreach ($noticias as $noticia):
                if($noticia->getStatusNotic()=='Aprovada'):
        ?>
        <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">
            <img src="<?= $noticia->getImgNoticia() ?>" />
        </a>
        <h4>
            <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>"><?=$noticia->getPremium()? '⭐ ':''?><?= $noticia->getTitulo() ?></a>
        </h4><br>
      
        <?php
          
            endif;
            endforeach;
        ?>
      
    </div>
   
        <?php 
            endforeach;
        ?>
     <?php 
        include './rodape.php';
     ?>

   
</body>

</html>
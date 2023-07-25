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
    ?>
    <div class="carrosel">
        <div class="fotosNoticia">
            <div>
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
            </div>

            <div class="fotoCarrosel" >
                <img src="../imagem/politica.jpg" alt="foto1">
            </div>
            <div>
                <img class="fotoCarrosel" src="../imagem/saude.png" alt="foto2">
            </div>
            <div>
                <img class="fotoCarrosel" src="../imagem/tecnologia1.jpeg" alt="foto3">
            </div>
            <div>
                <img class="fotoCarrosel" src="../imagem/economia.jpg" alt="foto4">
            </div>  

            <div class="navegador">
                <div class="btn1"></div>
                <div class="btn2"></div>
                <div class="btn3"></div>
                <div class="btn4"></div>
            </div>
        </div> 

        <div class="manual-navegador">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>
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
            <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>"><?= $noticia->getTitulo() ?></a>
        </h4><br>
        <?php
            endif;
            endforeach;
        ?>
    </div>
    <?php 
    endforeach;
    ?>
</body>

</html>
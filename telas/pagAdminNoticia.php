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
    $noticias = array_reverse($sistema->getNotic());
    foreach ($noticias as $noticia) :
    ?>
        <div class="noticia">
            <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">
                <img src="<?= $noticia->getImgNoticia() ?>" />
            </a>
            <h4>
                <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>"><?= $noticia->getTitulo() ?></a><br><br>
                <a href="./aprovarNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>&statusNoticia=Aprovada">Aprovar ✅</a><br>
                <a href="./aprovarNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>&statusNoticia=Reprovada">Reprovar❌</a><br>
                <a href="./exclusivaNoticia.php?codNoticia=<?= $noticia->getCodNoticia()?>&premium=true">Deixar notícia exclusiva 💎</a><br>
                <hr>
                <?php
                if ($noticia->getStatusNotic() === NULL) {
                    echo 'Pendente';
                } else {
                    echo $noticia->getStatusNotic();
                }
                ?>
            </h4><br>
        </div>
    <?php
    endforeach;
    ?>
</body>
</html>
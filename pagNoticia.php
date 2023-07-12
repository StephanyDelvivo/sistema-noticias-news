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
        $sistema = new Sistema();
        include './telas/cabecalho.php';
        $noticia = $sistema->buscarNotic($_GET['codNoticia']);
        if(isset($_POST['comentou'])){
            $comentario = new Comentario($_POST['comentario']);
            $comentario->setAutor($_SESSION['usuario']);
            #var_dump($comentario);
            #$sistema->cadastrarComent($comentario);
            $noticia->comentar($comentario);
        }
        if($noticia === NULL):
    ?>
            <h1>Erro</h1>
            <p>Nóticia não encontrada</p>
            <a href="index.php">Voltar</a>
    <?php
        else:
    ?>
            <h1><?=$noticia->getTitulo()?></h1>
            <p><?=$noticia->getCorpoTexto()?></p>
            <img src="<?=$noticia->getImgNoticia()?>" alt="Imagem da notícia">
            <h3>Comentarios</h3>
            <?php
                if(isset($_SESSION['usuario'])) {
                    ?>
                        <p>Novo comentario</p>
                        <form action="" method="post">
                            <textarea name="comentario" id="comentario" cols="50" rows="5"></textarea>
                            <input type="submit" value="comentar" name="comentou">
                        </form>
                    <?php
                }
                foreach (array_reverse($noticia->getComentarios()) as $comentario):
            ?>
                <h4>
                    <?= $comentario->getAutor()?>
                </h4>
                <p><?= $comentario->getTextoComent()?></p><br><br>
            <?php
                endforeach;
            ?>
    <?php
        endif;
    ?>
</body>
</html>
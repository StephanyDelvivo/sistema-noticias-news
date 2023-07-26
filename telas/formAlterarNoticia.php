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
    require_once '../classes/Sistema.php';
    include './cabecalho.php';
    $codNoticia = $_REQUEST['codNoticia'];
    $sistema = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    $categorias = $sistema->getCat();
    ?>
    <div class="formulario-noticia">
        <h1>Editar Notícia</h1><br>
        <form action="./alterarNoticia.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="codNoticia" value="<?= $noticia->getCodNoticia() ?>">

            <label for="titulo">
                Título:<textarea rows="6" cols="50" name="titulo" id="titulo"><?= $noticia->getTitulo() ?></textarea>
            </label><br><br>
            <label>
                Corpo do Texto:<textarea rows="30" cols="100" name="corpoTexto" id="corpoTexto"><?= $noticia->getCorpoTexto() ?></textarea>
            </label><br><br>
            <label>
                Imagem:<input type="file" name="imgNoticia" id="imgNoticia" size="50" value="<?= $noticia->getImgNoticia() ?>">
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
            <input type="submit" value="Salvar" id="botaoEnviar">
        </form>
    </div>
    <?php
    include './rodape.php';
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias News</title>
</head>
<body>
    <?php
        require_once '../classes/Sistema.php';
        $codNoticia = $_REQUEST['codNoticia'];
        $sistema = new Sistema();
        $noticia = $sistema->buscarNotic($codNoticia);
    ?>
    <h1>Editar Notícia</h1>
    <form action="./alterarNoticia.php">
        <input type="hidden" name="codNoticia" value="<?= $noticia->getCodNoticia() ?>">

        <label for="titulo">
            Título: 
            <textarea rows="6" cols="50" name="titulo" id="titulo"><?= $noticia->getTitulo()?></textarea>
        </label><br>
        <label>
            Corpo do Texto: 
            <textarea rows="30" cols="100" name="corpoTexto" id="corpoTexto"><?= $noticia->getCorpoTexto()?></textarea>
        </label><br>
        <label>
            Imagem: 
            <input type="file" name="imgNoticia" id="imgNoticia">
        </label><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
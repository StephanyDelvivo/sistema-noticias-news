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
        $codComent = $_REQUEST['codComent'];
        $sistema = new Sistema();
        $noticia = $sistema->buscarNotic($codNoticia);
        $comentario = $noticia->buscarComent($codComent);
    ?>
    <h1>Editar Comentario</h1>
    <form action="./alterarComentario.php">
        <input type="hidden" name="codNoticia" value="<?= $noticia->getCodNoticia() ?>">
        <input type="hidden" name="codComent" value="<?= $comentario->getCodComent() ?>">

        <label for="autor">
            Usuario:
            <input type="text" disabled value="<?=$comentario->getAutor()->getNome()?>">
        </label><br>
        <label>
            Comentario: 
            <textarea rows="5" cols="50" name="textoComent" id="textoComent"><?= $comentario-> getTextoComent()?></textarea>
        </label><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>
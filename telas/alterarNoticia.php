<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $titulo = $_REQUEST['titulo'];
    $corpoTexto = $_REQUEST['corpoTexto'];
    $imgNoticia = $_REQUEST['imgNoticia'];

    $sistema  = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    $noticia->setTitulo($titulo);
    $noticia->setCorpoTexto($corpoTexto);
    $noticia->setImgNoticia($imgNoticia);

?>
<script>
    window.location.href = "../index.php"
</script>
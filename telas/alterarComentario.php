<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $codComent = $_REQUEST['codComent'];
    $textoComent = $_REQUEST['textoComent'];
    $sistema = new Sistema();

    $noticia = $sistema->buscarNotic($codNoticia);
    $comentario = $noticia->buscarComent($codComent);
    $comentario->setTextoComent($textoComent);

?>
<script>
    window.location.href = "../pagNoticia.php?codNoticia=<?=$noticia->getCodNoticia()?>";
</script>
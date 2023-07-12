<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $codComent = $_REQUEST['codComent'];
    $sistema = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    $noticia->deletarComent($codComent);
?>
<script>
    window.location.href = "../pagNoticia.php?codNoticia=<?=$noticia->getCodNoticia()?>";
</script>
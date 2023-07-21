<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $premium = $_REQUEST['premium'];
    $sistema = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    $noticia->setPremium(filter_var($premium, FILTER_VALIDATE_BOOLEAN));
?>
<script>
    window.location.href = "./pagAdminNoticia.php";
</script>
<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $status = $_REQUEST['statusNoticia'];

    $sistema  = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    $noticia->setStatusNotic($status);

?>
<script>
    window.location.href = "./pagAdmin.php";
</script>
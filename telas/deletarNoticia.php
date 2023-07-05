<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $sistema = new Sistema();
    $sistema->deletarNotic($codNoticia);
?>
<script>
    window.location.href = "../index.php"
</script>
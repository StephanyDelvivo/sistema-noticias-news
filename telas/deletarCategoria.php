<?php
    require_once '../classes/Sistema.php';

    $codCateg = $_REQUEST['codCateg'];
    $sistema = new Sistema();
    $sistema->deletarCat($codCateg);
?>
<script>
    window.location.href = "./index.php"
</script>
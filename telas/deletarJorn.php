<?php
    require_once '../classes/Sistema.php';

    $cpf = $_REQUEST['cpf'];
    $sistema = new Sistema();
    $sistema->deletarJorn($cpf);

    include './formLogout.php';
?>
<script>
    window.location.href = "./index.php"
</script>
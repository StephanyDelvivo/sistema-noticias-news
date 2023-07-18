<?php
    include '../classes/Sistema.php';

    $nome = $_REQUEST['nome'];

    $cat = new Categoria($nome);
    $sistema = new Sistema();

    $sistema->cadastrarCat($cat);
?>
<script>
    window.location.href = "./index.php"
</script>
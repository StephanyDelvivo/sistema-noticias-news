<?php
    include '../classes/Sistema.php';

    $nome = $_REQUEST['nome'];
    $codCateg = $_REQUEST['codCateg'];

    $cat = new Categoria($nome, $codCateg);
    $sistema = new Sistema();

    $sistema->cadastrarCat($cat);
?>
<script>
    window.location.href = "../index.php"
</script>
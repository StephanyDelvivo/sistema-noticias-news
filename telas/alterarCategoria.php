<?php 
    require_once '../classes/Sistema.php';

    $nome = $_REQUEST['nome'];
    $codCateg = $_REQUEST['codCateg'];
   
    $sistema = new Sistema();
    $categorias = $sistema->buscarCat ($codCateg);
    $categorias->setNome($nome);
    $categorias->setcodCateg($setcodCateg);
    
?>
<script>
    window.location.href = "../index.php"
</script>
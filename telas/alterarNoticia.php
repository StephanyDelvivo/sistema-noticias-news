<?php
    require_once '../classes/Sistema.php';

    $nome_temporario=$_FILES["imgNoticia"]["tmp_name"];
    $nome_real=$_FILES["imgNoticia"]["name"];
    copy($nome_temporario,"imagens/$nome_real");

    $codNoticia = $_REQUEST['codNoticia'];
    $titulo = $_REQUEST['titulo'];
    $corpoTexto = $_REQUEST['corpoTexto'];
    $categoria = $_REQUEST['categoria'];

    $sistema  = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    $noticia->setTitulo($titulo);
    $noticia->setCorpoTexto($corpoTexto);
    $noticia->setImgNoticia("imagens/$nome_real");
    $noticia->categorizar($sistema->buscarCat($categoria));

?>
<script>
    window.location.href = "./index.php"
</script>
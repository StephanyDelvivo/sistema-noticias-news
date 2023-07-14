<?php
    include '../classes/Sistema.php';

    $titulo = $_REQUEST['titulo'];
    $corpoTexto = $_REQUEST['corpoTexto'];
    $imgNoticia = $_REQUEST['imgNoticia'];
    $categoria = $_REQUEST['categoria'];

    $sistema  = new Sistema();
    $noticia = new Noticia($titulo, $corpoTexto, $imgNoticia);
    
    $noticia->categorizar($sistema->buscarCat($categoria));
    var_dump($noticia);
    $sistema->cadastrarNotic($noticia);

    /*
     * var_dump($categorias);
        foreach($categorias as $cat){
        if($cat->getCodCateg() == 'cat4'){
        echo "acho";
    } else {
        echo "nao";
    }
     */

?>
<script>
    window.location.href = "../index.php"
</script>
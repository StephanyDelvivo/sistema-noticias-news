<?php
    include '../classes/Sistema.php';

    $titulo = $_REQUEST['titulo'];
    $corpoTexto = $_REQUEST['corpoTexto'];
    $imgNoticia = $_REQUEST['imgNoticia'];

    $sistema  = new Sistema();
    $noticia = new Noticia($titulo, $corpoTexto, $imgNoticia);
    $sistema->cadastrarNotic($noticia);

?>
<script>
    window.location.href = "../index.php"
</script>
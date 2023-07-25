<?php
    require_once '../classes/Sistema.php';

    $codNoticia = $_REQUEST['codNoticia'];
    $status = $_REQUEST['statusNoticia'];

    $sistema  = new Sistema();
    $noticia = $sistema->buscarNotic($codNoticia);
    if ($status == 'Reprovada'){
        $noticia->setStatusNotic($status);
        $sistema->deletarNotic($codNoticia);
    } else {
        $noticia->setStatusNotic($status);
    }

?>
<script>
    window.location.href = "./pagAdminNoticia.php";
</script>
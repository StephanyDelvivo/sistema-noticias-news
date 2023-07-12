<?php
    require_once '../classes/Sistema.php';
    $sistema = new Sistema();
    $codNoticia = $_GET['codNoticia'];
    $noticia = $sistema->buscarNotic($codNoticia);

    if(isset($noticia)){
        $likes = $noticia->getContAcesso() + 1;
        $noticia->setContAcesso($likes);
        sleep(1);
        echo $noticia->getContAcesso();
    } else {
        sleep(1);
        echo 'Algo deu errado!';
    }
?>
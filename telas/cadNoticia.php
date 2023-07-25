<?php
    include '../classes/Sistema.php';

    $nome_temporario=$_FILES["imgNoticia"]["tmp_name"];
    $nome_real=$_FILES["imgNoticia"]["name"];
    copy($nome_temporario,"imagens/$nome_real");

    $titulo = $_REQUEST['titulo'];
    $corpoTexto = $_REQUEST['corpoTexto'];
    // $imgNoticia = $_REQUEST['imgNoticia'];
    $categoria = $_REQUEST['categoria'];
    $cpf = $_REQUEST['cpf'];

    $sistema  = new Sistema();
    $noticia = new Noticia($titulo, $corpoTexto, "imagens/$nome_real");
    
    $noticia->categorizar($sistema->buscarCat($categoria));
    $jornalista = $sistema->buscarJorn($cpf);
    $noticia->setJorn($jornalista);
    #var_dump($noticia);
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
    window.location.href = "./index.php";
</script>
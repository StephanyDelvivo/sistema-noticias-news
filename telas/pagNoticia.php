<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Notícias News</title>
</head>

<body>
    <?php
    require_once '../classes/Sistema.php';
    $sistema = new Sistema();
    include './cabecalho.php';
    $noticia = $sistema->buscarNotic($_GET['codNoticia']);
    $categoria = $noticia->getCategoria();
    if (isset($_POST['comentou'])) {
        $comentario = new Comentario($_POST['comentario']);
        $comentario->setAutor($usuarioLogado);
        $noticia->comentar($comentario);
    }
    if ($noticia === NULL) :
    ?>
        <h1>Erro</h1>
        <p>Nóticia não encontrada</p>
        <a href="index.php">Voltar</a>
    <?php
    else :
    ?>
        <div class="pag-noticia">
            <h3>
                <a href="./pagNoticiaPorCateg.php?codCateg=<?= $categoria->getCodCateg()?>">Mais de <?= $categoria->getNome() ?> --></a>
            </h3><br>
            <h1><?= $noticia->getTitulo() ?></h1>
            <?php
                if(!$noticia->getPremium() || isset($usuarioLogado)):
            ?>
            <img src="<?= $noticia->getImgNoticia() ?>" id="imagemNoticia">
            <p><?= $noticia->getCorpoTexto() ?></p><br>
            <?php
               else:
            ?>
                <img src="<?= $noticia->getImgNoticia() ?>" id="imagemNoticia" class="borrado"><br>
                <p>Esta notícia é exclusiva para assinantes.<br><a href="./formCadAssinante.php">Torne-se assinante para ler essas e muitas outras 🤗</a></p>
                
            <?php
               endif;
            ?>
            <img onClick="darLike()" id="botaoLike" src="../icone/iconLike.png" />
            <span id="likes"><?= $noticia->getContAcesso() ?></span><br>
            <hr>
            <div class="comentarios">
                <h2>Comentarios</h2>
                <?php
                if (isset($usuarioLogado)) {
                ?>
                    <!-- <img id="iconeBatePapo" src="../icone/comentario.png" onClick="batePapo()"> -->
                    <!-- <div id="opniaoComentario"> -->
                        <form action="" method="post">
                            <textarea name="comentario" id="comentario" cols="50" rows="5"></textarea><br>
                            <input type="submit" value="Comentar" name="comentou">
                        </form><br>
                    <!-- </div> -->
                <?php
                }
                foreach (array_reverse($noticia->getComentarios()) as $comentario) :
                ?>
                    <h4>
                        De: <?= $comentario->getAutor()->getNome() ?>
                        <?php
                        if (isset($usuarioLogado)) {
                            if ($comentario->getAutor() == $usuarioLogado || $_SESSION['tipo'] == 'jor' || $_SESSION['tipo'] == 'adm') {
                                echo '<a href="./formAlterarComentario.php?codNoticia=' . $noticia->getCodNoticia() . '&codComent=' . $comentario->getCodComent() . '">Alterar</a> ';
                                echo '<a href="./deletarComentario.php?codNoticia=' . $noticia->getCodNoticia() . '&codComent=' . $comentario->getCodComent() . '">Excluir</a>';
                            }
                        }
                        ?>
                    </h4>
                    <p><?= $comentario->getTextoComent() ?></p><br><br>
                    <?php
                        endforeach;
                    ?>
            </div>
        </div>
<?php
    endif;
?>
<script>
    function darLike() {
        if(!document.getElementById("botaoLike").disabled){
            document.getElementById("botaoLike").disabled = true;
            document.getElementById("likes").innerHTML += " processando...";
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("likes").innerHTML = this.responseText;
                }
            };
            xml.open("GET", "../servicos/darLikeNoticia.php?codNoticia=" + <?= $noticia->getCodNoticia() ?>, true);
            xml.send();
        }
    };
  
    // function batePapo(){
    //     if(document.getElementById('opniaoComentario').style.display == 'block'){
    //      document.getElementById('opniaoComentario').style.display = 'none';}
    //     else {
    //         document.getElementById('opniaoComentario').style.display = 'block';
    //     }
    // }
</script>
</body>

</html>
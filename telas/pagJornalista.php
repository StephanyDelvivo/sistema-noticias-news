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
    $sistema = new Sistema;
    include './cabecalho.php';
    if ($usuarioLogado->getStatusJorn() == 'Aprovado') :
    ?>
        <h2><a href="./formCadNoticia.php">Nova notícia +</a></h2>
        <?php
        $noticias = $sistema->buscarNoticiasPorJorn($usuarioLogado->getCpf());
        foreach ($noticias as $noticia) :
        ?>
            <div class="noticia">
                <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">
                    <img src="<?= $noticia->getImgNoticia() ?>" />
                </a>
                <h4>
                    <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>"><?= $noticia->getTitulo() ?></a>
                </h4><br>
                <?php
                    if ($noticia->getStatusNotic() == NULL):
                ?>
                    <a href="./formAlterarNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">Editar ✍</a>
                    <a href="./deletarNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">Excluir 🗑</a>
                <?php
                    endif;
                ?>
            </div>
    <?php
        endforeach;
    else: echo '<h2>Aguarde seu perfil ser analisado para cadastrar notícias 😉</h2>';
    endif;
    ?>
</body>

</html>
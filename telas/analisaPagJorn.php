<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
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
    $cpf = $_REQUEST['cpf'];
    $jornalista = $sistema->buscarJorn($cpf);
    ?>
    <div class="jornalista">
        <h1>Informações de <?= $jornalista->getNome() ?> ⇣ </h1><br><br>
        <h2>Email: </h2><br>
        <p><?= $jornalista->getEmail() ?></p><br><br>
        <h2>Histórico: </h2><br>
        <p><?= $jornalista->getHistorico() ?></p><br><br>
        <hr>
        <h2>Notícias:</h2>
        <?php
        $noticias = $sistema->buscarNoticiasPorJorn($cpf);
        foreach ($noticias as $noticia) :
        ?>
        <div class="noticia">
            <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>">
                <img src="<?= $noticia->getImgNoticia() ?>" />
            </a>
            <h4>
                <a href="./pagNoticia.php?codNoticia=<?= $noticia->getCodNoticia() ?>"><?= $noticia->getTitulo() ?></a><br><br>
            </h4>
        </div>
        <?php
        endforeach;
        ?><br><br>
        <a href="./aprovarJorn.php?cpf=<?= $jornalista->getCpf() ?>&statusJorn=Aprovado">Aprovar Jornalista ✅</a><br>
        <a href="./aprovarJorn.php?cpf=<?= $jornalista->getCpf() ?>&statusJorn=Reprovado">Reprovar Jornalista ❌</a><br>
    </div>
</body>

</html>
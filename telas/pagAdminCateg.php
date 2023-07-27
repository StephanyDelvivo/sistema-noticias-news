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
    ?>
    <a href="./formCadCategoria.php">+ Nova categoria</a><br><br>
    <?php
    $categorias = $sistema->getCat();
    foreach ($categorias as $categoria) :
    ?>
        <div class="categoria">
            <h4>
                <?= $categoria->getNome() ?><br>
                <hr>
                <a href="./formAlterarCateg.php?codCateg=<?= $categoria->getCodCateg() ?>">Alterar</a>  
                <a href="./deletarCategoria.php?codCateg=<?= $categoria->getCodCateg() ?>">Excluir</a>
            </h4><br>
        </div>
    <?php
    endforeach;
    ?>
</body>
</html>
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
        include './cabecalho.php';
        $codCateg = $_REQUEST['codCateg'];
        $sistema = new Sistema();
        $categ = $sistema->buscarCat($codCateg);
    ?>
    <div class="formulario">
        <h1>Alterar dados de Categoria</h1><br>
        <form action="./alterarCategoria.php">
            <input type="hidden" name="codCateg" value="<?= $categ->getCodCateg() ?>">
            <label>
                Nome da Categoria:<input type="text" value="<?= $categ->getNome() ?>" name="nome">
            </label>
            <input type="submit" value="Alterar" id="botaoEnviar">
        </form>
    </div>
    
</body>
</html>
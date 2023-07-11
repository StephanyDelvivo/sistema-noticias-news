<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Notícias News</title>
</head>
<body>
    <?php
        require_once '../classes/Sistema.php';
        $codCateg = $_REQUEST['codCateg'];
        $sistema = new Sistema();
        $categ = $sistema->buscarCat($codCateg);
    ?>
    <h1>Alterar dados de Categoria</h1>
    <form action="./alterarJornalista.php">
        <input type="hidden" name="codCateg" value="<?= $categ->getNome() ?>">
        <label>
            Nome da Categoria: 
            <input type="text" value="<?= $jorn->getNome() ?>" name="nome">
        </label>
        <input type="submit" value="Alterar">
    </form>
    
</body>
</html>
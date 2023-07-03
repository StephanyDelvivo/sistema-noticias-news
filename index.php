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
    <div id="navBar">
        <h1>Notícias News</h1>
        <a href="./telas/formLogin.php">Logar</a>
        <a href="">Categorias</a>
    </div>
    <?php 
        require_once './classes/Sistema.php';
        $sistema = new Sistema;
        $jornalistas = $sistema->getJorn();
        print_r($jornalistas);
    ?>
</body>
</html>
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
    $jornalistas = $sistema->getJorn();
    foreach ($jornalistas as $jorn) :
    ?>
        <div class="jornalista">
            <h4>
                <a href="./analisaPagJorn.php?cpf=<?= $jorn->getCpf() ?>"><?= $jorn->getNome() ?></a><br><br>
                <a href="./analisaPagJorn.php?cpf=<?= $jorn->getCpf() ?>"><?= $jorn->getEmail() ?></a><br><br>
                <hr>
                <?php
                if ($jorn->getStatusJorn() === NULL) {
                    echo 'Pendente';
                } else {
                    echo $jorn->getStatusJorn();
                }
                ?>
            </h4><br>
        </div>
    <?php
    endforeach;
    ?>
</body>
</html>
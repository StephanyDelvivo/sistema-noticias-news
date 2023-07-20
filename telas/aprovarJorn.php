<?php
    require_once '../classes/Sistema.php';

    $cpf = $_REQUEST['cpf'];
    $statusJorn = $_REQUEST['statusJorn'];

    $sistema  = new Sistema();
    $jornalista = $sistema->buscarJorn($cpf);
    if ($statusJorn == 'Reprovado'){
        $jornalista->setStatusJorn($statusJorn);
        $sistema->deletarJorn($cpf);
    } else {
        $jornalista->setStatusJorn($statusJorn);
    }

?>
<script>
    window.location.href = "./pagAdminJorn.php";
</script>
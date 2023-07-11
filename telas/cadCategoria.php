<?php
    include '../classes/Sistema.php';

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];

    $jorn = new Jornalista($nome, $cpf, $email, $senha, $histJorn);
    $sistema = new Sistema();

    $sistema->cadastrarJorn($jorn);
?>
<script>
    window.location.href = "../index.php"
</script>
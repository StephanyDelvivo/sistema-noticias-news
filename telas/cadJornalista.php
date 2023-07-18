<?php
    include '../classes/Sistema.php';

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $histJorn = $_REQUEST['histJorn'];

    $jorn = new Jornalista($nome, $cpf, $email, $senha, $histJorn);
    $sistema = new Sistema();

    $sistema->cadastrarJorn($jorn);
?>
<script>
    window.location.href = "./index.php"
</script>
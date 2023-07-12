<?php
    include '../classes/Sistema.php';

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $numCartao = $_REQUEST['numCartao'];

    $assinante = new Assinante($nome, $cpf, $email, $senha, $numCartao);
    $sistema = new Sistema();

    $sistema->cadastrarAss($assinante);
?>
<script>
    window.location.href = "../index.php"
</script>
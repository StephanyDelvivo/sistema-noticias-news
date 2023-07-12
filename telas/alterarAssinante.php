<?php
    require_once '../classes/Sistema.php';

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $nome = $_REQUEST['nome'];
    $cpfNovo = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $numCartao = $_REQUEST['numCartao'];

    $sistema = new Sistema();
    $assinante = $sistema->buscarAss($cpfAntigo);
    $assinante->setNome($nome);
    $assinante->setCpf($cpfNovo);
    $assinante->setEmail($email);
    $assinante->setSenha($senha);
    $assinante->setNumCartao($numCartao);
?>
<script>
    window.location.href = "../index.php"
</script>
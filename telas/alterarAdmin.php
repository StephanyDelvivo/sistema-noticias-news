<?php
    require_once '../classes/Sistema.php';

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $nome = $_REQUEST['nome'];
    $cpfNovo = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $sistema = new Sistema();
    $admin = $sistema->buscarAdmin($cpfAntigo);
    $admin->setNome($nome);
    $admin->setCpf($cpfNovo);
    $admin->setEmail($email);
    $admin->setSenha($senha);
?>
<script>
    window.location.href = "./index.php"
</script>
<?php 
    require_once '../classes/Sistema.php';

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $nome = $_REQUEST['nome'];
    $cpfNovo = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $hist = $_REQUEST['histJorn'];

    $sistema = new Sistema();
    $jornalista = $sistema->buscarJorn($cpfAntigo);
    $jornalista->setNome($nome);
    $jornalista->setCpf($cpfNovo);
    $jornalista->setEmail($email);
    $jornalista->setSenha($senha);
    $jornalista->setHistorico($hist);
?>
<script>
    window.location.href = "../index.php"
</script>
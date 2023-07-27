<?php 
    require_once '../classes/Sistema.php';
    session_start();

    $cpfAntigo = $_REQUEST['cpfAntigo'];
    $nome = $_REQUEST['nome'];
    $cpfNovo = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $sobre = $_REQUEST['sobreJorn'];

    $sistema = new Sistema();
    $jornalista = $sistema->buscarJorn($cpfAntigo);
    $jornalista->setNome($nome);
    $jornalista->setCpf($cpfNovo);
    $jornalista->setEmail($email);
    $jornalista->setSenha($senha);
    $jornalista->setSobre($sobre);
    $_SESSION['cpf'] = $jornalista->getCpf();
?>
<script>
    window.location.href = "./index.php"
</script>
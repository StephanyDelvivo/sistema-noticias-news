<?php
    include '../classes/Sistema.php';
    include '../servicos/checarCpf.php';

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $sobre = $_REQUEST['sobreJorn'];

    $jorn = new Jornalista($nome, $cpf, $email, $senha, $sobre);
    $sistema = new Sistema();

    if(checarCpf($cpf)){
        $mensagem = 'O CPF já existe no sistema.';
        $link = './formCadJornalista.php';
    } else {
        $mensagem = 'Jornalista cadastrado com sucesso!';
        $link = './index.php';
        $sistema->cadastrarJorn($jorn);
    }
?>
<script>
    alert('<?=$mensagem?>');
    window.location.href = "<?=$link?>"
</script>
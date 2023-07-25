<?php
    include '../classes/Sistema.php';
    include '../servicos/checarCpf.php';

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];
    $numCartao = $_REQUEST['numCartao'];

    $assinante = new Assinante($nome, $cpf, $email, $senha, $numCartao);
    $sistema = new Sistema();

    if(checarCpf($cpf)){
        $mensagem = 'O CPF já existe no sistema.';
        $link = './formCadAssinante.php';
    } else {
        $mensagem = 'Assinante cadastrado com sucesso!';
        $link = './index.php';
        $sistema->cadastrarAss($assinante);
    }
?>
<script>
    alert('<?=$mensagem?>');
    window.location.href = "<?=$link?>"
</script>
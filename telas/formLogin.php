<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Notícias News</title>
</head>
<body>
    <?php
    require_once '../classes/Sistema.php';
    $sistema = new Sistema();
    include './cabecalho.php';
    $erro = '';
    if(isset($_REQUEST['entrou'])){
        $cpf = $_REQUEST['cpf'];
        $email = $_REQUEST['email'];
        $senha = $_REQUEST['senha'];
        $tipo = 'ass';
        $usuario = $sistema->buscarAss($cpf);
        if(!isset($usuario)){
            $usuario = $sistema->buscarJorn($cpf);
            $tipo = 'jor';
            if(!isset($usuario)){
                $usuario = $sistema->buscarAdmin($cpf);
                $tipo = 'adm';
            }
        }
        if(isset($usuario)){
            if($senha == $usuario->getSenha()){
                $_SESSION['cpf'] = $usuario->getCpf();
                $_SESSION['usuario'] = $usuario->getNome();
                $_SESSION['tipo'] = $tipo;
            } else {
                $erro = '<p>Combinação de usuário e senha não encontrado.</p>';
            }
        } else {
            $erro = '<p>Usuário não encontrado.</p>';
        }
    }
    if(isset($_SESSION['usuario'])){
        header("Location: ./index.php"); die();
    }
    ?>
    <div class="formulario">
        <h1>Login</h1><br>
        <form action="" method="post">
            <label>CPF:<input type="text" name="cpf" id="cpf" required></label><br><br>
            <label>Email:<input type="email" name="email" id="email" required></label><br><br>
            <label>Senha:<input type="password" name="senha" id="senha" required></label><br><br>
            <input type="submit" value="Entrar" name="entrou" id="botaoEnviar"><br><br>
            <p>Ainda não é cadastrado ? <a href="./formCadAssinante.php">Cadastre-se!</a></p>
        </form>
        <?php 
        $erro;
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Notícias News</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="./cadJornalista.php">
        <label>Nome: <input type="text" name="nome" id="nome"></label><br>
        <label>CPF: <input type="number" name="cpf" id="cpf"></label><br>
        <label>Email: <input type="email" name="email" id="email"></label><br>
        <label>Senha: <input type="password" name="senha" id="senha"></label><br>
        <hr />
        <h3>Comprovar ter cursado ou estar cursando Jornalismo</h3>
        <label>Histórico: <input type="text" name="histJorn" id="histJorn"></label><br>
        <input type="submit" value="Cadastrar">
    </form>
    
</body>
</html>
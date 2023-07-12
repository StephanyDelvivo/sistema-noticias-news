<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias News</title>
</head>

<body>
    <h1>Cadastrar Noticia</h1><br>
    <form action="./cadNoticia.php">
        <label for="titulo">
            Título: 
            <textarea rows="6" cols="50" name="titulo" id="titulo"></textarea>
        </label><br>
        <label>
            Corpo do Texto: 
            <textarea rows="30" cols="100" name="corpoTexto" id="corpoTexto"></textarea>
        </label><br>
        <label>
            Imagem: 
            <input type="text" name="imgNoticia" id="imgNoticia" placeholder="Endereço da imagem">
        </label><br>
        
        <input type="submit" value="Cadastrar">
    </form>

</body>

</html>
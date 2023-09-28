<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./estilos/cadastro.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<div class="fundo">

    <form class= "forms" id=" form-cadastro" action = "bancocadastro.php" method = "POST" >
        <h1 class = "tituloform">CADASTRO</h1>

        <h1 class ="login">RA: <br>
            <input type = "text" name = "logintexto" required> 
            <h1 class= descricao>Não é preciso digitar @ulife.com.br</h1>
        </h1>

        <h1 class ="curso">Nome: <br>
            <input type = "text" name = "nometexto" required>
        </h1>

        <h1 class ="senha">Senha: <br>
            <input type = "password" name="senhatexto" required>
            </h1>

        <button class="botao">
        ENTRAR
        </button>
        <a class = "cadastrar" href="./login.php">Logue-se aqui!</a>
    
    </form>
</div>
</body>
</html>
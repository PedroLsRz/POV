

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
  <!--  <link href="./css/bootstrap.min.css" rel="stylesheet">  -->
    <title>HTML</title>
</head>
<body>
<div class="fundo">
    <form class= "forms" id=" form-login" action = "login.php" method = "POST" >
        <h1 class = "tituloform">LOGIN</h1>
    <h1 class ="titulogin">RA:</h1>
        <input class = "textologin" type = "text" name = "login"> 
    
    <h1 class ="titulosenha">Senha:</h1>
        <input class= "textosenha" type = "password" name="senha">
    <br>
        <button class="botao">
        ENTRAR
        </button>
        <a class = "cadastrar" href="./cadastro.php">Crie sua conta aqui!</a>
        
    <!-- obs: fazer comentario em html -->
    
    </form>
</div>
  <!--    <script src="./js/bootstrap.script.js"></script>-->
</body>
</html>      
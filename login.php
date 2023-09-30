<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="./estilos/styleslogin.css" rel="stylesheet">
  <!--  <link href="./css/bootstrap.min.css" rel="stylesheet">  -->
    <title>PoV-Página de login</title>
</head>

<body>

<!-- Classe para manipular o fundo da pagina-->
<div class="fundo">
                        <!-- Formuláro de cadastro-->
    <form class= "forms" id=" form-login" action = "bancologin.php" method = "POST" >
        <h1 class = "tituloform">LOGIN</h1>
            <h1 class ="titulogin">RA: <br>
                <input class ="textologin" type = "text" name = "login" required> 
            </h1>
        <h1 class ="titulosenha">Senha:</h1>
            <input class= "textosenha" type = "password" name="senha" required>
                <br>
            <button class="botao">
                ENTRAR
            </button>
        <a class = "cadastrar" href="./cadastro.php">Crie sua conta aqui!</a>
    </form>

</div>
 
</body>

</html>
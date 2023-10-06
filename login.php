<?php require_once "bancologin.php"?>

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
    <form class= "forms" action="" id="form-login" method = "POST" >
        <h1 class = "tituloform">LOGIN</h1>
            <h1 class ="user">RA<br><br>
            <i></i>
                <input type = "text" name = "login" required> 
            </h1>
        <h1 class ="senha">Senha<br><br>
            <i></i>
            <input type = "password" name="senha" required>
                <br>
        </h1>
            <button type= "submit" class= "botao" name= "entrar">
                ENTRAR
        </button>
        <a class = "cadastrar" href="./cadastro.php">Crie sua conta aqui!</a>
        <br>
        
        <?php 
     if(isset($_POST['entrar'])){
        login();
     }
    
    ?>
    
    </form>
    
</div>

    
</body>

</html>
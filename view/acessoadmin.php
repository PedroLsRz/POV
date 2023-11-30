<?php require_once "../funcoes/bancologin.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/acessoadmin.css" rel="stylesheet">
    <title>PoV - Acesso Administrativo</title>
</head>

<body>
<!-- Classe para manipular o fundo da pagina-->
<div class="fundo">
    <!-- Logo da aplicação -->
    <img class= "logo" src="../img/logoPov.png" >
                        <!-- Formuláro de cadastro-->
    <form class= "forms" action="" id="form-login" method = "POST" >
        <!-- Deixei o título do formulário de login comentado pra decidir se coloca algo depois ou deixa sem -->
        <!-- <h1 class = "tituloform">LOGIN</h1> -->
            <h1 class ="user">Login<br><br>
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
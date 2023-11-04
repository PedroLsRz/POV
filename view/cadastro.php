<?php require_once "../funcoes/bancocadastro.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cadastro.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>PoV - Cadastro</title>
</head>
<body>
    
<!-- Classe para manipular o fundo da pagina-->
<div class="fundo">
    <img class= "logo" src="../img/logoPov.png" >
                        <!-- Formuláro de cadastro-->
    <form class= "forms" id=" form-cadastro" action = "" method = "POST" >
        <h1 class = "tituloform">CADASTRO</h1>
        <h1 class ="user">RA: <br>
            <input type = "text" name = "logintexto" required> 
        </h1>
        <h1 class= "descricao">Não é preciso digitar @ulife.com.br</h1>
        <h1 class ="nome">Nome: <br>
            <input type = "text" name = "nometexto" required>
        </h1>
        <h1 class ="senha">Senha: <br>
            <input type = "password" name="senhatexto" required>
        </h1>
        <h1 class ="senha2">Confirme a senha: <br>
            <input type = "password" name="senhatexto2" required>
        </h1>
        <button type= "submit" class="botao" name = "entrar">
            CADASTRAR
        </button>
        <a class = "voltarlogin" href="./login.php">Logue-se aqui!</a>
        <br>
        <?php 
     if(isset($_POST['entrar'])){
        cadastro();
     }
     ?>
    </form>

</div>
</body>
</html>
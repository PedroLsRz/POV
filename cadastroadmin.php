<?php require_once "bancocadastroadmin.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos/stylecadastro.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>PoV-Cadastro</title>
</head>
<body>
    
<!-- Classe para manipular o fundo da pagina-->
<div class="fundo">
    <img class= "img" src="img/logoPov.png" >
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
        <h1 class ="senha">Tipo de login: <br></h1>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="tipologin" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Adminstrador
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="0" name="tipologin" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
           Usuário Comum
        </label>
        </div>

        <button type= "submit" class="botao2" name = "entrar">
            CADASTRAR
        </button>
        
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
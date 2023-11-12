<?php 
require_once "../funcoes/bancocadastroadmin.php";
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicada
if ($_SESSION['logado'] <> true) {
  header('Location: acessoadmin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cadastroadmin.css" rel="stylesheet">
        
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>PoV - Cadastro</title>
</head>
<body>
        
<!-- Classe para manipular o fundo da pagina-->
<div class="fundo">
    <!-- Barra de navegação-->         
    <nav class="navbar">

<img class= "logo" src="../img/logoNavBar.png" > 
<!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
<a class = "sair" href="../funcoes/logout.php">Sair</a>
</nav>
    
                        <!-- Formuláro de cadastro-->
    <form class= "forms" id=" form-cadastro" action = "" method = "POST" >
        <h1 class = "tituloform">CADASTRO</h1>
        <h1 class ="nome">Nome: <br>    
            <input type = "text" name = "nometexto" required>
        </h1>
        <h1 class ="user">Login: <br>
            <input type = "text" name = "logintexto" required> 
        </h1>
        <h1 class ="senha">Senha: <br>
            <input type = "password" name="senhatexto" required>
        </h1>
        <h1 class ="senha">Essa conta tem permissão para gerenciar<br> outras contas de administradores? <br></h1>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="permissaotexto" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Sim
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="0" name="permissaotexto" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Não
            </label>
        </div>

        <button type= "submit" class="botao" name = "entrar">
            CADASTRAR
        </button>
        <a class = "voltar" href="./admin.php">Volte para o menu aqui!</a>
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
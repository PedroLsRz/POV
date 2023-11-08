<?php 
require_once "../funcoes/bancocadastroadmin.php";
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicada
if ($_SESSION['logado'] <> true) {
  header('Location: login.php');
}
#Se a sessão admin for diferente de 1, redirecione para a página indicada
if ($_SESSION['admin'] <> 1) {
    header('Location: login.php');
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
        <h1 class ="user">RA: <br>
            <input type = "text" name = "logintexto" required> 
        </h1>
        <h1 class= "descricao">Não é preciso digitar @ulife.com.br</h1>
        <h1 class ="nome">Nome: <br>
            <input type = "text" name = "nometexto" required>
        </h1>
        <h1 class ="sobrenome">Sobrenome: <br>
            <input type = "text" name = "sobrenometexto" required>
        </h1>
        <h1 class ="email">Email: <br>
            <input type = "email" name = "emailtexto" required>
        </h1>
        <h1 class ="senha">Senha: <br>
            <input type = "password" name="senhatexto" required>
        </h1>
        <h1 class ="senha">Tipo de login: <br></h1>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="1" name="tipologin" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Administrador
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="0" name="tipologin" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Usuário
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
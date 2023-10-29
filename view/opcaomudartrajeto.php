<?php
require_once "../funcoes/bancoconfirmarexclusao.php";
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicada
if ($_SESSION['logado'] <> true) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/opcaomudartrajeto.css" rel="stylesheet">
    
  <!--  <link href="./css/bootstrap.min.css" rel="stylesheet">  -->
    <title>PoV-Escolha o trajeto</title>
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
    <form class= "forms" action="" id="form-login" method = "POST" >

        <h1 class = "tituloform">ATENÇÃO</h1>
            <h1 class ="texto">Você quer mudar sua localização?<br><br>
            </h1>
        
            <a class= "botao" name= "excluir" href= "inicio.php">Sim</a>
            
          <a class= "botao2" name= "cancelar" href= "escolhasala.php">Não</a>
        
    
    </form>
    
</div>

    
</body>

</html>
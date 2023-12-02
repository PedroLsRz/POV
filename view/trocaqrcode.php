<?php
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/trocaqrcode.css" rel="stylesheet">
    
  <!--  <link href="./css/bootstrap.min.css" rel="stylesheet">  -->
    <title>PoV - Erro no QrCode</title>
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
    <form class= "forms" action="" method = "POST" >

        <h1 class = "tituloform">ATENÇÃO</h1>
            <h1 class ="texto">O QrCode lido não é válido. Leia novamente.<br><br>
        </h1>
            <button type= "submit" class= "botao" name= "ler">
                Ler
        </button>
       
        <?php 
     if(isset($_POST['ler'])){
        header('Location: inicio.php');
     }

    ?>
    
    </form>
    
</div>

    
</body>

</html>
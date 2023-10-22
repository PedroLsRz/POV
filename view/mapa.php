<?php
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mapa.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>Document</title>
    
</head>

<body>
<div class="fundo">
  <!-- Barra de navegação-->  
  <nav class="navbar">

     <img class= "logo" src="../img/logoNavBar.png" > 
      
      <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
      
        <button class="mudartrajeto" type="submit">Mudar Trajeto</button>
        <a class = "sair" href="../funcoes/logout.php">Sair</a>
    
  </nav>
      
      
    <div class= "format">
    <div class="bg">
    <!-- <img src="view/img/planta-supermercado.png" id="bg"> -->
    <div class="bg-scroll" id="bg-scroll">
    <script>
      window.onload = function(){
      window.scrollTo(150,150)
      }
      </script>
        <img src="../img/planta.png" id="bg-mobile">
        <div id="entrada" class="diventrada"></div>
    </div>
    
    </div>
    
</div>
</div>

</body>

</html>
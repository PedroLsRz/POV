<?php
#Iniciar sessão
session_start();
if ($_SESSION['logado'] <> true) {
  header('Location: acessoadmin.php');
}
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicado
require_once "../funcoes/defineposicaomapa.php";
require_once "../funcoes/buscanomesala.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/mapa.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>PoV - Rota</title>
</head>

<body>
<div class="fundo">
  <!-- Barra de navegação-->  
  <nav class="navbar">

     <img class= "logo" src="../img/logoNavBar.png" > 
         <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
        <a></a>
        
  </nav>
  <a href="#entrada" id="linkentrada"></a>
  <?php buscarnomes(); ?>
 
      
    <div class= "format">
      <div class="bg">
          
        <div class="bg-scroll" id="bg-scroll">
            <div class= "linhabase">
            <svg class= "svg">
            </svg>
            <div id="entrada" class="diventrada"></div>
            <div id="a1" class="a1" onclick='location.href="../funcoes/idsalas.php?id=a1"'><?php echo $_SESSION["a1"]; ?></div>
            <div id="a1" class="b1"><?php echo $_SESSION["b1"]; ?></div>
            <div id="a1" class="b2"><?php echo $_SESSION["b2"]; ?></div>
            </div>
        </div>
      </div>
      
    </div>
</div>

</body>

</html>
<?php
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicado
require_once "../funcoes/definerota.php";
require_once "../funcoes/defineposicaomapa.php";
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
        <a class="mudartrajeto" type="submit" href="opcaomudartrajeto.php">Mudar Trajeto</a>
         <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
        <a></a>
        
  </nav>
  <a href="#entrada" id="linkentrada"></a>
  <a href="#refeitorio" id="linkrefeitorio"></a>
  <a href="#coordenacao" id="linkcoordenacao"></a>
  <?php posicaomapa(); ?>
      
    <div class= "format">
      <div class="bg">
          
        <div class="bg-scroll" id="bg-scroll">
            <div class= "linhabase">
            <svg class= "svg">
            <?php definerota(); ?>
            </svg>
            <div id="entrada" class="diventrada"></div>
            <div id="refeitorio" class="divrefeitorio"></div>
            <div id="coordenacao" class="divcoordenacao"></div>
            </div>
        </div>
      </div>
      
    </div>
</div>

</body>

</html>
<?php
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicado
require_once "../funcoes/definerota.php";
require_once "../funcoes/defineposicaomapa.php";
require_once "../funcoes/buscanomesala.php";
require_once "../funcoes/componentesadmin.php";
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
         <?php botaosair(); ?>
        
  </nav>
  <a href="#entrada" id="linkentrada"></a>
  <a href="#refeitorio" id="linkrefeitorio"></a>
  <a href="#coordenacao" id="linkcoordenacao"></a>
  <?php buscarnomes(); ?>
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
            <div id="a1" class="a1"><?php echo $_SESSION["a1"]; ?></div>
            <div id="b1" class="b1"><?php echo $_SESSION["b1"]; ?></div>
            <div id="b2" class="b2"><?php echo $_SESSION["b2"]; ?></div>
            <div id="b4" class="b4"><?php echo $_SESSION["b4"]; ?></div>
            <div id="c1" class="c1"><?php echo $_SESSION["c1"]; ?></div>
            <div id="c2" class="c2"><?php echo $_SESSION["c2"]; ?></div>
            <div id="d1" class="d1"><?php echo $_SESSION["d1"]; ?></div>
            <div id="d2" class="d2"><?php echo $_SESSION["d2"]; ?></div>
            <div id="e1" class="e1"><?php echo $_SESSION["e1"]; ?></div>
            <div id="e2" class="e2"><?php echo $_SESSION["e2"]; ?></div>
            <div id="e3" class="e3"><?php echo $_SESSION["e3"]; ?></div>
            <div id="e4" class="e4"><?php echo $_SESSION["e4"]; ?></div>
            <div id="e5" class="e5"><?php echo $_SESSION["e5"]; ?></div>
            <div id="e6" class="e6"><?php echo $_SESSION["e6"]; ?></div>
            <div id="e7" class="e7"><?php echo $_SESSION["e7"]; ?></div>
            <div id="e8" class="e8"><?php echo $_SESSION["e8"]; ?></div>
            <div id="e9" class="e9"><?php echo $_SESSION["e9"]; ?></div>
            <div id="e10" class="e10"><?php echo $_SESSION["e10"]; ?></div>
            <div id="f1" class="f1"><?php echo $_SESSION["f1"]; ?></div>
            <div id="g1" class="g1"><?php echo $_SESSION["g1"]; ?></div>
            <div id="g2" class="g2"><?php echo $_SESSION["g2"]; ?></div>
            <div id="g3" class="g3"><?php echo $_SESSION["g3"]; ?></div>
            <div id="g4" class="g4"><?php echo $_SESSION["g4"]; ?></div>
            <div id="g5" class="g5"><?php echo $_SESSION["g5"]; ?></div>
            <div id="h1" class="h1"><?php echo $_SESSION["h1"]; ?></div>
            <div id="h2" class="h2"><?php echo $_SESSION["h2"]; ?></div>
            <div id="i1" class="i1"><?php echo $_SESSION["i1"]; ?></div>
            <div id="i2" class="i2"><?php echo $_SESSION["i2"]; ?></div>
            <div id="i3" class="i3"><?php echo $_SESSION["i3"]; ?></div>
            <div id="i4" class="i4"><?php echo $_SESSION["i4"]; ?></div>
            <div id="j1" class="j1"><?php echo $_SESSION["j1"]; ?></div>
            <div id="j2" class="j2"><?php echo $_SESSION["j2"]; ?></div>
            <div id="j3" class="j3"><?php echo $_SESSION["j3"]; ?></div>
            <div id="j4" class="j4"><?php echo $_SESSION["j4"]; ?></div>
            <div id="j5" class="j5"><?php echo $_SESSION["j5"]; ?></div>
            <div id="j7" class="j7"><?php echo $_SESSION["j7"]; ?></div>
            <div id="l1" class="l1"><?php echo $_SESSION["l1"]; ?></div>
            <div id="l2" class="l2"><?php echo $_SESSION["l2"]; ?></div>
            <div id="l3" class="l3"><?php echo $_SESSION["l3"]; ?></div>
            <div id="h3" class="h3"><?php echo $_SESSION["h3"]; ?></div>
            <div id="h4" class="h4"><?php echo $_SESSION["h4"]; ?></div>
            </div>
        </div>
      </div>
      
    </div>
</div>

</body>
<?php botaovoltar(); ?>
</html>
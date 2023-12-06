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
    <link href="../css/mapaeditavel.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>PoV - Rota</title>
</head>

<body>
<div class="fundo">
  <!-- Barra de navegação-->  
  <nav class="navbar">

     <img class= "logo" src="../img/logoNavBar.png" > 
         <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
         <a class = 'sair' href="../funcoes/logout.php">Sair</a>
        
  </nav>
  <a href="#entrada" id="linkentrada"></a>
  <script type='text/javascript'>  
            window.onload = function(){  
            document.getElementById('linkentrada').click();  
            }  
          </script>
          
  <?php buscarnomes(); ?>
 
      
    <div class= "format">
      <div class="bg">
          
        <div class="bg-scroll" id="bg-scroll">
            <div class= "linhabase">
            <svg class= "svg">
            </svg>
            <div id="entrada" class="diventrada"></div>

            <div id="a1" class="a1" onclick='location.href="../funcoes/idsalas.php?id=a1"'><?php echo $_SESSION["a1"]; ?></div>
            <div id="b1" class="b1" onclick='location.href="../funcoes/idsalas.php?id=b1"'><?php echo $_SESSION["b1"]; ?></div>
            <div id="b2" class="b2" onclick='location.href="../funcoes/idsalas.php?id=b2"'><?php echo $_SESSION["b2"]; ?></div>
            <div id="b4" class="b4" onclick='location.href="../funcoes/idsalas.php?id=b4"'><?php echo $_SESSION["b4"]; ?></div>
            <div id="c1" class="c1" onclick='location.href="../funcoes/idsalas.php?id=c1"'><?php echo $_SESSION["c1"]; ?></div>
            <div id="c2" class="c2" onclick='location.href="../funcoes/idsalas.php?id=c2"'><?php echo $_SESSION["c2"]; ?></div>
            <div id="d1" class="d1" onclick='location.href="../funcoes/idsalas.php?id=d1"'><?php echo $_SESSION["d1"]; ?></div>
            <div id="d2" class="d2" onclick='location.href="../funcoes/idsalas.php?id=d2"'><?php echo $_SESSION["d2"]; ?></div>
            <div id="e1" class="e1" onclick='location.href="../funcoes/idsalas.php?id=e1"'><?php echo $_SESSION["e1"]; ?></div>
            <div id="e2" class="e2" onclick='location.href="../funcoes/idsalas.php?id=e2"'><?php echo $_SESSION["e2"]; ?></div>
            <div id="e3" class="e3" onclick='location.href="../funcoes/idsalas.php?id=e3"'><?php echo $_SESSION["e3"]; ?></div>
            <div id="e4" class="e4" onclick='location.href="../funcoes/idsalas.php?id=e4"'><?php echo $_SESSION["e4"]; ?></div>
            <div id="e5" class="e5" onclick='location.href="../funcoes/idsalas.php?id=e5"'><?php echo $_SESSION["e5"]; ?></div>
            <div id="e6" class="e6" onclick='location.href="../funcoes/idsalas.php?id=e6"'><?php echo $_SESSION["e6"]; ?></div>
            <div id="e7" class="e7" onclick='location.href="../funcoes/idsalas.php?id=e7"'><?php echo $_SESSION["e7"]; ?></div>
            <div id="e8" class="e8" onclick='location.href="../funcoes/idsalas.php?id=e8"'><?php echo $_SESSION["e8"]; ?></div>
            <div id="e9" class="e9" onclick='location.href="../funcoes/idsalas.php?id=e9"'><?php echo $_SESSION["e9"]; ?></div>
            <div id="e10" class="e10" onclick='location.href="../funcoes/idsalas.php?id=e10"'><?php echo $_SESSION["e10"]; ?></div>
            <div id="f1" class="f1" onclick='location.href="../funcoes/idsalas.php?id=f1"'><?php echo $_SESSION["f1"]; ?></div>
            <div id="g1" class="g1" onclick='location.href="../funcoes/idsalas.php?id=g1"'><?php echo $_SESSION["g1"]; ?></div>
            <div id="g2" class="g2" onclick='location.href="../funcoes/idsalas.php?id=g2"'><?php echo $_SESSION["g2"]; ?></div>
            <div id="g3" class="g3" onclick='location.href="../funcoes/idsalas.php?id=g3"'><?php echo $_SESSION["g3"]; ?></div>
            <div id="g4" class="g4" onclick='location.href="../funcoes/idsalas.php?id=g4"'><?php echo $_SESSION["g4"]; ?></div>
            <div id="g5" class="g5" onclick='location.href="../funcoes/idsalas.php?id=g5"'><?php echo $_SESSION["g5"]; ?></div>
            <div id="h1" class="h1" onclick='location.href="../funcoes/idsalas.php?id=h1"'><?php echo $_SESSION["h1"]; ?></div>
            <div id="h2" class="h2" onclick='location.href="../funcoes/idsalas.php?id=h2"'><?php echo $_SESSION["h2"]; ?></div>
            <div id="i1" class="i1" onclick='location.href="../funcoes/idsalas.php?id=i1"'><?php echo $_SESSION["i1"]; ?></div>
            <div id="i2" class="i2" onclick='location.href="../funcoes/idsalas.php?id=i2"'><?php echo $_SESSION["i2"]; ?></div>
            <div id="i3" class="i3" onclick='location.href="../funcoes/idsalas.php?id=i3"'><?php echo $_SESSION["i3"]; ?></div>
            <div id="i4" class="i4" onclick='location.href="../funcoes/idsalas.php?id=i4"'><?php echo $_SESSION["i4"]; ?></div>
            <div id="j1" class="j1" onclick='location.href="../funcoes/idsalas.php?id=j1"'><?php echo $_SESSION["j1"]; ?></div>
            <div id="j2" class="j2" onclick='location.href="../funcoes/idsalas.php?id=j2"'><?php echo $_SESSION["j2"]; ?></div>
            <div id="j3" class="j3" onclick='location.href="../funcoes/idsalas.php?id=j3"'><?php echo $_SESSION["j3"]; ?></div>
            <div id="j4" class="j4" onclick='location.href="../funcoes/idsalas.php?id=j4"'><?php echo $_SESSION["j4"]; ?></div>
            <div id="j5" class="j5" onclick='location.href="../funcoes/idsalas.php?id=j5"'><?php echo $_SESSION["j5"]; ?></div>
            <div id="j7" class="j7" onclick='location.href="../funcoes/idsalas.php?id=j7"'><?php echo $_SESSION["j7"]; ?></div>
            <div id="l1" class="l1" onclick='location.href="../funcoes/idsalas.php?id=l1"'><?php echo $_SESSION["l1"]; ?></div>
            <div id="l2" class="l2" onclick='location.href="../funcoes/idsalas.php?id=l2"'><?php echo $_SESSION["l2"]; ?></div>
            <div id="l3" class="l3" onclick='location.href="../funcoes/idsalas.php?id=l3"'><?php echo $_SESSION["l3"]; ?></div>
            </div>
        </div>
      </div>
      
    </div>
</div>
</body>
<img class= "botaovoltar" onclick='location.href="../view/admin.php"' src="../img/voltar.png" >
</html>
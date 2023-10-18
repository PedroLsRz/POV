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
    <link href="./estilos/bootstrap.min.css" rel="stylesheet">
    <link href="./estilos/stylesmenu.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Document</title>
    
</head>

<body>
<div class="fundo">
  <!-- Barra de navegação-->  
  <nav class="navbar">

     <img class= "logo" src="img/logoNavBar.png" > 
      
      <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
      
        <button class="mudartrajeto" type="submit">Mudar Trajeto</button>
        <a class = "sair" href="logout.php">Sair</a>
    
  </nav>
  <!-- Lista-->
  <ul class="list-group">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item">And a fifth one</li>
  </ul>

    <script src="./js/bootstrap.script.js"></script>
</body>

</html>
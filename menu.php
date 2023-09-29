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
    <title>Document</title>
    
</head>
<body>

  <!-- Barra de navegação-->  
  <nav class="navbar bg-body-tertiary">

    <div class="container-fluid">
      <!-- Cabeçalho da barra de navegação printando o nome do 
      usuário registrado no banco de dados ao se logar com sucesso-->
      <a class="navbar-brand">Olá! Seja bem-vindo <?php echo $_SESSION['nome'] ?></a>
      <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
      <a href="logout.php">Sair</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Salas" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Procurar</button>
      </form>
    </div>

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
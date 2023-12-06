<?php
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicada
if ($_SESSION['logado'] <> true) {
  header('Location: acessoadmin.php');
}
require_once "../funcoes/componentesadmin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Barra de navegação <link href="../css/bootstrap.min.css" rel="stylesheet">--> 
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/admin.css" rel="stylesheet">
    <title>PoV - Admin</title>
</head>
<body>
    <div class="fundo">

                <!-- Barra de navegação-->  
            <nav class="navbar">

                <img class= "logo" src="../img/logoNavBar.png" > 
                <!-- Cabeçalho da barra de navegação printando o nome do 
                usuário registrado no banco de dados ao se logar com sucesso-->
                <a class="saudacao">Acesso Administrativo</a>
                <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->

                <a class = "sair" href="../funcoes/logout.php">Sair</a>
            </nav>
                <div class="menu">
                
                <?php ajustesusuario(); ?>
                 
                 <h1 class="aplicacao">Aplicação</h1>
                 <button type="submit" class="botao" name="editar" onclick="window.location.href='./mapaeditavel.php'">Editar salas</button>
                <button type="submit" class="botao" name="Testar" onclick="window.location.href='./inicio.php'">Testar aplicação</button>
                </div>
        
    </div>
</body>
</html>
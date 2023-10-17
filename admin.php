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
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link href="./estilos/stylesadmin.css" rel="stylesheet">
    <title>PoV</title>
</head>
<body>
    <div class="fundo">

                <!-- Barra de navegação-->  
            <nav class="navbar">

                <img class= "logo" src="img/logoNavBar.png" > 
                <!-- Cabeçalho da barra de navegação printando o nome do 
                usuário registrado no banco de dados ao se logar com sucesso-->
                <a class="saudacao">Olá <?php echo $_SESSION['nome'] ?><br>Seja bem-vindo!</a>
                <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->

                <a class = "sair" href="logout.php">Sair</a>
            </nav>
                <div class="menu">
                 <h1 class="usuario">Usuário</h1>
                 <button type="submit" class="botao" name="cadastro">Criar Usuário</button>
                 <button type="submit" class="botao" name="excluir">Excluir Usuário</button>
                 <button type="submit" class="botao" name="edicao">Editar dados <br>de um Usuário</button>
                 <h1 class="aplicacao">Aplicação</h1>
                 <button type="submit" class="botao" name="editar">Editar salas</button>
                <button type="submit" class="botao" name="Testar">Testar aplicação</button>
                </div>
        
    </div>
</body>
</html>
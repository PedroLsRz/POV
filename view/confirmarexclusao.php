<?php
require_once "../funcoes/bancoconfirmarexclusao.php";
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
    <link href="../css/confirmarexclusao.css" rel="stylesheet">
    
  <!--  <link href="./css/bootstrap.min.css" rel="stylesheet">  -->
    <title>PoV - Excluir Administrador</title>
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
    <form class= "forms" action="" id="form-login" method = "POST" >

        <h1 class = "tituloform">ATENÇÃO</h1>
            <h1 class ="texto">Deseja realmente excluir esse usuário?<br><br>
            </h1>
        <h1 class ="dado">Nome: <?php echo $_SESSION['nomeexclusao']; ?><br><br>
        </h1>
        <h1 class ="dado">Login: <?php echo $_SESSION['loginexclusao']; ?><br><br>
        </h1>
            <button type= "submit" class= "botao" name= "excluir">
                Excluir
        </button>
        <button type= "submit" class= "botao2" name= "cancelar">
                Cancelar
        </button>
        

        <?php 
     if(isset($_POST['excluir'])){
        excluirusuario();
     }
    
     if(isset($_POST['cancelar'])){
        header('Location: excluirusuario.php');
     }

    ?>
    
    </form>
    
</div>

    
</body>

</html>
<?php
require_once "../funcoes/bancoconfirmarexclusao.php";
#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicada
if ($_SESSION['logado'] <> true) {
  header('Location: ../login.php');
}
if ($_SESSION['admin'] <> 1) {
    header('Location: ../login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/cadastro.css" rel="stylesheet">
    
  <!--  <link href="./css/bootstrap.min.css" rel="stylesheet">  -->
    <title>PoV-Página de login</title>
</head>

<body>

<!-- Classe para manipular o fundo da pagina-->
<div class="fundo">
    <!-- Logo da aplicação -->
                        <!-- Formuláro de cadastro-->
    <form class= "forms" action="" id="form-login" method = "POST" >
    
        <h1 class = "tituloform">ATENÇÃO</h1>
            <h1 class ="user">Deseja realmente excluir esse usuário?<br><br>
            </h1>
        <h1 class ="senha">Nome: <?php echo $_SESSION['nomeexclusao']; ?><br><br>
        </h1>
        <h1 class ="senha">Ra: <?php echo $_SESSION['raexclusao']; ?><br><br>
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
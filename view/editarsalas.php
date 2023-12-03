<?php 
require_once "../funcoes/preenchidadosedicaosala.php";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/editarusuario.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <title>PoV - Editar usuário</title>
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
    
        <!--sessionStorage.getItem('nome') -->

                        <!-- Formuláro de cadastro-->
    <form class= "forms" id=" form-cadastro" action = "" method = "POST" >
        <h1 class = "tituloform">DADOS</h1>
        <h1 class ="nome">Sigla: <br>
            <?php inputsigla(); ?>
        </h1>
        <h1 class ="senha">Nome: <br>
            <?php inputdescricao(); ?>
        </h1>
        
        <button type= "submit" class="botao" name = "entrar">
            SALVAR
        </button>
        <a class = "voltar" href="./mapaeditavel.php">Volte para o mapa!</a>
        <br>
        <?php 
     if(isset($_POST['entrar'])){
        salvardados();
     }
     ?>
    </form>

</div>
</body>
</html>
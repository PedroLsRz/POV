<?php 
require_once "../funcoes/preenchimentodadosedicao.php";
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
    

<?php 
    $permissao = $_SESSION['edicaopermissao'];
            
    ?>
        <!--sessionStorage.getItem('nome') -->

                        <!-- Formuláro de cadastro-->
    <form class= "forms" id=" form-cadastro" action = "" method = "POST" >
        <h1 class = "tituloform">DADOS</h1>
        <h1 class ="nome">Nome: <br>
            <?php inputnome(); ?>
        </h1>
        <h1 class ="user">Login: <br>
            <?php inputlogin(); ?>
        </h1>
        <h1 class ="senha">Senha: <br>
            <?php inputsenha(); ?>
        </h1>
        <h1 class ="senha">Essa conta tem permissão para gerenciar<br> outras contas de administradores? <br></h1>
        <?php 
    if ($permissao == 1) {
        echo "<div class='form-check'>
            <input class='form-check-input' type='radio' value='1' name='permissaotexto' id='flexRadioDefault1' checked>
            <label class='form-check-label' for='flexRadioDefault1'>
                Sim
            </label>
             </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio' value='0' name='permissaotexto' id='flexRadioDefault2' >
            <label class='form-check-label' for='flexRadioDefault2'>
                Não
            </label>
        </div>";
    } else {
        echo "<div class='form-check'>
            <input class='form-check-input' type='radio' value='1' name='permissaotexto' id='flexRadioDefault1' >
            <label class='form-check-label' for='flexRadioDefault1'>
                Sim
            </label>
             </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio' value='0' name='permissaotexto' id='flexRadioDefault2' checked>
            <label class='form-check-label' for='flexRadioDefault2'>
                Não
            </label>
        </div>";
    }
        
    ?>
        <button type= "submit" class="botao" name = "entrar">
            SALVAR
        </button>
        <a class = "voltar" href="./escolhaeditarusuario.php">Volte para o menu anterior!</a>
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
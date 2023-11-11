<?php 
require_once "../funcoes/preenchimentodadosedicao.php";
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
    $tipo = $_SESSION['edicaotipo'];
            
    ?>
        <!--sessionStorage.getItem('nome') -->

                        <!-- Formuláro de cadastro-->
    <form class= "forms" id=" form-cadastro" action = "" method = "POST" >
        <h1 class = "tituloform">DADOS</h1>
        <h1 class ="user">RA: <br>
            <?php inputra(); ?>
        </h1>
        <h1 class= "descricao">Não é preciso digitar @ulife.com.br</h1>
        <h1 class ="nome">Nome: <br>
            <?php inputnome(); ?>
        </h1>
        <h1 class ="nome">Sobrenome: <br>
            <?php inputsobrenome(); ?>
        </h1>
        <h1 class ="nome">Email: <br>
            <?php inputemail(); ?>
        </h1>
        <h1 class ="senha">Senha: <br>
            <?php inputsenha(); ?>
        </h1>
        <h1 class ="senha">Tipo de login: <br></h1>
        <?php 
    if ($tipo == 1) {
        echo "<div class='form-check'>
            <input class='form-check-input' type='radio' value='1' name='tipologin' id='flexRadioDefault1' checked>
            <label class='form-check-label' for='flexRadioDefault1'>
                Administrador
            </label>
             </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio' value='0' name='tipologin' id='flexRadioDefault2' >
            <label class='form-check-label' for='flexRadioDefault2'>
                Usuário
            </label>
        </div>";
    } else {
        echo "<div class='form-check'>
            <input class='form-check-input' type='radio' value='1' name='tipologin' id='flexRadioDefault1' >
            <label class='form-check-label' for='flexRadioDefault1'>
                Administrador
            </label>
             </div>
        <div class='form-check'>
            <input class='form-check-input' type='radio' value='0' name='tipologin' id='flexRadioDefault2' checked>
            <label class='form-check-label' for='flexRadioDefault2'>
                Usuário
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
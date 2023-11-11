<?php
require_once "../funcoes/bancolistaexcluirusuario.php";

#Iniciar sessão
session_start();
#Se a sessão LOGADO for diferente de VERDADEIRA, redirecione para a página indicada
if ($_SESSION['logado'] <> true) {
  header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/excluirusuario.css" rel="stylesheet">
    <title>PoV - Excluir usuário</title>
</head>
<body>
    <div class="fundo">

                <!-- Barra de navegação-->  
            <nav class="navbar">

                <img class= "logo" onclick='location.href="../rotas/decisaovolta.php"' src="../img/logoNavBar.png" > 
                <!-- Cabeçalho da barra de navegação printando o nome do 
                usuário registrado no banco de dados ao se logar com sucesso-->
                <a class="saudacao">Escolha o usuario<br>que deseja excluir!</a>
                <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->

                <a class = "sair" href="../funcoes/logout.php">Sair</a>

            </nav>
            
        
        <div class= "format">
            <input class="inputsalas" type="text">
            <ul class="listasalas">
            <?php
            usuarios();
            ?>
            </ul>
        </div>

        <script>
            let inputElement = document.querySelector("input")
            let listElement = document.querySelector("ul")
            let itemElement = listElement.querySelectorAll("h")

            inputElement.addEventListener("input", (e) => {
            let inputed = e.target.value.toLowerCase()
            itemElement.forEach((h) => {
                let text = h.textContent.toLowerCase()
                if(text.includes(inputed)){
                h.style.display = "block"
                }else{
                h.style.display = "none"
                }
                
            })
            })
        </script>
        <img class= "botaovoltar" onclick='location.href="../view/admin.php"' src="../img/voltar.png" >
    </div>
</body>
</html>
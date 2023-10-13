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
    <link href="./estilos/stylesmenu.css" rel="stylesheet">
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

        <div class= "qrcode">

            <script src="js/html5-qrcode.js" type="text/javascript"></script>
            
            <div id="reader" class="camera"></div>
            <script>
                function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
                alert(decodedText);
                } 

            function onScanFailure(error) {
                // handle scan failure, usually better to ignore and keep scanning.
                // for example:
                console.warn(`Code scan error = ${error}`);
                }

                let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 10 },
                /* verbose= */ false);
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
                
            </script>
            <img class= "img" src="img/guia.png" >
        </div>

        
    </div>
</body>
</html>
<?php
#Iniciar sessão
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/inicio.css" rel="stylesheet">
    <title>PoV - Início</title>
</head>
<body>
    <div class="fundo">

                <!-- Barra de navegação-->  
            <nav class="navbar">

                <img class= "logo" src="../img/logoNavBar.png" > 
                <!-- Cabeçalho da barra de navegação printando o nome do 
                usuário registrado no banco de dados ao se logar com sucesso-->
                <a class="saudacao">Leia o QrCode</a>
                <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
                <h1></h1>
            
            </nav>

        <div class= "format">

            <script src="../js/html5-qrcode.js" type="text/javascript"></script>
            
            <div id="reader" class="camera"></div>
            <script>
                function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
                $loc = decodedText;
                window.location = "../rotas/localiza.php?loc="+$loc;
                
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
            
        </div>
                    
        
    </div>
</body>
</html>
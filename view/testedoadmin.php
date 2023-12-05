<?php
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
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link href="../css/testedoadmin.css" rel="stylesheet">
    <title>PoV - Teste da Aplicação</title>
</head>
<body>
    <div class="fundo">

                <!-- Barra de navegação-->  
            <nav class="navbar">

                <img class= "logo" src="../img/logoNavBar.png" > 
                <!-- Cabeçalho da barra de navegação printando o nome do 
                usuário registrado no banco de dados ao se logar com sucesso-->
                <!-- <a class="saudacao">Olá, <?php echo $_SESSION['nome'] ?><br>Seja bem-vindo!</a> -->
                <!-- Link para encerrar a sessão montada no arquivo declarado abaixo-->
                
                <a class="saudacao">Teste sua aplicação aqui!</a> 
                <a class = "sair" href="../funcoes/logout.php">Sair</a>
                
            
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
            
            <a class = "textobotoes">Botões de rotas</a>
            <nav class="navbar-botoes">
        
                <a class= "botaodeteste" href="../rotas/localiza.php?loc=entradafpb">Entrada</a>
                <a class= "botaodeteste" href="../rotas/localiza.php?loc=refeitoriofpb">Refeitorio</a>
                <a class= "botaodeteste" href="../rotas/localiza.php?loc=coordenacaofpb">Coordenação</a>

            </nav>
                           
        <img class= "botaovoltar" onclick='location.href="../view/admin.php"' src="../img/voltar.png" >
    </div>
</body>
</html>
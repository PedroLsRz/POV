<?php

function inputsigla(){
    
    echo "<input type = 'text' name = 'nomesala' value = '".$_SESSION['nomesalaedicao']."' required>";
        }
function inputdescricao(){
    
    echo "<input type = 'text' name = 'descricaosala' value = '".$_SESSION['descricaosalaedicao']."' required>";
        }


function salvardados(){
    #include adiciona as funcionalidades do arquivo incluído!
    include ('conexao.php');
    
    #variáves, cada uma corresponde aos inputs do arquivo cadastro
    $nomedasala= $_POST ['nomesala'];
    $descricaodasala= $_POST ['descricaosala'];
    $iddasala= $_SESSION ['idsala'];

    #fazendo uma variável que recebe o SELECT
    $select = " UPDATE salas SET nome= '$nomedasala', descricao='$descricaodasala' WHERE codsala='$iddasala' ";
            
    try{
    #executa a $conexao e o $select dentro dela
    $query = mysqli_query($conexao, $select);
    header('Location: ../view/mapaeditavel.php');
    }catch(Exception $e){
        echo '<div class="errocadastro">Login já cadastrado!</div>';
    }
    }

?>
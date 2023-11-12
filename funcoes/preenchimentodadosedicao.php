<?php

function inputnome(){
    
    echo "<input type = 'text' name = 'nometexto' value = '".$_SESSION['edicaonome']."' required>";
        }
function inputlogin(){
    
    echo "<input type = 'text' name = 'logintexto' value = '".$_SESSION['edicaologin']."' required>";
        }
function inputsenha(){
    
    echo "<input type = 'password' name = 'senhatexto' value = '".$_SESSION['edicaosenha']."' required>
    <input type = 'text' class='gambiarra' name = 'id' value = '".$_SESSION['edicaoid']."'>";
        }

function salvardados(){
    #include adiciona as funcionalidades do arquivo incluído!
    include ('conexao.php');
    
    #variáves, cada uma corresponde aos inputs do arquivo cadastro
    $nome= $_POST ['nometexto'];
    $login= $_POST ['logintexto'];
    $senha= $_POST ['senhatexto'];
    $permissao= $_POST ['permissaotexto'];
    $id= $_POST ['id'];

    #fazendo uma variável que recebe o SELECT
    $select = " UPDATE administradores SET nome= '$nome', login='$login', senha='$senha',permissao='$permissao' WHERE id='$id' ";
            
    try{
    #executa a $conexao e o $select dentro dela
    $query = mysqli_query($conexao, $select);
    header('Location: ../view/escolhaeditarusuario.php');
    }catch(Exception $e){
        echo '<div class="errocadastro">Login já cadastrado!</div>';
    }
    }

?>
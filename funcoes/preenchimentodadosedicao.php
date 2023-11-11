<?php

function inputnome(){
    
    echo "<input type = 'text' name = 'nometexto' value = '".$_SESSION['edicaonome']."' required>";
        }
 function inputsobrenome(){
    
    echo "<input type = 'text' name = 'sobrenometexto' value = '".$_SESSION['edicaosobrenome']."' required>";
        }
function inputemail(){
    
    echo "<input type = 'text' name = 'emailtexto' value = '".$_SESSION['edicaoemail']."' required>";
        }
function inputra(){
    
    echo "<input type = 'text' name = 'logintexto' value = '".$_SESSION['edicaora']."' required>";
        }
function inputsenha(){
    
    echo "<input type = 'text' name = 'senhatexto' value = '".$_SESSION['edicaosenha']."' required>
    <input type = 'text' class='gambiarra' name = 'id' value = '".$_SESSION['edicaoid']."'>";
        }

        function salvardados(){
            #include adiciona as funcionalidades do arquivo incluído!
            include ('conexao.php');
            
            #variáves, cada uma corresponde aos inputs do arquivo cadastro
            $nome= $_POST ['nometexto'];
            $sobrenome= $_POST ['sobrenometexto'];
            $email = $_POST ['emailtexto'];
            $ra= $_POST ['logintexto'];
            $senha= $_POST ['senhatexto'];
            $tipo= $_POST ['tipologin'];
            $id= $_POST ['id'];

            #fazendo uma variável que recebe o SELECT
            $select = " UPDATE usuarios SET nome= '$nome', sobrenome= '$sobrenome', email= '$email', login='$ra', senha='$senha',tipo='$tipo' WHERE id='$id' ";
            
            try{
            #executa a $conexao e o $select dentro dela
            $query = mysqli_query($conexao, $select);
                echo '<div class="sucessocadastro">Alteração realizada com sucesso!</div>';
            }catch(Exception $e){
                echo '<div class="errocadastro">RA já cadastrado!</div>';
            }
            }

?>
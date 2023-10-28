<?php
function cadastro(){
#include adiciona as funcionalidades do arquivo incluído!
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$user= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];
$senha2= $_POST ['senhatexto2'];


#fazendo uma variável que recebe o SELECT
$select = "INSERT into usuarios (nome, login, senha, senha2 ,tipo) values ('$nome', '$user', '$senha', '$senha2', 0)";

if($senha == $senha2) { 
     
    try{
    #executa a $conexao e o $select dentro dela
    $query = mysqli_query($conexao, $select);
        echo '<div class="sucessocadastro">Cadastro realizado com sucesso!</div>';
    }catch(Exception $e){
        echo '<div class="errocadastro">RA já cadastrado!</div>';
    }
}elseif ($senha <> $senha2) {
    echo '<div class="errocadastro">As senhas não coincidem!</div>';
}
    
} 
?>
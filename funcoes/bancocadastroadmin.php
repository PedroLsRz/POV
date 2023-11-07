<?php
function cadastro(){
#include adiciona as funcionalidades do arquivo incluído!
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$sobrenome= $_POST ['sobrenometexto'];
$user= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];
$tipo= $_POST ['tipologin'];

#fazendo uma variável que recebe o SELECT
$select = "INSERT into usuarios (nome, sobrenome, login, senha,tipo) values ('$nome','$sobrenome', '$user', '$senha', $tipo)";

try{
#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);
    echo '<div class="sucessocadastro">Cadastro realizado com sucesso!</div>';
}catch(Exception $e){
    echo '<div class="errocadastro">RA já cadastrado!</div>';
}
}

?>
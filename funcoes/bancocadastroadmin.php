<?php
function cadastro(){
#include adiciona as funcionalidades do arquivo incluído!
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$login= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];
$permissao= $_POST ['permissaotexto'];

#fazendo uma variável que recebe o SELECT
$select = "INSERT into administradores (nome, login, senha, permissao) values ('$nome','$login', '$senha', $permissao)";

try{
#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);
    echo '<div class="sucessocadastro">Cadastro realizado com sucesso!</div>';
}catch(Exception $e){
    echo '<div class="errocadastro">Login já cadastrado!</div>';
}
}

?>
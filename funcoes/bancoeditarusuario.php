<?php
function edicao(){
#include adiciona as funcionalidades do arquivo incluído!
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$user= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];

#fazendo uma variável que recebe o SELECT
$select = " UPDATE usuarios SET (nome, login, senha,tipo) values ('$nome', '$user', '$senha', $tipo)";

try{
#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);
    echo '<div class="sucessocadastro">Cadastro realizado com sucesso!</div>';
}catch(Exception $e){
    echo '<div class="errocadastro">RA já cadastrado!</div>';
}
}

?>
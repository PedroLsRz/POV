<?php
function cadastro(){
#include adiciona as funcionalidades do arquivo incluído!
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$user= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];
$tipo= $_POST ['tipologin'];

#fazendo uma variável que recebe o SELECT
$select = "INSERT into usuarios (nome, login, senha,tipo) values ('$nome', '$user', '$senha', $tipo)";

try{
#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);
    echo '<div class="cadastrofail">Cadastro realizado com sucesso!</div>';
}catch(Exception $e){
    echo '<div class="cadastrofail">RA já cadastrado!</div>';
}
}

?>
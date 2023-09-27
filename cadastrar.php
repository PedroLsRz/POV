<?php


#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$user= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];

#fazendo uma variável que recebe o SELECT
$select = "INSERT into usuarios (nome, login, senha) values ('$nome', '$user', '$senha')";
try{
#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);
echo "Cadastro realizado com sucesso!";
}catch(Exception $e){
    echo "RA já cadastrado!";
}

?>
<?php


#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#variáves, cada uma corresponde aos inputs do arquivo cadastro
$nome= $_POST ['nometexto'];
$user= $_POST ['logintexto'];
$senha= $_POST ['senhatexto'];

#fazendo uma variável que recebe o SELECT
$select = "INSERT into usuarios (nome, login, senha) values ('$nome', '$user', '$senha')";

#executa a $conexao e o $select dentro dela
if ($query = mysqli_query($conexao, $select)){
    header('Location: http://131.72.176.95:8111/POV/login.php');
exit();
}





?>
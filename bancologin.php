<?php


#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');



$user= $_POST ['login'];
$senha= $_POST ['senha'];

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login, senha FROM usuarios
WHERE login = '$user' AND senha = '$senha'";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

#quebrando um array em valores separados
$dado = mysqli_fetch_row($query);


if ($user == NULL && $senha == NULL) {
    header('Location: http://131.72.176.95:8111/POV/bancologin.php');
exit();
} 
elseif ($user == $dado[1] && $senha == $dado[2]) {
    header('Location: http://131.72.176.95:8111/POV/menu.php');
exit();
} 
else {
    echo 'Dados inválidos';

}


?>
<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login FROM usuarios";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);


while ($usuarios = mysqli_fetch_assoc($query)) {
    $usuario = $usuarios['nome'];
    $ra = $usuarios['login'];
    echo "<h><a class= 'btnOpenModal' href='./raexclusao.php?ra=".$ra."&&nome=".$usuario."'>$usuario - $ra<br></a></h>";
}
}
?>
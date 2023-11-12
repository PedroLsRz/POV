<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login FROM administradores";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($usuarios = mysqli_fetch_assoc($query)) {
    $nome = $usuarios['nome'];
    $login = $usuarios['login'];
    
    echo "<h><a class= 'usuario' href='../rotas/exclusao.php?login=".$login."&&nome=".$nome."'>Nome: $nome<br>Login: $login <br></a></h>";
}
}
?>

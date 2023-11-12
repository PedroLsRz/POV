<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login, senha, id, permissao FROM administradores";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($usuarios = mysqli_fetch_assoc($query)) {
    $nome = $usuarios['nome'];
    $login = $usuarios['login'];
    $senha = $usuarios['senha'];
    $id = $usuarios['id'];
    $permissao = $usuarios['permissao'];
        echo "<h><a class= 'usuario' href='../rotas/dadosedicao.php?login=".$login."&&nome=".$nome."&&senha=".$senha."&&id=".$id."&&permissao=".$permissao."'>Nome: $nome<br>Login: $login<br></a></h>";
}
}
?>


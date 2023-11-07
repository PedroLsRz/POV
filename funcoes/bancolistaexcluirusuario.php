<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, sobrenome, login, tipo FROM usuarios";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($usuarios = mysqli_fetch_assoc($query)) {
    $usuario = $usuarios['nome'];
    $sobrenome = $usuarios['sobrenome'];
    $ra = $usuarios['login'];
    $tipo = $usuarios['tipo'];
    
    if ($usuarios['tipo'] <> 0) {
        $tipo = "(Admin)";
    } else {    
        $tipo = "(Usuário)";
    }

        echo "<h><a class= 'usuario' href='../rotas/raexclusao.php?ra=".$ra."&&sobrenome=".$sobrenome."&&nome=".$usuario."&&tipo=".$tipo."'>$usuario $sobrenome - $ra $tipo <br></a></h>";
}
}
?>

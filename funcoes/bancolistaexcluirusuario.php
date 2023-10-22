<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login, tipo FROM usuarios";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);


while ($usuarios = mysqli_fetch_assoc($query)) {
    $usuario = $usuarios['nome'];
    $ra = $usuarios['login'];
    $tipo = $usuarios['tipo'];
    
    if ($usuarios['tipo'] <> 0) {
        $tipo = "(admin)";
    } else {
        $tipo = "(usuario)";
    }

        echo "<h><a class= 'btnOpenModal' href='../rotas/raexclusao.php?ra=".$ra."&&nome=".$usuario."&&tipo=".$tipo."'>$usuario - $ra $tipo <br></a></h>";
}
}
?>

<?php

function buscarnomes(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');


#fazendo uma variável que recebe o SELECT
$select = "SELECT descricao,codsala FROM salas";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($salas = mysqli_fetch_assoc($query)) {
    $nome = $salas['descricao'];
    $codsala = $salas['codsala'];
    
    $_SESSION[$codsala] = $nome;

}

}
?>
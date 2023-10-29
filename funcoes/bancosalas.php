<?php

function salas(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');


#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, descricao, codsala, area FROM salas";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);


while ($salas = mysqli_fetch_assoc($query)) {
    $nome = $salas['nome'];
    $desc = $salas['descricao'];
    $sala = $salas['codsala'];
    $area = $salas['area'];
    echo "<h><a class= 'salas' href='../rotas/destino.php?sala=".$sala."&&area=".$area."'>$nome - $desc<br></a></h>";
}

}
?>
<?php

function salas(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');


#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, descricao FROM salas";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($salas = mysqli_fetch_assoc($query)) {
    echo "<h>$salas[nome]<br></h>";
}

}
?>
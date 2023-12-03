<?php

function salas(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, descricao, id, FROM salas";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($salas = mysqli_fetch_assoc($query)) {
    $nomesala = $salas['nome'];
    $descricaosala = $salas['descricao'];
    $idsala = $salas['id'];

        echo "<h><a class= 'salas' href='../rotas/dadosedicaosalas.php?nome=".$nomesala."&&id=".$idsala."&&descricao=".$descricaosala."'>Sigla: $nomesala<br>Descrição: $descricaosala<br></a></h>";
}
}
?>


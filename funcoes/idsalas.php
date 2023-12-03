<?php
include ('conexao.php');
$idsala = $_GET['id'];
session_start();
$_SESSION['idsala'] = $idsala;

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, descricao FROM salas
WHERE codsala = '$idsala'";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

#quebrando um array em valores separados
$dado = mysqli_fetch_row($query);

    $_SESSION['nomesalaedicao'] = $dado[0];
    $_SESSION['descricaosalaedicao'] = $dado[1];

    header('Location: ../view/editarsalas.php');
    
?>

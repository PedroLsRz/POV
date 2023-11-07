<?php

$ra = $_GET['ra'];
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
session_start();
$_SESSION['raexclusao'] = $ra;
$_SESSION['nomeexclusao'] = $nome;
$_SESSION['sobrenomeexclusao'] = $sobrenome;
header('Location: ../view/confirmarexclusao.php');
            
?>
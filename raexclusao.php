<?php

$ra = $_GET['ra'];
$nome = $_GET['nome'];
session_start();
$_SESSION['raexclusao'] = $ra;
$_SESSION['nomeexclusao'] = $nome;
header('Location: confirmarexclusao.php');
            
?>
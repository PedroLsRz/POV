<?php

$ra = $_GET['ra'];
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
session_start();
$_SESSION['raexclusao'] = $ra;
$_SESSION['nomeexclusao'] = $nome;
$_SESSION['sobrenomeexclusao'] = $sobrenome;
$_SESSION['emailexclusao'] = $email;
header('Location: ../view/confirmarexclusao.php');
            
?>
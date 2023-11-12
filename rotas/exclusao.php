<?php

$login = $_GET['login'];
$nome = $_GET['nome'];
session_start();
$_SESSION['loginexclusao'] = $login;
$_SESSION['nomeexclusao'] = $nome;
header('Location: ../view/confirmarexclusao.php');
            
?>
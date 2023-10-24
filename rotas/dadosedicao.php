<?php

$nome = $_GET['nome'];
$ra = $_GET['ra'];
$senha = $_GET['senha'];
$tipo = $_GET['tipo'];

session_start();
$_SESSION['edicaonome'] = $nome;
$_SESSION['edicaora'] = $ra;
$_SESSION['edicaosenha'] = $senha;
$_SESSION['edicaotipo'] = $tipo;

header('Location: ../view/editarusuario.php');
            
?>
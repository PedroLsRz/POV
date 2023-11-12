<?php

$nome = $_GET['nome'];
$login = $_GET['login'];
$senha = $_GET['senha'];
$id = $_GET['id'];
$permissao = $_GET['permissao'];

session_start();
$_SESSION['edicaonome'] = $nome;
$_SESSION['edicaologin'] = $login;
$_SESSION['edicaosenha'] = $senha;
$_SESSION['edicaopermissao'] = $permissao;
$_SESSION['edicaoid'] = $id;

header('Location: ../view/editarusuario.php');
            
?>
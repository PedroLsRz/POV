<?php

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
$ra = $_GET['ra'];
$senha = $_GET['senha'];
$tipo = $_GET['tipo'];
$id = $_GET['id'];

session_start();
$_SESSION['edicaonome'] = $nome;
$_SESSION['edicaosobrenome'] = $sobrenome;
$_SESSION['edicaoemail'] = $email;
$_SESSION['edicaora'] = $ra;
$_SESSION['edicaosenha'] = $senha;
$_SESSION['edicaotipo'] = $tipo;
$_SESSION['edicaoid'] = $id;

header('Location: ../view/editarusuario.php');
            
?>
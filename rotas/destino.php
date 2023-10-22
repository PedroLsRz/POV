<?php

$sala = $_GET['sala'];
session_start();
$_SESSION['sala'] = $sala;
header('Location: ../view/mapa.php');
            
?>
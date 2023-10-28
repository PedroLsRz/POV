<?php

$sala = $_GET['sala'];
$area = $_GET['area'];
session_start();
$_SESSION['sala'] = $sala;
$_SESSION['area'] = $area;
header('Location: ../view/mapa.php');
            
?>
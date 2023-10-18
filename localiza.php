<?php

$localiza = $_GET['loc'];
session_start();
$_SESSION['loc'] = $localiza;
header('Location: escolhasala.php');
            
?>
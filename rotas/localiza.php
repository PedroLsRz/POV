<?php

$localiza = $_GET['loc'];
session_start();
$_SESSION['loc'] = $localiza;
header('Location: ../view/escolhasala.php');
  
if ($loc <> $localiza) {
    header('Location: ../view/trocaqrcode.php');
}
?>
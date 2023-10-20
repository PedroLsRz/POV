<?php
session_start();
if($_SESSION['admin'] == 0) {
    header('Location: inicio.php');
}else{
    header('Location: admin.php');
}

?>
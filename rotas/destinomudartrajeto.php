<?php 
session_start();
    if ($_SESSION['admin'] <> 1) {
        header('location: ../view/inicio.php');
    } 
    elseif ($_SESSION['admin'] = 1){
        header('location: ../view/testedoadmin.php');
    }



?>
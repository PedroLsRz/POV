<?php
session_start();
if($_SESSION['admin'] == 0) {
    header('Location: ../view/inicio.php');
}else{
    header('Location: ../view/admin.php');
}

?>
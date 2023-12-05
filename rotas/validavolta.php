<?php
session_start();

if ($_SESSION['logado'] == true) {
    header('Location: ../view/testedoadmin.php');
  }else{
    header('Location: ../view/inicio.php');
  }



?>
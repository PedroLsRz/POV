<?php
#Iniciar uma sessão
session_start();
#Terminar a sessão iniciada e redirecionar o usuário para a página declarada
session_destroy();
header('Location: ../view/login.php');

?>
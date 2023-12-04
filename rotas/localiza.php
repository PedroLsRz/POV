<?php

$localiza = $_GET['loc'];
session_start();
$_SESSION['loc'] = $localiza;

if ($localiza <> "entradafpb" && $localiza <> "refeitoriofpb" && $localiza <> "coordenacaofpb") {
    header('Location: ../view/trocaqrcode.php');
} else {
    header('Location: ../view/escolhasala.php');
}
?>
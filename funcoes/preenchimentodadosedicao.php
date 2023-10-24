<?php

    
    /*$nome = $_SESSION['edicaonome'];
    $ra = $_SESSION['edicaora'];
    $senha = $_SESSION['edicaosenha'];
    $tipo = $_SESSION['edicaotipo'];*/

 function inputnome(){
    
    echo "<input type = 'text' name = 'nometexto' value = '".$_SESSION['edicaonome']."' required>";
        }
function inputra(){
    
    echo "<input type = 'text' name = 'logintexto' value = '".$_SESSION['edicaora']."' required>";
        }
function inputsenha(){
    
    echo "<input type = 'text' name = 'senhatexto' value = '".$_SESSION['edicaosenha']."' required>";
        }






?>
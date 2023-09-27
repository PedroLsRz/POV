<?php
#função que faz a conexão
$conexao = mysqli_connect('localhost', 'root', '', 'bancopov', 3306);

#condicional que avalia o estado da conexão
if (!$conexao){
    die ('Não foi possível conectar');
} else {
    echo 'Conexão estabelecida.<br>';
}

?>

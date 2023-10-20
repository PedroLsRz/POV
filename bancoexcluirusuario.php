<?php
function excluirusuario() {
#include adiciona as funcionalidades do arquivo incluído!
include ('conexao.php');

$login = $ra;

echo $login;

#fazendo uma variável que recebe o SELECT
$select = "DELETE FROM usuarios WHERE login = $login";



#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);
    echo '<div class="cadastrofail">Usuário removido com sucesso!</div>';
} 
?>
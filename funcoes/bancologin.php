<?php

function login(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

$login= $_POST ['login'];
$senha= $_POST ['senha'];

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login, senha, permissao FROM administradores
WHERE login = '$login' AND senha = '$senha'";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

#quebrando um array em valores separados
$dado = mysqli_fetch_row($query);

#Se $user for igual à $dado[1] e $senha for igual à $dado[2], comece 
#a sessão e redirecione o usuário para a página indicada
if ($login == isset($dado[1]) && $senha == isset($dado[2])) {
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['permissao'] = $dado[3];
    header('Location: ../view/admin.php');
}
#Se não for igual ou se forem nulos os valores exiba a mensagem  de erro
else { 
    echo '<div class="errologin">Login ou Senha Incorretos!</div>';
    
}

}

?>
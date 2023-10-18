<?php

function login(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

$user= $_POST ['login'];
$senha= $_POST ['senha'];

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login, senha, tipo FROM usuarios
WHERE login = '$user' AND senha = '$senha'";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

#quebrando um array em valores separados
$dado = mysqli_fetch_row($query);

#Se $user for igual à $dado[1] e $senha for igual à $dado[2], comece 
#a sessão e redirecione o usuário para a página indicada
if ($user == isset($dado[1]) && $senha == isset($dado[2])) {
    session_start();
    $_SESSION['nome'] = $dado[0];
    $_SESSION['logado'] = true;
    if($dado[3] == 0) {
        header('Location: inicio.php');
    } else {
        header('Location: admin.php');
    }
exit();
}
#Se não for igual ou se forem nulos os valores, alerte o que foi declarado e redirecione
#o usuário para a página indicada.
else { 
    echo '<div class="errologin">RA ou Senha Incorretos!</div>';
}

}

?>
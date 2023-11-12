<?php
function excluirusuario() {
    #include adiciona as funcionalidades do arquivo incluído!
    include ('conexao.php');
    
    $login = $_SESSION['loginexclusao'];

    #fazendo uma variável que recebe o SELECT
    $select = "DELETE FROM administradores WHERE login = '$login'";
    
    #executa a $conexao e o $select dentro dela
    $query = mysqli_query($conexao, $select);
    
    $_SESSION['loginexclusao'] = null;
    $_SESSION['nomeexclusao'] = null;

    header('Location: ../view/excluirusuario.php');
}
?>
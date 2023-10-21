<?php
function excluirusuario() {
    #include adiciona as funcionalidades do arquivo incluído!
    include ('conexao.php');
    
    $ra = $_SESSION['raexclusao'];

    #fazendo uma variável que recebe o SELECT
    $select = "DELETE FROM usuarios WHERE login = $ra";
    
    
    
    #executa a $conexao e o $select dentro dela
    $query = mysqli_query($conexao, $select);
    
    $_SESSION['raexclusao'] = null;
    $_SESSION['nomeexclusao'] = null;

    header('Location: excluirusuario.php');
}
?>
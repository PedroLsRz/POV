<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, login, tipo, senha FROM usuarios";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($usuarios = mysqli_fetch_assoc($query)) {
    $usuario = $usuarios['nome'];
    $ra = $usuarios['login'];
    $tipo = $usuarios['tipo'];
    $senha = $usuarios['senha'];

    if ($usuarios['tipo'] <> 0) {
        $tipo = "(Admin)";
    } else {    
        $tipo = "(Usuário)";
    }

        echo "<h><a class= 'usuario' href='../rotas/dadosedicao.php?ra=".$ra."&&nome=".$usuario."&&tipo=".$tipo."&&senha=".$senha."'>$usuario - $ra $tipo <br></a></h>";
}
/*echo "<?php

    if(isset('$_POST'['entrar'])){
    login();
    }

?>";*/
}
?>


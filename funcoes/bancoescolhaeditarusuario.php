<?php

function usuarios(){
#include adiciona as funcionalidades do arquivo incluído
include ('conexao.php');

#fazendo uma variável que recebe o SELECT
$select = "SELECT nome, sobrenome, email, login, tipo, senha, id FROM usuarios";

#executa a $conexao e o $select dentro dela
$query = mysqli_query($conexao, $select);

while ($usuarios = mysqli_fetch_assoc($query)) {
    $usuario = $usuarios['nome'];
    $sobrenome =$usuarios['sobrenome'];
    $email = $usuarios['email'];
    $ra = $usuarios['login'];
    $tipo = $usuarios['tipo'];
    $senha = $usuarios['senha'];
    $id = $usuarios['id'];

    if ($usuarios['tipo'] <> 0) {
        $tipo = "(Admin)";
    } else {    
        $tipo = "(Usuário)";
    }

        echo "<h><a class= 'usuario' href='../rotas/dadosedicao.php?ra=".$ra."&&sobrenome=".$sobrenome."&&email=".$email."&&nome=".$usuario."&&tipo=".$usuarios['tipo']."&&senha=".$senha."&&id=".$id."'>$usuario $sobrenome - $ra $tipo<br></a></h>";
}

/*echo "<?php

    if(isset('$_POST'['entrar'])){
    login();
    }

?>";*/
}
?>


<?php

function ajustesusuario(){

    if ($_SESSION['permissao'] == 1) {
        echo "<h1 class='usuario'>Usuário</h1>
    <button type='submit' class='botao' name='cadastro' onclick=\"window.location.href='./cadastroadmin.php'\">Criar Usuário</button>
    <button type='submit' class='botao' name='excluir' onclick=\"window.location.href='./excluirusuario.php'\">Excluir Usuário</button>
    <button type='submit' class='botao' name='edicao' onclick=\"window.location.href='./escolhaeditarusuario.php'\">Editar dados <br>de um Usuário</button>";
        
    }
    
}

function botaosair(){
        if (isset($_SESSION['logado']) ){
            echo "<a class = 'sair' href=\"../funcoes/logout.php\">Sair</a>";
        }else{
        echo "<a>           </a>";   
        }
}

function botaovoltar(){
    if (isset($_SESSION['logado']) ){
    echo "<img class= 'botaovoltar' onclick='location.href=\"../view/admin.php\"' src='../img/voltar.png' >";
    }
}

function opcoesrota(){
    if (isset($_SESSION['logado']) ){
    echo "<div class = 'textobotoes'>Leia um QrCode acima ou escolha um local para iniciar abaixo</div>
    <div class='botoesteste'>

        <a class= 'botaodeteste' href='../rotas/localiza.php?loc=entradafpb'>Entrada</a>
        <a class= 'botaodeteste' href='../rotas/localiza.php?loc=refeitoriofpb'>Refeitorio</a>
        <a class= 'botaodeteste' href='../rotas/localiza.php?loc=coordenacaofpb'>Coordenação</a>

    </div>
                   
<img class= 'botaovoltar' onclick='location.href=\"../view/admin.php\"' src='../img/voltar.png' >";
    }
}

?>
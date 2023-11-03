<?php

function posicaomapa(){
    switch ($_SESSION['loc']) {
        case 'entradafpb':
            $posicao = "linkentrada";
            break;
        case 'refeitoriofpb':
            $posicao = "linkrefeitorio";
            break;
        case 'coordenacaofpb':
            $posicao = "linkcoordenacao";
            break;
    }

    echo "<script type='text/javascript'>  
            window.onload = function(){  
            document.getElementById('".$posicao."').click();  
            }  
          </script>";

}

?>
<?php

function definerota(){
    
    switch($_SESSION['loc']){
        case "entradafpb":
        $inicio = '740,5060';

        switch ($_SESSION['sala']) {
            case "b1":
                $final = "760,4900 760,4780";
                break;
            case "b2":
                $final = "1440,4900 1440,4780";
                break;
            case "b3":
                $final = "1540,4900 1540,5050";
                break;
        }
        break;
        case "refeitoriofpb":

            break;
        case "coodenacaofpb":

            break;
    }

    if($_SESSION['area'] == "b"){
    echo "<polyline class='linha' points='".$inicio." 740,4900 ".$final."'/>";
    }


}

?>
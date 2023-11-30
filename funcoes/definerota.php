<?php

function definerota(){
    
    switch($_SESSION['loc']){
        case "entradafpb":
            $inicio = '470,3150';

            switch($_SESSION['area']){
                case "a":
                    $trajeto = " ";
                    break;
                case "b":
                    $trajeto =" 470,2990 ";
                    break;
                case "c":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 ";
                    break;
                case "d":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 ";
                    break;
                case "e":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 ";
                    break;
                case "f":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 1470,2095 ";
                    break;
                case "g":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 1470,2095 1135,2095 1135,1980 1105,1955 ";
                    break;
                case "h":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 1470,2095 1135,2095 1135,1980 1105,1955 955,1955 ";
                    break;
                case "i":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 1470,1260 ";
                    break;
                case "j":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 1470,285 ";
                    break;
                case "l":
                    $trajeto = " 470,2990 990,2990 990,2650 1080,2650 1080,2405 1470,2405 1470,880 ";
                    break;
            }
            break;

        case "refeitoriofpb":

            $inicio = '1380,880';

            switch($_SESSION['area']){
                case "a":
                    $trajeto = " 1470,880 1470,2405 1080,2405 1080,2650 990,2650 990,2990 470,2990 ";
                    break;
                case "b":
                    $trajeto =" 1470,880 1470,2405 1080,2405 1080,2650 990,2650 990,2990 ";
                    break;
                case "c":
                    $trajeto = " 1470,880 1470,2405 1080,2405 ";
                    break;
                case "d":
                    $trajeto = " 1470,880 1470,2405 ";
                    break;
                case "e":
                    $trajeto = " 1470,880 ";
                    break;
                case "f":
                    $trajeto = " 1470,880 1470,2095 ";
                    break;
                case "g":
                    $trajeto = " 1470,880 1470,2095 1135,2095 1135,1980 1105,1955 ";
                    break;
                case "h":
                    $trajeto = " 1470,880 1470,2095 1135,2095 1135,1980 1105,1955 955,1955 ";
                    break;
                case "i":
                    $trajeto = " 1470,880 1470,1260 ";
                    break;
                case "j":
                    $trajeto = " 1470,880 1470,285";
                    break;
                case "l":
                    $trajeto = "  ";
                    break;
            }
            break;

        case "coordenacaofpb":

            $inicio = '1040,2460 1080,2460';

            switch($_SESSION['area']){
                case "a":
                    $trajeto = " 1080,2650 990,2650 990,2990 470,2990 ";
                    break;
                case "b":
                    $trajeto =" 1080,2650 990,2650 990,2990 ";
                    break;
                case "c":
                    $trajeto = "  ";
                    break;
                case "d":
                    $trajeto = " 1080,2405 ";
                    break;
                case "e":
                    $trajeto = " 1080,2405 1470,2405 ";
                    break;
                case "f":
                    $trajeto = " 1080,2405 1470,2405 1470,2095 ";
                    break;
                case "g":
                    $trajeto = " 1080,2405 1470,2405 1470,2095 1135,2095 1135,1980 1105,1955 ";
                    break;
                case "h":
                    $trajeto = " 1080,2405 1470,2405 1470,2095 1135,2095 1135,1980 1105,1955 955,1955 ";
                    break;
                case "i":
                    $trajeto = " 1080,2405 1470,2405 1470,1260 ";
                    break;
                case "j":
                    $trajeto = " 1080,2405 1470,2405 1470,285 ";
                    break;
                case "l":
                    $trajeto = " 1080,2405 1470,2405 1470,880 ";
                    break;
            }
            break;
    }
    switch ($_SESSION['sala']) {
        case "a1":
            $final = "470,3080 550,3080";
            break;
        case "b1":
            $final = "510,2990 510,2945";
            break;
        case "b2":
            $final = "915,2990 915,2945";
            break;
        case "b3":
            $final = "470,2990";
            break;
        case "b4":
            $final = "";
            break;
        case "c1":
            $final = "";
            break;
        case "c2":
            $final = "";
            break;
        case "d1":
            $final = "";
            break;
        case "d2":
            $final = "";
            break;
        case "e1":
            $final = "";
            break;
        case "e2":
            $final = "";
            break;
        case "e3":
            $final = "";
            break;
        case "e4":
            $final = "";
            break;
        case "e5":
            $final = "";
            break;
        case "e6":
            $final = "";
            break;
        case "e7":
            $final = "";
            break;
        case "e8":
            $final = "";
            break;
        case "e9":
            $final = "";
            break;
        case "e10":
            $final = "";
            break;
        case "f1":
            $final = "";
            break;
        case "g1":
            $final = "";
            break;
        case "g2":
            $final = "";
            break;
        case "g3":
            $final = "";
            break;
        case "g4":
            $final = "";
            break;
        case "g5":
            $final = "";
            break;
        case "h1":
            $final = "";
            break;
        case "h2":
            $final = "";
            break;
        case "i1":
            $final = "";
            break;
        case "i2":
            $final = "";
            break;
        case "i3":
            $final = "";
            break;
        case "i4":
            $final = "";
            break;
        case "j1":
            $final = "";
            break;
        case "j2":
            $final = "";
            break;
        case "j3":
            $final = "";
            break;
        case "j4":
            $final = "";
            break;
        case "j5":
            $final = "";
            break;
        case "j6":
            $final = "";
            break;
        case "j7":
            $final = "";
            break;
        case "l1":
            $final = "";
            break;
        case "l2":
            $final = "";
            break;
    }

    echo "<polyline class='linha' points='".$inicio.$trajeto.$final."'/>
          <polyline class='linhatracada' points='".$inicio.$trajeto.$final."'/>  ";

}

?>
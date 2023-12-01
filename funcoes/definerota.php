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
            $final = "SALA DESATIVADA";
            break;
        case "b4":
            $final = "1055,2990";
            break;
        case "c1":
            $final = "1080,2460 1040,2460";
            break;
        case "c2":
            $final = "1080,2520 1120,2520";
            break;
        case "d1":
            $final = "1360,2405 1360,2360";
            break;
        case "d2":
            $final = "1460,2405 1460,2445";
            break;
        case "e1":
            $final = "1470,2330 1530,2330";
            break;
        case "e2":
            $final = "1470,2060 1530,2060";
            break;
        case "e3": 
            $final = "1470,1630 1530,1630";
            break;
        case "e4":
            $final = "1470,1970 1425,1970";
            break;
        case "e5":
            $final = "1470,1920 1425,1920";
            break;
        case "e6":
            $final = "1470,1710 1425,1710";
            break;
        case "e7":
            $final = "1470,1655 1425,1655";
            break;
        case "e8":
            $final = "1470,1245 1530,1245";
            break;
        case "e9":
            $final = "1470,880 1530,880";
            break;
        case "e10":
            $final = "1470,825 1530,825";
            break;
        case "f1":
            $final = "1190,2095 1190,2140";
            break;
        case "g1":
            $final = " 1010,1955 1010,2000";
            break;
        case "g2":
            $final = "900,1955 900,1905";
            break;
        case "g3":
            $final = "780,1955 780,2000";
            break;
        case "g4":
            $final = "735,1955 735,2000";
            break;
        case "g5":
            $final = "735,1955 735,1905";
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
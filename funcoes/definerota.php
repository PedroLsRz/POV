<?php

function definerota(){
    
    switch($_SESSION['loc']){
        case "entradafpb":
            $inicio = '750,4950';

            switch ($_SESSION['sala']) {
                case "a1":
                    $final = "750,4920 900,4920";
                    break;
                case "a2":
                    $final = "750,4760 1700,4760";
                    break;
                case "b1":
                    $final = "800,4760 800,4650";
                    break;
                case "b2":
                    $final = "1450,4760 1450,4650";
                    break;
                case "b3":
                    $final = "1550,4760 1550,4880";
                    break;
                case "c1":
                    $final = "1720,3900 1620,3900";
                    break;
                case "c2":
                    $final = "1720,4010 1830,4010";
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
                    $final = "2355,3130 2240,3130";
                    break;
                case "e6":
                    $final = "2355,2720 2240,2720";
                    break;
                case "e7":
                    $final = "2355,2640 2240,2640";
                    break;
                case "e8":
                    $final = "2355,1990 2465,1990";
                    break;
                case "e9":
                    $final = "2355,1420 2475,1420";
                    break;
                case "e10":
                    $final = "2355,1300 2495,1300";
                    break;
            }
            break;
        case "refeitoriofpb":

            break;
        case "coodenacaofpb":

            break;
    }

    switch($_SESSION['area']){
        case "a":
            echo "<polyline class='linha' points='".$inicio." ".$final."'/>";
            break;
        case "b":
            echo "<polyline class='linha' points='".$inicio." 750,4760 ".$final."'/>";
            break;
        case "c":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 ".$final."'/>";
            break;
        case "d":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 ".$final."'/>";
            break;
        case "e":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 ".$final."'/>";
            break;
        
    }


   

}

?>
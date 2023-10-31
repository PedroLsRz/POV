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
                    $final = "2170,3825 2170,3690";
                    break;
                case "d2":
                    $final = "2340,3825 2340,3950 ";
                    break;
                case "e1":
                    $final = "2355,3725 2540,3725";
                    break;
                case "e2":
                    $final = "2350,3300 2520,3300";
                    break;
                case "e3":
                    $final = "2355,2590 2465,2590";
                    break;
                case "e4":
                    $final = "2355,3130 2240,3130";
                    break;
                case "e5":
                    $final = "2355,3055 2240,3055";
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
                    $final = "2355,1410 2475,1410";
                    break;
                case "e10":
                    $final = "2355,1300 2495,1300";
                    break;
                case "e11":
                    $final = "2355,2010 1180,2010";
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
                    $final = "1530,2880 1590,2880";
                    break;
                case "h2":
                    $final = "1530,2760";
                    break;
                case "i1":
                    $final = "1280,2010 1280,2110";
                    break;
                case "i2":
                    $final = "1895,2010 1895,2110";
                    break;
                case "i3":
                    $final = "2015,2010 2015,2110";
                    break;
                case "j1":
                    $final = "1385,460";
                    break;
                case "j2":
                    $final = "1710,460 1710,370";
                    break;
                case "j3":
                    $final = "2110,460 2110,370";
                    break;
                case "j4":
                    $final = "2205,460 2205,370";
                    break;
                case "j5":
                    $final = "2515,460 2515,370";
                    break;
                case "j6":
                    $final = "2770,460 2770,370";
                    break;
                case "j7":
                    $final = "2555,460 2555,545";
                    break;
                case "l1":
                    $final = "2255,1310";
                    break;
                case "l2":
                    $final = "305,1310 305,460";
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
        case "f":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,3330".$final."'/>";
            break;
        case "g":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,3330 1815,3330 1815,3145 1770,3100 ".$final."'/>";
            break;
        case "h":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,3330 1815,3330 1815,3145 1770,3100 1530,3100 ".$final."'/>";
            break;
        case "i":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,2010 ".$final."'/>";
            break;
        case "j":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,460 ".$final."'/>";
            break;
        case "l":
            echo "<polyline class='linha' points='".$inicio." 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,1310 ".$final."'/>";
            break;
    }


   

}

?>
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
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 ";
                    break;
                case "d":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 ";
                    break;
                case "e":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 ";
                    break;
                case "f":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,3330 ";
                    break;
                case "g":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,3330 1815,3330 1815,3145 1770,3100 ";
                    break;
                case "h":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,3330 1815,3330 1815,3145 1770,3100 1530,3100 ";
                    break;
                case "i":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,2010 ";
                    break;
                case "j":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,460 ";
                    break;
                case "l":
                    $trajeto = " 750,4760 1600,4760 1600,4210 1720,4210 1720,3825 2355,3825 2355,1310 ";
                    break;
            }
            break;

        case "refeitoriofpb":

            $inicio = '2180,1400';

            switch($_SESSION['area']){
                case "a":
                    $trajeto = " 2355,1400 2355,3825 1720,3825 1720,4210 1600,4210 1600,4760 750,4760 ";
                    break;
                case "b":
                    $trajeto =" 2355,1400 2355,3825 1720,3825 1720,4210 1600,4210 1600,4760 ";
                    break;
                case "c":
                    $trajeto = " 2355,1400 2355,3825 1720,3825 ";
                    break;
                case "d":
                    $trajeto = " 2355,1400 2355,3825 ";
                    break;
                case "e":
                    $trajeto = " 2355,1400 ";
                    break;
                case "f":
                    $trajeto = " 2355,1400 2355,3330 ";
                    break;
                case "g":
                    $trajeto = " 2355,1400 2355,3330 1815,3330 1815,3145 1770,3100 ";
                    break;
                case "h":
                    $trajeto = " 2355,1400 2355,3330 1815,3330 1815,3145 1770,3100 1530,3100 ";
                    break;
                case "i":
                    $trajeto = " 2355,1400 2355,2010 ";
                    break;
                case "j":
                    $trajeto = " 2355,1400 2355,460 ";
                    break;
                case "l":
                    $trajeto = " 2180,1310 ";
                    break;
            }
            break;

        case "coordenacaofpb":

            $inicio = '1620,3900 1720,3900';

            switch($_SESSION['area']){
                case "a":
                    $trajeto = " 1720,4210 1600,4210 1600,4760 750,4760 ";
                    break;
                case "b":
                    $trajeto =" 1720,4210 1600,4210 1600,4760 ";
                    break;
                case "c":
                    $trajeto = "  ";
                    break;
                case "d":
                    $trajeto = " 1720,3825 ";
                    break;
                case "e":
                    $trajeto = " 1720,3825 2355,3825 ";
                    break;
                case "f":
                    $trajeto = " 1720,3825 2355,3825 2355,3330 ";
                    break;
                case "g":
                    $trajeto = " 1720,3825 2355,3825 2355,3330 1815,3330 1815,3145 1770,3100 ";
                    break;
                case "h":
                    $trajeto = " 1720,3825 2355,3825 2355,3330 1815,3330 1815,3145 1770,3100 1530,3100 ";
                    break;
                case "i":
                    $trajeto = " 1720,3825 2355,3825 2355,2010 ";
                    break;
                case "j":
                    $trajeto = " 1720,3825 2355,3825 2355,460 ";
                    break;
                case "l":
                    $trajeto = " 1720,3825 2355,3825 2355,1310 ";
                    break;
            }
            break;
    }
    switch ($_SESSION['sala']) {
        case "a1":
            $final = "470,3080 550,3080";
            break;
        case "b1":
            $final = "";
            break;
        case "b2":
            $final = "";
            break;
        case "b3":
            $final = "";
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
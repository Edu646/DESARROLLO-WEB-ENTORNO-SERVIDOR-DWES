<?php 
$zona = "";
$beneficio_empree = 0;
    //Switch para caclcular el beneficio de la empresa en base al n de la vivienda y el precio
    switch($zona){
        case "Centro":
            if($tamano < 100){
                $beneficio_empree  = ($precio * 30) /100; 
            }
            else if($tamano > 100){
                $beneficio_empree  = ($precio * 35) /100; 
            }
            break;
        case "Zaidín":
            if($tamano < 100){
                $beneficio_empree  = ($precio * 25) /100; 
            }
            else if($tamano > 100){
                $beneficio_empree  = ($precio * 28) /100; 
            }
            break;
        case "Chana":
            if($tamano  < 100){
                $beneficio_empree  = ($precio * 22) /100; 
            }
            else if($tamano  > 100){
                $beneficio_empree  = ($precio * 25) /100; 
            }
            break;
        case "Albaicín":
            if($tamano  < 100){
                $beneficio_empree = ($precio * 20) /100; 
            }
            else if($tamano  > 100){
                $beneficio_empree  = ($precio * 35) /100; 
            }
            break;
        case "Sacromonte":
            if($tamano  < 100){
                $beneficio_empree = ($precio * 22) /100; 
            }
            else if($tamano  > 100){
                $beneficio_empree  = ($precio * 25) /100; 
            }
            break;
        case "Realejo":
            if($tamano  < 100){
                $beneficio_empree  = ($precio * 25) /100; 
            }
            else if($tamano  > 100){
                $beneficio_empree  = ($precio * 28) /100; 
            }
            break;        
    }
?>
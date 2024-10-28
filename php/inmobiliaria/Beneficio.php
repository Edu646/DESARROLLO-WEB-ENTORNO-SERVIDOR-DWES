<?php 
$beneficio_empree = 0;
    //Switch para caclcular el beneficio de la empresa en base al tamaño de la vivienda y el precio
    switch($zona){
        case "centro":
            if($tamaño < 100){
                $beneficio = ($precio * 30) /100; 
            }
            else if($tamaño > 100){
                $beneficio = ($precio * 35) /100; 
            }
            break;
        case "zaidin":
            if($tamaño < 100){
                $beneficio = ($precio * 25) /100; 
            }
            else if($tamaño > 100){
                $beneficio = ($precio * 28) /100; 
            }
            break;
        case "chana":
            if($tamaño < 100){
                $beneficio = ($precio * 22) /100; 
            }
            else if($tamaño > 100){
                $beneficio = ($precio * 25) /100; 
            }
            break;
        case "albaicin":
            if($tamaño < 100){
                $beneficio = ($precio * 20) /100; 
            }
            else if($tamaño > 100){
                $beneficio = ($precio * 35) /100; 
            }
            break;
        case "sacromonte":
            if($tamaño < 100){
                $beneficio = ($precio * 22) /100; 
            }
            else if($tamaño > 100){
                $beneficio = ($precio * 25) /100; 
            }
            break;
        case "realejo":
            if($tamaño < 100){
                $beneficio = ($precio * 25) /100; 
            }
            else if($tamaño > 100){
                $beneficio = ($precio * 28) /100; 
            }
            break;        
    }

<?php
    /*2. Dado un arreglo con 20 edades de personas, determinar cuántos son niños, jóvenes, adultos y viejos. Se determinan las categorías con base en la siguiente tabla: 
        CATEGORIA EDAD 
        Niños 0 – 13 
        Jóvenes 14 – 29 
        Adultos 30 – 59 
        Viejos 60 en adelante
    */

    $niños = 0;
    $jovenes = 0;
    $adultos = 0;
    $viejos = 0;

    $edades = [10,45,87,21,25,98,86,67,25,63,4,3,8,54,72,23,29,35,36,55];

    foreach ($edades as $edad){
        if($edad >= 0 && $edad <= 13){
            $niños++;
        }elseif ($edad >= 14 && $edad <= 29){
            $jovenes++;
        }elseif ($edad >= 30 && $edad <= 59){
            $adultos++;
        }else{
            $viejos++;
        }
    }

    echo "Niños: " . $niños . "<br>";
    echo "Jovenes: " . $jovenes . "<br>";
    echo "Adultos: " . $adultos . "<br>";
    echo "Viejos: " . $viejos . "<br>"; 
?>
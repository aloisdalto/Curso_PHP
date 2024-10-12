<?php
    /*5. En una empresa se requiere calcular el salario semanal de cada uno de los n obreros que laboran en ella. Los nombres están en un arreglo y Las horas están en otro. (Arreglos paralelas)
    El salario se obtiene de la siguiente forma: 
    * Si el obrero trabaja 40 horas o menos se le paga Bs. 20 por hora. 
    * Si trabaja más de 40 horas se le paga Bs. 20 por cada una de las primeras 40 horas y Bs. 25 por cada hora extra. 
    Imprime el nombre de cada trabajador y cuánto va a cobrar.
    */

    $nombres = ["Juan", "Ana", "Pedro", "Lucía", "Carlos", "María", "José", "Clara", "Luis", "Marta"];
    $horas = [35, 42, 50, 20, 45, 60, 38, 48, 30, 55];

    $salarios = [];

    foreach($nombres as $indice => $nombre){
        $horasTrabajadas = $horas[$indice];
        $salario = 0;

        if($horasTrabajadas <= 40){
            $salario = $horasTrabajadas * 20;
        }else{
            $salario = (40 * 20) + (($horasTrabajadas - 40) * 25);
        }

        $salarios[$indice] = $salario;
    }
    
    for ($i = 0; $i < count($nombres); $i++) {
        echo "El trabajador " . $nombres[$i] . " trabajó ". $horas[$i] ." horas y cobrará Bs. " . $salarios[$i] . "<br>";
    }
?>
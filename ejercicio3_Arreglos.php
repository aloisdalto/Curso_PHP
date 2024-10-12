<?php 
    /*3. Dado un arreglo con 20 calificaciones de un grupo de alumnos. Calcule y escriba el porcentaje de reprobados. Tomando en cuenta que la calificación mínima aprobatoria es de 70.*/

    $reprobados = 0;
    $aprobados = 0;

    $notas = [10,75,87,21,85,98,86,67,95,63,84,100,8,54,72,23,79,87,36,98];

    foreach($notas as $nota){
        if( $nota >= 70){
            $aprobados++;
        }else{
            $reprobados++;
        }
    }

    print_r($notas);
    echo "<br><br>" . "Números de Aprobados: " . $aprobados . "<br>";
    echo "Números de Reprobados: " . $reprobados . "<br>";
    echo "Porcentaje de Reprobados: " . ($reprobados/20)*100 . "%";
?>
<?php
    /*Dado 20 números en un arreglo, imprimir cuantos son positivos, cuantos negativos y cuantos neutros.*/
    $numPositivos = 0;
    $numNeutros = 0;
    $numNegativos = 0;

    $numeros = [];

    for($i = 0 ; $i < 20 ; $i++){
        $numAleatorio = rand(-10,10);
        $numeros[$i] = $numAleatorio;

        if($numeros[$i] > 0){
            $numPositivos++;
        }elseif ($numeros[$i] < 0){
            $numNegativos++;
        }else{
            $numNeutros++;
        }
    }

    print_r($numeros);
    echo "<br><br>" . "Números positivos: " . $numPositivos . "<br>";
    echo "Números negativos: " . $numNegativos . "<br>";
    echo "Números neutros: " . $numNeutros . "<br>";
?>
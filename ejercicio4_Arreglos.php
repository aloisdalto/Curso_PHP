<?php 
    /*Un INFLUENCER dispone de una cantidad de euros que quiere repartir a un conjunto de personas. A cada persona le da una cantidad de dinero proporcional a la edad de la misma. Por ejemplo, si una persona tiene 17 años recibirá € 170 y si tiene 32 años recibirá € 320. Genere la edad de manera aleatoria entre 1 y 100.Escribir un programa que devuelva el número de personas que podrán recibir una cantidad de dinero. Cuando la cantidad de dinero ya no es suficiente para dársela a una persona, suponemos que no existen más personas y que por tanto el programa finaliza y nos dice cuánto dinero le quedó al INFLUENCER.*/

    $dineroInfluencer = 1000;
   
    $contadorPersonas = 0;
   
    while (true) {
        $edad = rand(1, 100);
        $cantidadADar = $edad*10;

        if ($dineroInfluencer >= $cantidadADar) {
            $dineroInfluencer -= $cantidadADar;
            $contadorPersonas++; 
            echo "Persona con edad $edad años recibió €$cantidadADar <br>";
        } else {
            break;
        }
    }

    echo "Número de personas que recibieron dinero: $contadorPersonas <br>";
    echo "Dinero restante del influencer: €$dineroInfluencer <br>";

?>
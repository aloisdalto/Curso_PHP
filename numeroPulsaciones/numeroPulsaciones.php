<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        if($sexo == "masculino"){
            $numPulsaciones =  (210 - $edad) / 10;
        } else {
            $numPulsaciones =  (220 - $edad) / 10;
        }

        echo "<h3>Número de Pulsaciones</h3>";
        echo "<p>Genero: $sexo</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Número de pulsaciones: $numPulsaciones</p>";
    }
?>
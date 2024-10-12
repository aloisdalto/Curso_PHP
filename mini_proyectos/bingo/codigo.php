<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numAciertos = $_POST['numAciertos'];
        $carton = [];
        $numCantados = [];
        $bingo = false;
        $aciertos = 0;

        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 5; $j++){
                $numero = rand (1,75);
                if (!in_array($numero, $carton)){
                    $carton[$i][$j] = $numero;  
                }
            }
        }

        while (!$bingo) {
            $numero = rand(1, 75);

            if (!in_array($numero, $numCantados)) {
                $numCantados[] = $numero;
                
                foreach ($carton as $i => $fila) {
                    foreach ($fila as $j => $valor) {
                        if ($valor == $numero) {
                            $carton[$i][$j] = $valor . " X";
                            $aciertos++;
                        }
                    }
                }

                if($aciertos == $numAciertos){
                    $bingo = true;
                }
            }
        }
    }
    
    // Mostrar el cartón y los números cantados
    echo "Cartón de Bingo:<br>";
    //Dibujar el carton
    echo "<table border='1'>";
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 5; $j++) {
            echo "<td>" . $carton[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
    //Mostrar numeros cantados
    echo "Numeros Cantados: ";
    echo "<table border='1'>";
    for ($i = 0; $i < count($numCantados) ; $i++) {
        echo "<td>" . $numCantados[$i] . "</td>";
    }
    echo "</table><br>";
    
    if($bingo == true){
        echo "BINGOOO!!!";
    }
?>
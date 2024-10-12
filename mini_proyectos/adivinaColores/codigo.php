<?php
if (isset($_POST['Enviar'])) {
    $colores = ['Azul', 'Rojo', 'Negro', 'Verde', 'Amarillo'];
    $color_pc = [];
    $color_user = [];

    while (count($color_pc) < 3) {
        $aleatorio = rand(1, 5);
        if (!in_array($aleatorio, $color_pc)) {
            $color_pc[] = $aleatorio;
        }
    }

    $color_user = [
        $_POST['num1'],
        $_POST['num2'],
        $_POST['num3']
    ];

    echo "Colores del PC: ";
    foreach ($color_pc as $color) {
        echo $colores[$color - 1] . " ";
    }
    echo "<br><br>";

    echo "Colores del usuario: ";
    foreach ($color_user as $color) {
        echo $colores[$color - 1] . " ";
    }
    echo "<br><br>";

    $aciertos_colores = 0;
    $aciertos_posiciones = 0;

    foreach ($color_user as $index => $color) {
        if (in_array($color, $color_pc)) {
            $aciertos_colores++;
            if ($color == $color_pc[$index]) {
                $aciertos_posiciones++;
            }
        }
    }

    echo "Acertó $aciertos_colores colores.<br>";
    echo "Acertó $aciertos_posiciones posiciones.<br>";

    if ($aciertos_colores === 3 && $aciertos_posiciones === 3) {
        echo "<h2>GANADOR!!</h2>";
    }
}
?>

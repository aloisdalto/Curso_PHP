<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $camisas = $_POST['camisas'];
        $total = $_POST['total'];

        if($camisas >= 3){
            $descuento = 0.2;
        } else {
            $descuento = 0.1;
        }

        $totalPagar = $total - ($total * $descuento);

        echo "<h3>Total a Pagar</h3>";
        echo "<p>Cantidad de camisas: $camisas </p>";
        echo "<p>Total de compra: $" . $total . "</p>";
        echo "<p>Descuento aplicado: ". ($descuento*100). "%</p>";
        echo "<p>Total a pagar: $$totalPagar </p>";
    }
?>

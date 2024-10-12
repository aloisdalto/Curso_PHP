<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = $_POST['monto'];

    if ($monto < 50000) {
        $cuota = $monto * 0.03; 
    } else {
        $cuota = $monto * 0.02; 
    }

    echo "<h1>Total a Pagar</h1>";
    echo "<p>Monto de la fianza: Bs. " . $monto . "</p>";
    echo "<p>Cuota a pagar: Bs. " . $cuota . "</p>";
}
?>

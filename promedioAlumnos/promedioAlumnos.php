<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $promedio = $_POST['promedio'];
    $monto = $_POST['monto'];

    if ($promedio >= 9) {
        $pago = $monto - ($monto * 0.3);
    } else {
        $pago = $monto + ($monto * 0.10);
    }

    echo "<h1>Total a Pagar</h1>";
    echo "<p>Promedio obtenido: $promedio</p>";
    echo "<p>Colegiatura sin IVA: Bs. " . $monto . "</p>";
    echo "<p>Total a pagar: Bs. " . $pago . "</p>";
}
?>

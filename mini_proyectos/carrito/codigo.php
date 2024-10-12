<?php
    $productos = [
        "Enrrollado" => ["precio" => 10, "cantidad" => 0],
        "Perro Caliente" => ["precio" => 1, "cantidad" => 0],
        "Tequeño" => ["precio" => 3, "cantidad" => 0],
        "Pizza" => ["precio" => 15, "cantidad" => 0],
        "Hamburguesa" => ["precio" => 5, "cantidad" => 0]
    ];
    
    $total = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Enviar'])) {
        foreach ($productos as $nombre => &$info) {
            $index = array_search($nombre, array_keys($productos)) + 1;
            if (isset($_POST["opcion" . $index])) {
                $cantidad = intval($_POST["cantidad" . $index]);
                if ($cantidad > 0) {
                    $info["cantidad"] = $cantidad;
                    $total += $info["precio"] * $cantidad;
                }
            }
        }
    }
    
    echo "<h3>Total a pagar: \$$total</h3>";
    foreach ($productos as $nombre => $info) {
        if ($info["cantidad"] > 0) {
            echo "<p>Producto: $nombre - Cantidad: " . $info["cantidad"] . "</p>";
        }
    }
?>

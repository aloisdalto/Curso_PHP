<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cauchos = $_POST['cauchos'];

        if($cauchos >= 5){
            $precio = 700;
        } else {
            $precio = 800;
        }

        $total = $cauchos * $precio;

        echo "<h3>Total a Pagar</h3>";
        echo "<p>Cantidad de cauchos: $cauchos</p>";
        echo "<p>Precio por unidad: Bs$precio</p>";
        echo "<p>Total de compra: Bs$total</p>";
    }
?>
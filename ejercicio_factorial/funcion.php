<?php
    $n1 = $_GET['n1'];
    // Función que calcula el factorial de un número.
    function factorial($i) {
        $total = 1;
        for($j = 1; $j <= $i; $j++)
           $total = $total * $j;
        return $total;
    }
?>
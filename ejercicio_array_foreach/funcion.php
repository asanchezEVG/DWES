<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    
    // Programa principal donde guardamos los factoriales del 0 al 10 en el array.
    for($i = $n1; $i <= $n2; $i++) {
        $factoriales[$i] = factorial($i);
    }

    // echo $factoriales; Notice: Array to string conversion in C:\xampp\htdocs\entorno_servidor\ejercicio_array\funcion.php on line 7 (Error de conversión).
    // echo $factoriales[0] Muestra el valor en la posición 0 del array.
    // echo $factoriales[14]; Notice: Undefined offset: 14 in C:\xampp\htdocs\entorno_servidor\ejercicio_array\funcion.php on line 9 (Fuera de rango).

    // for($j = 0; $j <= 10; $j++) { // Bucle para mostrar el array completo.
    //     echo "$factoriales[$j] <br>";
    // }

    // Función que calcula el factorial de un número.
    function factorial($i) {
        $total = 1;
        for($j = 1; $j <= $i; $j++)
           $total = $total * $j;
        return $total;
    }
?>

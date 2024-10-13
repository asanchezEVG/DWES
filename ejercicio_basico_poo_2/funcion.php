<?php
    require_once 'fecha.php';
    $fecha = $_GET["fecha"];

    $objFecha = new Fecha();
    $objFecha->convertirFecha($fecha);
    $objFecha->esBisiesto();

    echo $objFecha->visualizarFecha()."<br />";
    echo $objFecha->visualizarDiasMes();
?>
<!DOCTYPE html>
<?php
    $saludo = 'hola';
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<body>
    <?php  echo "<h1> $saludo </h1>";?>
    <?php  echo '<h2>' .$saludo. '</h2>';?>
    <?php  echo "<h2>" .$saludo. "</h2>";?>
    <?php  echo $saludo ."<br/>";
    echo $saludo;?>
    <!-- echo '<p>' .PHP_VERSION. '</p>';
    echo '<p>' .PHP_OS. '</p>'; -->
</body>
</html>
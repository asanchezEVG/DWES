<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Factorial</title>
    </head>
    <body>
        <?php
            $num = 7;
            $total = 1;
    
            for($i=1; $i<=$num; $i++)
                $total = $total * $i;

            echo '<h3>'."El factorial de ".$num. " es ".$total.'</h3>';
        ?>
    </body>
</html>
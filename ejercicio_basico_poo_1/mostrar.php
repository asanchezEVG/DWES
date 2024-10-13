<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="styleResultado.css">
    </head>
    <body>
        <div class="container">
            <h1>Resultado: </h1>
            <?php
                require_once 'calculadora.php';

                // if($_GET['n1'] > $_GET['n2'])
                //     $objCalculadora = new calculadora($_GET['n1'], $_GET['n2']);
                // else    
                //     $objCalculadora = new calculadora($_GET['n2'], $_GET['n1']);

                $objCalculadora = new calculadora($_GET['n1'], $_GET['n2']);
                
                // Puedo sustituir este echo si quito el return en calculadora.php y en las funciones dejo los echo.
                echo '<p>'.$objCalculadora->visualizarResultado($_GET['operacion']).'</p>';
            ?>
            <a href="formulario.html" class="boton">Volver</a>
        </div>
    </body>
</html>
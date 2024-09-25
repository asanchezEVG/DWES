<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Array de Imágenes</title>
        <?php
            $imagenes = array( // Array asociativo
                "Ordenador" => "imagen1.jpeg",
                "Niño" => "imagen2.jpeg",
                "Dibujo" => "imagen3.jpeg",
            );
        ?>
    </head>
    <body>
        <h1>El cambio climático</h1>
        <div class="fotos">
            <?php
                foreach($imagenes as $indice => $valor) {
                    echo '<div>';
                    echo '<img src="img/'.$valor.'">';
                    echo '<p>'.$indice.'</p>';
                    echo '</div>';
                    // echo '<div><img src="img/'.$valor.'"><p>'.$indice.'</p></div>'; Equivale a las 4 líneas superiores.
                }
            ?>
        </div>
    </body>
</html>

<!-- 
$imagenes: Es el array que estás recorriendo. Array asociativo que contiene nombres de imágenes como clave y la ruta de la imagen como valor.
$indice: Variable que captura la clave del array en cada iteración. La clave representa el nombre de la imagen (por ejemplo, "Ordenador").
$valor: Variable que captura el valor asociado a la clave en cada iteración. El valor es la ruta de la imagen (por ejemplo, "img/imagen1.jpeg"). 
-->
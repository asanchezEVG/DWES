
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factoriales</title>
        <style>  
            table {
                width: 50%;
                margin: 20px auto;
                border-collapse: collapse;
                font-family: Arial, sans-serif;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: center;
            }

            td {
                font-weight: bold;
            }

            th {
                background-color: #76c279;
                color: rgb(0, 0, 0);
            }

            tfoot {
                font-weight: bold;
                background-color: #f2f2f2;
            }

            .color:hover {
                background-color: rgba(141, 200, 210, 0.296);
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <th colspan="2">
                    <?php
                        require_once "funcion.php";
                        echo 'Factoriales del '.$n1.' al '.$n2;
                    ?>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>Número</td>
                    <td>Factorial</td>
                </tr>
                <?php
                    for($k = $n1; $k <= $n2; $k++) {
                        echo '<tr class="color"><td>Factorial de '.$k.'</td><td>' .$factoriales[$k]. '</td></tr>';
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Alberto Sánchez Díaz</td>
                </tr>
            </tfoot>
        </table>
        <?php
            // for($l = $n1; $l <= count($factoriales); $l++) { // Te devuelve los elementos que contiene el array.
                // echo $factoriales[$l];      // Si la suma del número inicial más la cantidad de factoriales que tiene que hacer es mayor que el count total, explota.
                // echo '<br>'; // Por ejemplo, si mi primer número es 10 y quiero que el segundo sea el 20, el count me devolvería 11, pero como la suma de elementos de 10 + 11 es mayor que el final del for (En este caso 20), muestra 2 líneas por el <= y una por el <.
            // }
        //     echo count($factoriales);
        //    print_r($factoriales); Muestra el array completo.
        //     var_dump($factoriales); Muestra el tamaño del array, además de cada índice y de lo que contiene cada uno.
        // ?>
    </body>
</html>
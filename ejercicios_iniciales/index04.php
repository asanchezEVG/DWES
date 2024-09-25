<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Factorial de un numero</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Tabla de factoriales</th>
                </tr>
                <tr>
                    <td>Número</td>
                    <td>Factorial</td>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i=1; $i<=10; $i++) {
                    $total = 1;
                    for($j=1; $j<=$i; $j++)
                        $total = $total * $j;
                    // echo "<tr><td>$i</td><td>$total</td></tr>";
                    echo "<tr><td>".$i."</td><td>".$total."</td></tr>";
                }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Alberto Sánchez Díaz</td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
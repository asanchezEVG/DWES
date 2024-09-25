<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Factorial de un numero</title>
        <style>  
            form {
                margin: auto;
                width: 30%;
                border: 1px solid;
                margin-bottom: 2rem;
                padding: 1%;
                text-align: center;
            }

            input[type="text"] {
                display: block;
                width: 50%;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 23%;
            }

            input[type="submit"] {
                display: block;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                background-color: lightgoldenrodyellow;
                padding: 10px 20px;
                font-family: Arial, sans-serif;
                font-weight: bold;
                color: #333;
                border-radius: 8px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
                transition: background-color 0.3s ease, box-shadow 0.3s ease;
                cursor: pointer;
                border: none;
                font-size: 16px;
            }

            input[type="submit"]:hover {
                background-color: gold;
                box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);
            }

            input[type="submit"]:active {
                background-color: goldenrod;
                box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>
    <?php
        include "funcion.php";
    ?>
    <body>
        <form method="GET" name="formulario">
            <label for="n1">Primer número: </label>
            <input type="text" name="n1" require>
            <label for="n2">Segundo número: </label>
            <input type="text" name="n2" require>
            <input type="submit">
        </form>
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        <?php
                            $n1 = $_GET["n1"];
                            $n2 = $_GET["n2"];
                            echo 'Factoriales del '.$n1.' al '.$n2;
                        ?>
                    </th>
                </tr>
                <tr>
                    <td>Número</td>
                    <td>Factorial</td>
                </tr>
            </thead>
            <tbody>
            <?php
                for($i = $n1; $i <= $n2; $i++) {
                    $total = factorial($i);
                    echo '<tr><td>Factorial de '.$i.'</td><td>' .$total. '</td></tr>';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoriales</title>
    <style>  
        table {
            width: 60%;
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
        
        a {
            background-color: lightgoldenrodyellow;
            text-decoration: none;
            padding: 10px 20px;
            margin-left: 48%;
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #333;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
        }

        a:hover {
            background-color: gold;
            box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        a:active {
            background-color: goldenrod;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        </style>
</head>
<?php
    require_once "funcion.php";
?>
<body>
    <table>
        <thead>
            <th colspan="2">Factoriales de un número</th>
        </thead>
        <tbody>
            <tr>
                <td>Número</td>
                <td>Factorial</td>
            </tr>
            <?php
                // Mostramos el factorial del número que hemos introducido.
                $total = factorial($n1);
                echo '<tr class="color"><td>Factorial de '.$n1.'</td><td>' .$total. '</td></tr>';
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Alberto Sánchez Díaz</td>
            </tr>
        </tfoot>
    </table>
    <a href="introducir.php">Volver</a>
</body>
</html>
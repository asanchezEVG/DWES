
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factoriales</title>
    <?php
        require_once 'factorial.php';
        // Programa principal donde guardamos los factoriales del 0 al 10 en el array.
        for($i = 0; $i <= 10; $i++) {
            $factoriales[$i] = factorial($i);
        }
    ?>
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
        </style>
</head>
<body>
    <table>
        <thead>
            <th colspan="2">Factoriales del 1 al 10</th>
        </thead>
        <tbody>
            <tr>
                <td>Número</td>
                <td>Factorial</td>
            </tr>
            <?php
                // Mostramos los factoriales de los números que hemos guardado en el array.
                for($i = 0; $i <= 10; $i++) {
                    echo '<tr><td>Factorial de '.$i.'</td><td>' .$factoriales[$i]. '</td></tr>';
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
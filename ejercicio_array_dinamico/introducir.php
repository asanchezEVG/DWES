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
                margin: 1 1;
                margin-top: 10px;
                margin-bottom: 10px;
                margin-left: 23%;
            }

            input[type="submit"] {
                display: block;
                margin-top: 10px;
                margin-left: 45%;
                background-color: lightgreen;
            }
        </style>
    </head>
    <body>
        <form method="GET" action="mostrar.php">
            <label for="n1">Primer número: </label>
            <input type="text" name="n1" require>
            <label for="n2">Segundo número: </label>
            <input type="text" name="n2" require>
            <input type="submit">
        </form>
    </body>
</html>
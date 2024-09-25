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

            label {
                display: block;
                margin-bottom: 10px;
                font-size: 16px;
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
    <body>
        <form method="GET" action="mostrar.php">
            <label for="n1">Introduce número para el factorial: </label>
            <input type="text" name="n1" require>
            <input type="submit">
        </form>
    </body>
</html>
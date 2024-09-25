<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        form {
            margin: 30px auto 75px;
            width: 500px;
            background-color: rgba(141, 200, 210, 0.296);
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #ddd; 
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"]
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #6db3b9;
            color: white;
            padding: 15px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #5ca0a6;
        }

        input[type="submit"] {
            display: block;
            background-color: lightgoldenrodyellow;
            width: 100px;
            margin: auto;
            font-family: Arial, sans-serif;
            font-weight: bold;
            color: #333;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
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
    <form action="mostrar.php" method="get">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="nombre">Apellido: </label>
        <input type="text" id="apellido" name="apellido" required>
        <input type="submit">
    </form>
</body>
</html>
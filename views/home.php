<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    <style>
        body{
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a la página de inicio.</h1>
    <p>
        <a href="index.php?action=user" class="button">Ir a la sección de usuarios</a>
        <a href="index.php?action=configuration" class="button">Ir a Configuraciones</a>
    </p>
</body>
</html>
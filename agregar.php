<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id="menu">
        <nav>
            <ul>
                <li><a>HOME</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="agregar.php">Agregar Mascotas</a></li>
                <li><a href="listar.php">Listar Mascotas</a></li>
            </ul>

        </nav>
    </div>
    <form action="EstudianteController.php" method="post">
        <p>
            <label for="nombre">Nombre de Mascota:</label>
            <input type="text" name="nombre">
        </p>    
        <p>
            <input type="submit" value="Aceptar" name="btnGuardar">
        </p>
    </form>
    
</body>
</html>
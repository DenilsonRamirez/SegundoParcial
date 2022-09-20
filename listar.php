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
<hr>
    <hr>
    <table border="1">
        <th>idMascota</th>
        <th>Mascota</th>
        <th colspan="2">Acciones</th>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['idMascota'] ?> </td>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td><a href="VistaAgregar.php?idEst=<?php echo $Estudiantes['idMascota'];?>">Agregar</a></td>
                <td><a href="VistaEditar.php?idEst=<?php echo $Estudiantes['idMascota'];?>">Editar</a></td>
          </tr>
          
       <?php } ?>
    
    </table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaEditarEstudiante</title>
</head>
<body>
    <form action="EstudianteController.php" method="POST">
    <?php
                            include_once "EstudianteModel.php";
                            $nuevoEstudiante = new Estudiante();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevoEstudiante->FiltrarEstudiante($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label for="txtid">Id:</label>
                                <input type="text" name="txtid" 
                                value="<?php echo $resultadoFiltrado['idMascota']?>" disabled>
                                </p>

                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" 
                                value="<?php echo $resultadoFiltrado['nombre']?>">
                                </p>

                                 <p>
                                    <input type="hidden" name="idmascota" 
                                    value="<?php echo $resultadoFiltrado['idMascota']?>">
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Guardar" name="btnEditar2">            
    </form>
</body>
</html>
<?php
include "EstudianteModel.php";
$nuevoEstudiante = new Estudiante();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevoEstudiante->GuardarEstudiante($_POST['nombre']);
    header('Location: listar.php');
}
else
if(isset($_POST['btnEditar']))
{
 $nuevoEstudiante->EditarEstudiante($_POST['txtvacuna'],$_POST['idMascota']); 
 header('Location: listar.php');
        
}

if(isset($_POST['btnEditar2']))
{
 $nuevoEstudiante->EditarMascota($_POST['txtnombre'],$_POST['idmascota']); 
 header('Location: listar.php');
        
}
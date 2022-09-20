<?php
include_once "conexion.php";


class Estudiante
{
    private $nombre;
    private $anio;
    private $vacuna;

    public function GuardarEstudiante($nom)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into mascotas (nombre) values ("."'".$_POST['nombre']."')" );

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: listar.php");
    }
    public function ListarEstudiantes()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascotas");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Mascotas...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarEstudiante($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascotas where idMascota=$id");
      return $resultado;
    }

    public function EditarEstudiante($vacuna,$id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("insert into vacunas (año, vacuna, idMascota) values ('2022','".$_POST['vacuna']."','".$_POST['id']."' )" );
    }

    public function EditarMascota($nom,$id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update mascotas set nombre="."'".$nom."'"." where idMascota = $id");    
      if(!$nuevoComando)
      {
        echo "Error Al intentar realizar Consulta de Mascotas...".mysqli_error($nuevoComando);
      } 
    }

}

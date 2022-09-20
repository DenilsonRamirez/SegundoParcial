<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bub0gop4ylnbxp7p6h5u-mysql.services.clever-cloud.com","umshknkj1tdqnfsf","MX2gsudpu5cKwK30UW6u","bub0gop4ylnbxp7p6h5u");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }
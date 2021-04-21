<?php
include 'conexion.php';

      $nombres=$_POST ['nombres'];
      $apellidos=$_POST ['apellidos'];
      $correo=$_POST ['correo'];
      $contraseña=$_POST ['contrasena'];
      
      $consulta = "INSERT INTO usuarios(nombres, apellidos, correo, contrasena) VALUES ('$nombres', '$apellidos', '$correo', '$contraseña')";
      $peticion=mysql_query($consulta,$conn);
        
        
   if(!$peticion){
       $mensaje= "Ocurrio un error al Registrar".  mysql_error($conn);
       echo $mensaje;
   }else{
       
       $mensaje= "Registrado Correctamente";
       echo $mensaje;
       
   }
   
      
 

?>


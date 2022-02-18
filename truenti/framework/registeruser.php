<?php

require_once("includes/a_config.php");

// Datos para conectar a la base de datos.
$nombreServidor = "localhost";
$nombreUsuario = "root";
$passwordBaseDeDatos = "";
$nombreBaseDeDatos = "loscabesa";

// Crear conexión con la base de datos.
$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
 
// Validar la conexión de base de datos.
if ($conn ->connect_error) {
  die("Connection failed: " . $conn ->connect_error);
}

      if(isset($_POST['enviar'])) { 
         if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['correo'] == '') { 
             echo 'Por favor llene todos los campos.'; 
             }  
                     $usuario = $_POST['usuario']; 
                     $password = $_POST['password']; 
                     $correo = $_POST['correo'];
                     $nombre = $_POST['nombre'];
                     $apellido1 = $_POST['apellido1'];
                     $apellido2 = $_POST['apellido2'];
                     $fecha = $_POST['fecha'];
                     $pais = $_POST['pais'];
                     $postal = $_POST['postal'];

                     $sql = "INSERT INTO usuario (correo_electronico,username,password,nombre,apellido1,apellido2,fecha_nacimiento,pais,cp) VALUES ('$correo', '$usuario', '$password', '$nombre', '$apellido1', '$apellido2', '$fecha', '$pais', '$postal')"; 
                     $conn->query($sql);
                     header("Location: index.php");
                 } 
              


      ?>
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
                     $sql = "INSERT INTO usuario (username,password,correo_electronico) VALUES ('$usuario','$password', '$correo')"; 
                     $conn->query($sql);
                     header("Location: index.php");
                 } 
              


      ?>
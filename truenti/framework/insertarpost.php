<?php
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
//Recibes las variables por POST
$publi=$_POST['publi'];

//Haces lo demas con el  resto de los campos de tu formulario
//Realizas el Insert a tu bd
try{
  $sql="INSERT INTO publicaciones(id_usuario,f_publi,post) values('1','10-Jan-1999',$publi)";
}catch (Exception $e) {
  echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

//Ejecutas tu consulta y listo



?>
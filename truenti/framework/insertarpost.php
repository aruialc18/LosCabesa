<?php
session_start();
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

  $sql="INSERT INTO publicaciones(id_usuario,f_publi,post) values(".$_SESSION['id_usuario'].",'2022-02-01','".$publi."')";

 
if (mysqli_query($conn, $sql)) {
  header('Location:home.php');
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);




?>
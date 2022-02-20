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
if(isset($_GET['n'])){
    if($_GET['n']=="si"){
        $like = mysqli_query($conn,"UPDATE publicaciones SET likes = likes + 1 WHERE id = '".$_GET['id']."'") or die ("Problemas al realizar la consulta");
        header("Location: home.php");
    }
    if($_GET['n']=="no"){
        $dislike = mysqli_query($conn,"UPDATE publicaciones SET dislikes = dislikes + 1 WHERE id = '".$_GET['id']."'") or die ("Problemas al realizar la consulta");
        header("Location: home.php");
    }

}
?>
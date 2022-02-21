<?php 
include("includes/a_config.php");
include 'conex.php';
include("includes/navigation.php");
$id=$_GET['editarid'];

$sql="select * from `usuario` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$email=$row['correo_electronico'];
$username=$row['username'];
$contrasenia=$row['password'];
$nombre=$row['nombre'];
$apellido1=$row['apellido1'];
$apellido2=$row['apellido2'];
$fnac=$row['fecha_nacimiento'];
$pais=$row['pais'];
$cp=$row['cp'];

if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $username= $_POST['username'];
  $contrasenia= $_POST['password'];
  $nombre= $_POST['nombre'];
  $apellido1= $_POST['apellido1'];
  $apellido2= $_POST['apellido2'];
  $fnac= $_POST['fnac'];
  $pais= $_POST['pais'];
  $cp= $_POST['cp'];

  $sql="update `usuario` set id=$id,correo_electronico='$email',
  username='$username',password='$contrasenia',
  nombre='$nombre',apellido1='$apellido1',
  apellido2='$apellido2',fecha_nacimiento=$fnac,
  pais='$pais',cp=$cp where id=$id";
  $result=mysqli_query($con,$sql);

  if($result){
    echo 'usuario modificado';
    //header('location:crud.php');
  }else{
    die(mysqli_error($con));
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="text-center">
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Correo Electronico</label>
        <input type="email" placeholder="Correo Electronico" name="email" value=<?php echo $email ?>>
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" placeholder="Nombre de usuario" name="username" <?php echo $username ?>>
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" placeholder="contraseña" name="password" <?php echo $contrasenia ?>>
      </div>
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" placeholder="Nombre" name="nombre" <?php echo $nombre ?>>
      </div>
      <div class="form-group">
        <label>Apellido1</label>
        <input type="text" placeholder="Apellido1" name="apellido1" value=<?php echo $apellido1 ?>>
      </div>
      <div class="form-group">
        <label>Apellido2</label>
        <input type="text" placeholder="Apellido2" name="apellido2" value=<?php echo $apellido2 ?>>
      </div>
      <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="date" placeholder="Fecha de nacimiento" name="fnac" value=<?php echo $fnac ?>>
      </div>
      <div class="form-group">
        <label>Pais</label>
        <input type="text" placeholder="Pais" name="pais" value=<?php echo $pais ?>>
      </div>
      <div class="form-group">
        <label>Codigo Postal</label>
        <input type="number" placeholder="Codigo Postal" name="cp" value=<?php echo $cp ?>>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Editar usuario</button>
      <a href="crud.php">Volver</a>
    </form>

  </div>
</body>

</html>
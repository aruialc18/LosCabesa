<?php 
include("includes/a_config.php");
include 'conex.php';
include("includes/navigation.php");

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

  $sql = "insert into `usuario` (correo_electronico,username,password,nombre,apellido1,apellido2,fecha_nacimiento,pais,cp) 
  values('$email','$username','$contrasenia','$nombre','$apellido1','$apellido2','$fnac','$pais','$cp')";
  $result=mysqli_query($con,$sql);

  if($result){
    //echo 'usuario insertado';
    header('location:crud.php');
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
        <input type="email" placeholder="Correo Electronico" name="email" value=<?php echo $email ?> >
      </div>
      <div class="form-group">
        <label>Username</label>
        <input type="text" placeholder="Nombre de usuario" name="username" value=<?php echo $username ?> >
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" placeholder="contraseña" name="password" value=<?php echo $contrasenia ?>>
      </div>
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" placeholder="Nombre" name="nombre">
      </div>
      <div class="form-group">
        <label>Apellido1</label>
        <input type="text" placeholder="Apellido1" name="apellido1">
      </div>
      <div class="form-group">
        <label>Apellido2</label>
        <input type="text" placeholder="Apellido2" name="apellido2">
      </div>
      <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="date" placeholder="Fecha de nacimiento" name="fnac">
      </div>
      <div class="form-group">
        <label>Pais</label>
        <input type="text" placeholder="Pais" name="pais">
      </div>
      <div class="form-group">
        <label>Codigo Postal</label>
        <input type="number" placeholder="Codigo Postal" name="cp">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <a href="crud.php">Volver</a>
    </form>

  </div>
</body>

</html>
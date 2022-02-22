<?php
include("includes/a_config.php");
include 'conex.php';

?>
<?php if (isset($_SESSION['correo_electronico']))  {
                 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <?php include("includes/head-tag-contents.php");?>
        <?php include("includes/navigation.php");?>
    <title>Document</title>
</head>

<body>
    <div class="container separatop">
        <button class="btn btn-primary my-5"><a href="nuevousuario.php" class="text-light"> Añadir usuario</a></button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Nombre de usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido1</th>
                <th scope="col">Apellido2</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Pais</th>
                <th scope="col">Codigo Postal</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from `usuario` where rol='Usuario'";
                $result=mysqli_query($con,$sql);

                if($result){
                    while($row=mysqli_fetch_assoc($result)){
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

                      echo '<tr>
                      <th scope="row">'.$id.'</th>
                      <td>'.$username.'</td>
                      <td>'.$contrasenia.'</td>
                      <td>'.$nombre.'</td>
                      <td>'.$apellido1.'</td>
                      <td>'.$apellido2.'</td>
                      <td>'.$fnac.'</td>
                      <td>'.$pais.'</td>
                      <td>'.$cp.'</td>
                      <td>
                        <button class="btn btn-primary"><a href="editar.php? editarid='.$id.'">Editar</a></button>  
                        <button class="btn btn-danger"><a href="eliminar.php? deleteid='.$id.'">Eliminar</a></button>
                      </td>
                    </tr>';
                    }
                }

                ?>

           
            </tbody>
          </table>
    </div>
</body>

</html>

<?php } ?>

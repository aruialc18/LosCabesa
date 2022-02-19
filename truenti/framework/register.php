<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/head-tag-contents.php");?>
</head>
<body>
    
            <div class="truenti container-fluid page-section  ">
                <div class="row">
                     <div class="col-sm-6">
                        <img class=" logo-login" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-6">
                       <h1>Registro</h1>
                        <form action="registeruser.php" method="POST" class="form-login">
                            <input type="text" name="usuario" class="form-control-sm" placeholder="Usuario">
                            <input type="text" name="correo" class="form-control-sm" placeholder="Correo Electrónico"><br><br>
                            <input type="text" name="nombre" class="form-control-sm" placeholder="Nombre">
                            <input type="text" name="apellido1" class="form-control-sm" placeholder="Apellido 1"><br><br>
                            <input type="text" name="apellido2" class="form-control-sm" placeholder="Apellido 2">
                            <input type="date" name="fecha" class="form-control-sm" placeholder="Fecha nacimiento"><br><br>                         
                            <input type="text" name="pais" class="form-control-sm" placeholder="Pais">
                            <input type="number" name="postal" class="form-control-sm" placeholder="Codigo Postal"><br><br>
                            <input type="password" name="password" class="form-control-sm" placeholder="Contraseña">
                            <input class="bg-secondary form-control-sm" type="submit" name="enviar" value="Crear Cuenta"><br><br>
                            <h>¿Ya tienes cuenta? <a href="index.php">Inicia Sesión</a></h2>
                         </form>
                         
                     </div>
                     
                </div>
             </div>
            <?php include("includes/footer.php");?>
             

      
</body>
</html>
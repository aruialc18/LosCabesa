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
                        <img class=" logo-login" src="/assets/truenti/rayo2.png" alt="">
                     </div>
                    <div class="col-sm-6">
                       <h1>Registro</h1>
                        <form action="registeruser.php" method="POST" class="form-login">
                           <label for="usuario"><span class="sr-only"> Usuario</span> </label> <input type="text" id="usuario" name="usuario" class="form-control-sm" placeholder="Usuario">
                           <label for="correo"><span class="sr-only"> Correo</span></label> <input type="text" id="correo" name="correo" class="form-control-sm" placeholder="Correo Electrónico"><br><br>
                           <label for="nombre"><span class="sr-only"> Nombre</span></label><input type="text" id="nombre" name="nombre" class="form-control-sm" placeholder="Nombre">
                           <label for="apellido1"><span class="sr-only"> apellido1</span></label><input type="text" id="apellido1" name="apellido1" class="form-control-sm" placeholder="Apellido 1"><br><br>
                           <label for="apellido2"><span class="sr-only"> apellido2</span></label> <input type="text" id="apellido2" name="apellido2" class="form-control-sm" placeholder="Apellido 2">
                           <label for="fecha"><span class="sr-only"> fecha</span></label> <input type="date" id="fecha" name="fecha" class="form-control-sm" placeholder="Fecha nacimiento"><br><br>                         
                           <label for="pais"><span class="sr-only"> pais</span></label> <input type="text" id="pais" name="pais" class="form-control-sm" placeholder="Pais">
                           <label for="number"><span class="sr-only"> number</span> </label><input type="number" id="number" name="postal" class="form-control-sm" placeholder="Codigo Postal"><br><br>
                           <label for="password"><span class="sr-only"> password</span></label> <input type="password" id="password" name="password" class="form-control-sm" placeholder="Contraseña">
                           <label for="submit"><span class="sr-only"> Submit</span></label> <input class="bg-secondary form-control-sm" type="submit" name="enviar" value="Crear Cuenta"><br><br>
                            <h>¿Ya tienes cuenta? <a href="index.php">Inicia Sesión</a></h2>
                         </form>
                         
                     </div>
                     
                </div>
             </div>
            <?php include("includes/footer.php");?>
             

      
</body>
</html>
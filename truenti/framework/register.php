<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/head-tag-contents.php");?>
</head>
<body>
    
            <div class="container-fluid page-section  " style="background-image: url(/assets/truenti/fondo2.png); " >
                <div class="row">
                     <div class="col-sm-12 col-md-6">
                        <img class=" logo-login" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-12  col-md-6">
                       <h1>Registro</h1>
                        <form class="form-login">
                            <input type="text" name="user" class="form-control-sm" placeholder="Usuario"><br><br>
                            <input type="text" name="user" class="form-control-sm" placeholder="Correo Electrónico"><br><br>
                            <input type="password" name="pass" class="form-control-sm" placeholder="Contraseña"><br><br>
                            <input class="bg-secondary form-control-sm" type="submit" name="entrar" value="Crear Cuenta"><br><br>
                            <h>¿Ya tienes cuenta? <a href="login.php">Inicia Sesión</a></h2>
                         </form>
                         
                     </div>
                     
                </div>
             </div>
             <?php include("includes/footer.php");?>

             
</body>
</html>
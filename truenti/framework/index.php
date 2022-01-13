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
                        <img class=" logo-login img-fluid" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-12  col-lg-6">
                       <h1>Inicio de Sesión</h1>
                        <form class="form-login">
                            <input type="text" name="user" class="form-control-sm" placeholder="Usuario"><br><br>
                            <input type="password" name="pass" class="form-control-sm" placeholder="Contraseña"><br><br>
                            <input class="bg-secondary form-control-sm" type="submit" name="entrar" value="Entrar"><br><br>
                            <h>¿Aún no tienes cuenta? <a href="register.php">Regístrate</a></h2>
                         </form>
                         
                     </div>
                     
                </div>
             </div>
             <?php include("includes/footer.php");?>

             
</body>
</html>

<?php

if (isset($_POST['entrar']))
{   
   header("Location: home.php");  
 }

?>
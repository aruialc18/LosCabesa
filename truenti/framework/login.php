<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/head-tag-contents.php");?>
</head>
<body>
    
            <div class="container-fluid page-section text-center " style="background-image: url(/assets/truenti/fondo2.png); " >
                <div class="row">
                     <div class="col-sm-12 col-md-6">
                        <img class=" logo-login" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-12  col-lg-6">
                       <h1>Inicio de Sesión</h1>
                        <form class="form-login">
                            <input type="text" name="user" placeholder="Usuario"><br><br>
                            <input type="password" name="pass" placeholder="Contraseña"><br><br>
                            <input class="bg-secondary" type="submit" name="entrar" value="Entrar"><br>
                            <h>¿Aún no tienes cuenta? <a href="register.php">Regístrate</a></h2>
                         </form>
                         
                     </div>
                     
                </div>
             </div>
             <?php include("includes/footer.php");?>

             
</body>
</html>
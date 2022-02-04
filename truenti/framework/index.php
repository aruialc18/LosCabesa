<?php include("includes/a_config.php");
include("includes/cookies.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/head-tag-contents.php");?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="js/gestioncookies.js"></script>
</head>
<body>
<?=$advice;?>

    
            <div class="container-fluid page-section  " style="background-image: url(/assets/truenti/fondo2.png); " >
                <div class="row">
                     <div class="col-sm-12 col-md-6">
                        <img class=" logo-login img-fluid" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-12  col-lg-6">
                       <h1>Inicio de Sesión</h1>
                        <form  method="POST" action="login.php" class="form-login"  >
                            <input type="text" name="user" class="form-control-sm" placeholder="Usuario"><br><br>
                            <input type="password" name="pass" class="form-control-sm" placeholder="Contraseña"><br><br>
                            <?php
                            if ($_GET["error"]=="1"){
                               ?>
                            <div class="alert alert-warning">Login incorrecto</div>
                            <?php
                            }
                            ?>
                            <button class="bg-secondary form-control-sm" type="submit" name="entrar">Enviar</button><br><br>
                            <?php
                           
                            //Create a URL to obtain user authorization
                            $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="assets/img/sign-in-with-google.png" class="googlebtn"/></a>';
                            echo $login_button;
                           ?>
                            
                            
                            <h>¿Aún no tienes cuenta? <a href="register.php">Regístrate</a></h2>
                         </form>
                         
                     </div>
                     
                     
                     
                     
                </div>
             </div>
             <?php include("includes/footer.php");?>

             
</body>
</html>

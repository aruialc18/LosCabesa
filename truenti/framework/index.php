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

    
            <div class=" truenti container-fluid page-section  " >
                <div class="row">
                     <div class="col-sm-6">
                        <img alt="imagetruenti" class=" logo-login img-fluid" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-6">
                       <h1>Inicio de Sesión</h1>
                        <form  method="POST" action="login.php" class="form-login"  >
                           <label class="sr-only" for="user">Usuario</label>
                            <input type="text" id="user" name="user" class="form-control-sm" placeholder="Usuario"><br><br>
                            <label class="sr-only" for="pass">Clave</label>
                            <input type="password" id="pass" name="pass" class="form-control-sm" placeholder="Contraseña"><br><br>
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
                            $login_button = '<a href="'.$google_client->createAuthUrl().'"><img alt="googlelogin" src="assets/img/sign-in-with-google.png" class="googlebtn"/></a>';
                            echo $login_button;
                           ?>
                            
                            
                           <br> <h>¿Aún no tienes cuenta? <a class="registrate" href="register.php">Regístrate</a></h2>
                         </form>
                         
                     </div>
                     
                     
                     
                     
                </div>
             </div>
             <?php include("includes/footer.php");?>

             
</body>
</html>

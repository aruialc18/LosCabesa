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
<meta name="google-signin-client_id" content="74470804683-ngl75vk760od6dap34bpd7snjvduamb5.apps.googleusercontent.com">
    
            <div class="container-fluid page-section  " style="background-image: url(/assets/truenti/fondo2.png); " >
                <div class="row">
                     <div class="col-sm-12 col-md-6">
                        <img class=" logo-login img-fluid" src="/assets/truenti/rayo2.png">
                     </div>
                    <div class="col-sm-12  col-lg-6">
                       <h1>Inicio de Sesión</h1>
                        <form  method="POST" action="" class="form-login"  >
                            <input type="text" name="user" class="form-control-sm" placeholder="Usuario"><br><br>
                            <input type="password" name="pass" class="form-control-sm" placeholder="Contraseña"><br><br>
                            <button class="bg-secondary form-control-sm" type="submit" name="entrar">Enviar</button><br><br>
                            <div class="g-signin2" data-onsuccess="onSignIn"></div>
                            
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
 session_start();
   
 // Obtengo los datos cargados en el formulario de login.
 $email = $_POST['user'];
 $password = $_POST['pass'];
  
 // Datos para conectar a la base de datos.
 $nombreServidor = "localhost";
 $nombreUsuario = "ruanox";
 $passwordBaseDeDatos = "ruanox";
 $nombreBaseDeDatos = "loscabesa";
 
 // Crear conexión con la base de datos.
 $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
  
 // Validar la conexión de base de datos.
 if ($conn ->connect_error) {
   die("Connection failed: " . $conn ->connect_error);
 }
  
 // Consulta segura para evitar inyecciones SQL.
 $sql = sprintf("SELECT * FROM username WHERE correo_electronico='%s' AND password = %s", mysql_real_escape_string($email), mysql_real_escape_string($password));
 $resultado = $conn->query($sql);
  
 // Verificando si el usuario existe en la base de datos.
 if($resultado){
   // Guardo en la sesión el email del usuario.
   $_SESSION['user'] = $email;
    
   // Redirecciono al usuario a la página principal del sitio.
   header("HTTP/1.1 302 Moved Temporarily"); 
   header("Location: perfil.php"); 
 }else{
   echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
 }
 

?>
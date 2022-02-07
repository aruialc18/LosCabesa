<?php

 require_once("includes/a_config.php");

// Datos para conectar a la base de datos.
$nombreServidor = "localhost";
$nombreUsuario = "pablo";
$passwordBaseDeDatos = "1234";
$nombreBaseDeDatos = "loscabesa";

// Crear conexión con la base de datos.
$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
 
// Validar la conexión de base de datos.
if ($conn ->connect_error) {
  die("Connection failed: " . $conn ->connect_error);
}
 
 if(isset($_GET["code"]))
 {
   //Obtenemos el objeto token
   $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 
  //Si ha habido algún error en la autenticación, el array asociativo $token 
  //contendrá la variable "error", en caso contrario hay éxito y 
  //ya podemos recuperar los datos del perfil del usuario
  if(!isset($token['error']))
  {
   //Set the access token used for requests
   $google_client->setAccessToken($token['access_token']);
 
   //Store "access_token" value in $_SESSION variable for future use.
   $_SESSION['access_token'] = $token['access_token'];
 
   //Create Object of Google Service OAuth 2 class
   $google_service = new Google_Service_Oauth2($google_client);
 
   //Get user profile data from google
   $data = $google_service->userinfo->get();
 
   //Below you can find Get profile data and store into $_SESSION variable
   if(!empty($data['given_name']))
   {
    $_SESSION['user_first_name'] = $data['given_name'];
   }
 
   if(!empty($data['family_name']))
   {
    $_SESSION['user_last_name'] = $data['family_name'];
   }
 
   if(!empty($data['email']))
   {
    $_SESSION['user_email_address'] = $data['email'];
    
   }
 
   if(!empty($data['gender']))
   {
    $_SESSION['user_gender'] = $data['gender'];
   }
 
   if(!empty($data['picture']))
   {
    $_SESSION['user_image'] = $data['picture'];
   }
   $email=$data['email'];
   $sql = sprintf("SELECT * FROM usuario WHERE correo_electronico='%s'", $conn->real_escape_string($email));
  }else{
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: index.php?error=1");
  }
 }
  else{
    $email = $_POST['user'];
    $password = $_POST['pass'];
  
 
 // Consulta segura para evitar inyecciones SQL.
 $sql = sprintf("SELECT * FROM usuario WHERE correo_electronico='%s' AND password = '%s'", $conn->real_escape_string($email), $conn->real_escape_string($password));
  }
 // Obtengo los datos cargados en el formulario de login.
 
 
  
 $resultado = $conn->query($sql);
  
 // Verificando si el usuario existe en la base de datos.
 if($resultado->num_rows > 0){
   // Guardo en la sesión el email del usuario.
   $_SESSION['correo_electronico'] = $email;
    
   // Redirecciono al usuario a la página principal del sitio.
   header("HTTP/1.1 302 Moved Temporarily"); 
   header("Location: home.php"); 
 }else{
  header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: index.php?error=1");
 }
 
<?php
session_start();
// Datos para conectar a la base de datos.
$nombreServidor = "localhost";
$nombreUsuario = "root";
$passwordBaseDeDatos = "";
$nombreBaseDeDatos = "loscabesa";

// Crear conexión con la base de datos.
$conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
 
// Validar la conexión de base de datos.
if ($conn ->connect_error) {
  die("Connection failed: " . $conn ->connect_error);
} ?>

<?php 

if(isset($_SESSION['correo_electronico'])){

include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

    <head>
        <?php include("includes/head-tag-contents.php");?>
        <?php include("includes/navigation.php");?>
    </head>

    <body>
        <div class="container-fluid separatop">
            <form action="insertarpost.php" method="POST">
                <div class="row">
                    <div class="col-2">
                        <img class="img-fluid imguser" src="assets/perfil/boxeo2.jpg" />
                    </div>
                    <div class="col-10 d-flex">
                        <?php include("includes/quill.php");?>
                    </div>
                </div><br><br>
                    <div class="row">
                        <div class="col-sm-5  text-center">
                            <input id="publi" name="publi" type="text"></input>
                        </div>
                        <div  class="col-sm-5"></div>
                        <div class="col-sm-2 ">
                            <input class="bg-primary form-control-sm" type="submit" value="Enviar" onclick="JavaScript: if(quill.root.innerHTML!=' '){  document.getElementById('publi').value =quill.root.innerHTML;}">
                            </input>
                        </div>
                    </div>
            </form>
        </div>  
        <hr>
        <br>
            <?php
            $registros = mysqli_query($conn,"SELECT post FROM publicaciones order by id desc ")or die ("Problemas al realizar la consulta");
            
            while($reg = mysqli_fetch_array($registros)){
                $post2=$reg['post'];
                ?>
            <div class='row '>
                <div class='col-2'>
                    <img class='img-fluid imguser' src='assets/perfil/boxeo3.jpg' />
                </div>
                <div class='col-9 d-flex align-items-center'>
                    <?php echo "<p>".$post2.""."</p>";?>
                </div>
            </div>
                <div class="row">
                
                    <div class="col-md-4  text-center">
                        <p>

                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                    </div>
                </div>
            <br>
            <hr>
            <br>

        </div>
        <?php }
            mysqli_close($conn);
        ?>
        <br>
        </div>
    </body>
</html>   
<?php
} 
else {
    header("Location: index.php");
}
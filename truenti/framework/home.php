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
    <body class="home">
    
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
                            <input class="bg-primary form-control-sm" type="submit" value="Enviar" onclick="JavaScript: document.getElementById('publi').value =quill.root.innerHTML;">
                            </input>
                        </div>
                    </div>
            </form>
        </div>  
        <hr>
        <br>
            <?php
            $registros = mysqli_query($conn,"SELECT post, likes, id, dislikes FROM publicaciones order by id desc ")or die ("Problemas al realizar la consulta");
            
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
                
                    <div class="col-md-5 text-center">
                        <?php echo "".$reg['likes'];?>
                        <a class="like" href="megusta.php?n=si&id=<?php echo $reg['id'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>
                        </a>
                    </div>
                    <div class="col-md-5 text-center">
                    <?php echo "".$reg['dislikes'];?>
                    <a class="like" href="megusta.php?n=no&id=<?php echo $reg['id'];?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heartbreak-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8.931.586 7 3l1.5 4-2 3L8 15C22.534 5.396 13.757-2.21 8.931.586ZM7.358.77 5.5 3 7 7l-1.5 3 1.815 4.537C-6.533 4.96 2.685-2.467 7.358.77Z"/>
                        </svg>
                        </a>
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
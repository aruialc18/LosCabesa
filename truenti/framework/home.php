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
}

include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php");?>
    <?php include("includes/navigation.php");?>
</head>

<body>
<form action="insertarpost.php" method="POST">
    <div>
    
        <div class="container-fluid separatop">

            <div class="row">
                <div class="col-2">
                    <img class="img-fluid imguser" src="assets/perfil/boxeo2.jpg" />
                </div>
                
                    <div class="col-10 d-flex">
                    <?php include("includes/quill.php");?>
                    </div>
                    <div class="row">
                        <div class="col-sm-5  text-center">
                            <input id="publi" name="publi" type="text"></input>
                        </div>

                        <div  class="col-sm-5">
                        
                        </div>
                        <div class="col-sm-2 ">
                            <input class="bg-primary form-control-sm" type="submit" value="Enviar" onclick="JavaScript: document.getElementById('publi').value =quill.root.innerHTML;">
                            </input>
                        </div>
                    </div>
                </form>

            </div>

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

                <div class='col-10 d-flex align-items-center'>



                    <?php echo "<p>".$post2.""."</p>";?>



                </div>
                <div class="row">
                    <div class="col-md-5  text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-share" viewBox="0 0 16 16">
                            <path
                                d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-dots" viewBox="0 0 16 16">
                            <path
                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            <path
                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                        </svg>
                    </div>
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

    </div>

</body>

</html>
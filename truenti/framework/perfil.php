<?php

include("includes/a_config.php");
if (isset($_SESSION['correo_electronico'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("includes/head-tag-contents.php");?>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include("includes/navigation.php");?>
    <div class="container-fluid separatop">
        <div class="row">
            <div class="col-sm-4 text-center"><img src="../assets/perfil/boxeo1.jpg" class="imgsperfil">
            <br>
            <?php if (isset($_SESSION['correo_electronico']))  {
                 ?>
            <p><?php echo $_SESSION['correo_electronico']; ?><p>
            <?php }?>
            <p>XP:</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            
            <div class="col-sm-8"><h1>Progreso</h1>
                
                <p>Media</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p>Kilometros</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p>Pasos</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <p>Constancia</p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    

        <div class="row text-center">
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo2.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo3.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo4.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo5.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo6.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo7.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo8.jpg" class="imgsperfil">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo9.jpg" class="imgsperfil">
            </div>
        </div>
    </div>

    <h1 class="h1video">Video deporte motivacional</h1>
	<div class="d-flex justify-content-center">
		<div class="embed-responsive embed-responsive-16by9  w-75">
			<iframe class="embed-resposive-item" src="../assets/video/videos/deporte.mp4"></iframe>
		</div>
	</div>
	
<!--
    <div id="video-container">
		<video id="video" width="640" height="365">
		  <source src="../assets/videos/deporte.mp4" type="video/mp4">
		  <p>
		    Your browser doesn't support HTML5 video.
		    <a href="../assets/videos/deporte.mp4">Download</a> the video instead.
		  </p>
		</video>
		<div id="video-controls">
			<button type="button" id="play-pause" class="play">Play</button>
			<progress id="seek-bar" value="0" max="100"></progress>
			<button type="button" id="mute">Mute</button>
			<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
			<button type="button" id="full-screen">Full-Screen</button>
		</div>
	</div>

	<script src="../js/scripts.js"></script>-->
</body>
</html>
<?php
}else{
    header("Location: index.php");
}
?>
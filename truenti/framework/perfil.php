<?php

include("includes/a_config.php");

if (isset($_SESSION['correo_electronico'])){ 
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("includes/head-tag-contents.php");?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include("includes/navigation.php");?>
    <div class="container-fluid separatop">
        <div class="row">
            <div class="col-sm-4 text-center"><img src="../assets/perfil/boxeo1.jpg" class="imgsperfil" alt="">
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
                <img src="../assets/perfil/boxeo2.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo3.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo4.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo5.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo6.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo7.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo8.jpg" class="imgsperfil" alt="">
            </div>
            <div class="col-sm-3 separatop">
                <img src="../assets/perfil/boxeo9.jpg" class="imgsperfil" alt="">
            </div>
        </div>
    </div>

    <h1 class="h1video text-center separatop">Video deporte motivacional</h1>
	<div id="video-container" class="text-center">
		<video id="video" width="640" height="365">
		  <source src="deporte.mp4" type="video/mp4">
		  <p>
		    Your browser doesn't support HTML5 video.
		    <a href="deporte.mp4">Download</a> the video instead.
		  </p>
		</video>
		<div id="video-controls">
			<button type="button" id="play-pause" class="play"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
				<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
			  </svg><span class="sr-only">Play</span></button>
			<progress id="seek-bar" value="0" max="100"></progress>
			<button type="button" id="mute"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-volume-up-fill" viewBox="0 0 16 16">
				<path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
				<path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
				<path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06z"/>
			  </svg><span class="sr-only">Mute</span></button>
			<label>VolumeBar<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1"></label>
			<button type="button" id="full-screen"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fullscreen" viewBox="0 0 16 16">
				<path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
			  </svg><span class="sr-only">fullscreen</span></button>
		</div>
	</div>
	<script src="script.js"></script>
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
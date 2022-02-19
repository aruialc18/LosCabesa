<?php

include("includes/a_config.php");
if (isset($_SESSION['correo_electronico'])){ ?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<main>
    <section class="page-product" id="product">
        <div class="container-fluid separatop">
            <div class="row services">
                <div class="container col-md-4">
                    <h2>Entrenamiento Personal</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../assets/servicios/entrenamientopersonal.png" alt="Card image" style="width:100%">
                             <div class="card-body">
                                <h4 class="card-title">Servicio de Entrnamiento Personal</h4>
                                <p class="card-text">Contrata y/o apúntate a un servicio personalizado de entrenamiento en el que se asignará un entrenador.</p>
                                 <h4 class="card-title">29,99€/mes</h4>
                                <a href="#" class="btn btn-primary">Solicitar Servicio</a>
                            </div>
                    </div>      
                </div>
                <div class="container col-md-4">
                    <h2>Clases de Boxeo</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../assets/servicios/boxeo.png" alt="Card image" style="width:100%">
                             <div class="card-body">
                                <h4 class="card-title">Boxeo</h4>
                                <p class="card-text">Apúntate a las clases de Boxeo que se imparten de Lunes a Viernes en el gimnasio de Truenti Sport.</p>
                                 <h4 class="card-title">15€/mes</h4>
                                <a href="#" class="btn btn-primary">Apúntame</a>
                            </div>
                    </div>      
                </div>
                <div class="container col-md-4">
                    <h2>Clases de Yoga</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../assets/servicios/yoga.png" alt="Card image" style="width:100%">
                             <div class="card-body">
                                <h4 class="card-title">Yoga</h4>
                                <p class="card-text">Apúntate a las clases de Yoga que se imparten Lunes, Miércoles, Jueves, Viernes y Sábados en el gimnasio Truenti Sport.</p>
                                 <h4 class="card-title">15€/mes</h4>
                                <a href="#" class="btn btn-primary">Apúntame</a>
                            </div>
                    </div>      
                </div>
                <div class="container col-md-4">
                    <h2>Servicio de Dietas</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../assets/servicios/dieta.png" alt="Card image" style="width:100%">
                             <div class="card-body">
                                <h4 class="card-title">Servicio de Dietas</h4>
                                <p class="card-text">Contrata un servicio de dietista para encontrar el equilibrio entre salud, hábitos deportivos y dieta.</p>
                                 <h4 class="card-title">20€</h4>
                                <a href="#" class="btn btn-primary">Solicitar Servicio</a>
                            </div>
                    </div>      
                </div>
                <div class="container col-md-4">
                    <h2>Clases de Zumba</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../assets/servicios/zumba.png" alt="Card image" style="width:100%">
                             <div class="card-body">
                                <h4 class="card-title">Zumba</h4>
                                <p class="card-text">Apúntate a nuestras clases de zumba que estarán disponibles próximamente...</p>
                                 <h4 class="card-title">15€/mes</h4>
                                <a href="#" class="btn btn-primary">Apúntame</a>
                            </div>
                    </div>      
                </div>
                <div class="container col-md-4">
                    <h2>CrossFit</h2>
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="../assets/servicios/crossfit.png" alt="Card image" style="width:100%">
                             <div class="card-body">
                                <h4 class="card-title">CrossFit</h4>
                                <p class="card-text">Apúntate a las clases de CrossFit que imparte el Profesor Pablo Ángel de Lunes a Viernes de 21:00 a 22:30.</p>
                                 <h4 class="card-title">29,99€/mes</h4>
                                <a href="#" class="btn btn-primary">Apúntame</a>
                            </div>
                    </div>      
                </div>
            </div>
        </div>
    </section>
</main>



</body>
</html>
<?php
}else{
    header("Location: index.php");
}
?>
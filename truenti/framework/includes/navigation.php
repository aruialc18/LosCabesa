
<nav class="navbar navbar-expand-sm navbar-dark bg-black fixed-top text-uppercase " id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand"><img src="assets/truenti/logo3.png" style="width: 100px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav d-flex align-items-center justify-content-around flex-grow-1">
                <li class="nav-item"><a class="nav-link" href="home.php">Inicio</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">¿Quienes somos?</a></li>

                <li class="nav-item"><a class="nav-link" href="product.php">Compra Productos</a></li>

                <li class="nav-item"><a class="nav-link" href="games.php">Juegos</a></li>

                <li class="nav-item"><a class="nav-link" href="services.php">Servicios</a></li>
                <?php if (isset($_SESSION['correo_electronico']))  {
                    
                 ?>
                <li class="nav-item"><a class="nav-link " href="perfil.php"><?php echo $_SESSION['correo_electronico']; ?></a></li>
                <?php }?>
                
                <li class="nav-item"><a class="nav-link " href="index.php"><button type="button"
                            class="btn btn-primary">Cerrar Sesion</button></a></li>
            </ul>
        </div>
    </div>
</nav>
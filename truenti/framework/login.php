<!DOCTYPE html>
<html lang="en">
<head>
<?php include("includes/head-tag-contents.php");?>
</head>
<body>
    
            <div class="container-fluid" style="background-image: url(/assets/truenti/fondo2.png)">
                <div class="row justify-content-center">
                     <div class="col-md-6">
                        <img class="logo-login" src="/assets/truenti/logo.png">
                     </div>
                    <div class="col-md-6">
                        <form>
                            <input type="text" name="user" placeholder="Usuario"><br><br>
                            <input type="password" name="pass" placeholder="Contraseña"><br><br>
                            <input class="bg-secondary" type="submit" name="entrar" value="Entrar">
                         </form>
                     </div>
                </div>
             </div>
     

<?php include("includes/footer.php");?>
</body>
</html>
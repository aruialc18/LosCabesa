$caducidad = 60 * 60 * 24 * 30 + time();

if($_COOKIE["novedades"] == NULL){

setcookie("novedades", 1, $caducidad);

}

if ($_COOKIE["novedades"]) {

echo "¡Tienes un cupón de descuento del 25%!";

}
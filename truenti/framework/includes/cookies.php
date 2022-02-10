<?php session_start();

if ($_SESSION['cookie'] != 1) {

$advice = "<div style='text-align:center;top:0;position:fixed;width:100%;

z-index:1000;background-color:#F374A9;'>

TruentiSport© hace uso de la gestión de cookies para ofrecerte una mejor experiencia. <a href='' onclick='hide()'>[ Acepto ]</a>

</div>";

$_SESSION['cookie'] = 1;

}
<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/login.php":
			$CURRENT_PAGE = "login"; 
			$PAGE_TITLE = "Inicio de Sesión";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "contact"; 
			$PAGE_TITLE = "Sobre Nosotros";
			break;
		case "/product.php":
			$CURRENT_PAGE = "poduct"; 
			$PAGE_TITLE = "Productos y Servicios";
			break;
			case "/register.php":
				$CURRENT_PAGE = "register"; 
				$PAGE_TITLE = "Regístrate";
				break;
		default:
			$CURRENT_PAGE = "Login";
			$PAGE_TITLE = "Truenti";
	}
	//Include Google Client Library for PHP autoload file
	session_start();
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

if($google_client == null){
	header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: index.php?error=1");
}
//Set the OAuth 2.0 Client ID
$google_client->setClientId('74470804683-ngl75vk760od6dap34bpd7snjvduamb5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://'.$_SERVER['SERVER_NAME'].'/login.php');


$google_client->addScope('email');

$google_client->addScope('profile');


?>
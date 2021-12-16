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
			$PAGE_TITLE = "Productos y Servicios	";
			break;
			case "/register.php":
				$CURRENT_PAGE = "register"; 
				$PAGE_TITLE = "Regístrate";
				break;
		default:
			$CURRENT_PAGE = "Login";
			$PAGE_TITLE = "Truenti";
	}
?>
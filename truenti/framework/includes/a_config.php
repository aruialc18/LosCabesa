<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/index.php":
			$CURRENT_PAGE = "Index"; 
			$PAGE_TITLE = "Portfolio";
			break;
		case "/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/login.php":
			$CURRENT_PAGE = "Login"; 
			$PAGE_TITLE = "Truenti";
			break;
		default:
			$CURRENT_PAGE = "Login";
			$PAGE_TITLE = "Truenti";
	}
?>
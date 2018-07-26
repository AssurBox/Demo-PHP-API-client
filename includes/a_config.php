<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		case "/template/systemstatus.php":
			$CURRENT_PAGE = "SystemStatus"; 
			$PAGE_TITLE = "Check system";
			break;	
		case "/template/requestcard.php":
			$CURRENT_PAGE = "requestcard"; 
			$PAGE_TITLE = "Request new green card";
			break;	
		case "/template/requestlist.php":
			$CURRENT_PAGE = "requestlist"; 
			$PAGE_TITLE = "Requests list";
			break;	
			
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to this demo!";
	}
?>
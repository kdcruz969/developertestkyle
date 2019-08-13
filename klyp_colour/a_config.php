<!-- PHP for handling page links -->

<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "red.php":
			$CURRENT_PAGE = "Red"; 
			$PAGE_TITLE = "Red Titles";
			break;
		case "blue.php":
			$CURRENT_PAGE = "Blue"; 
			$PAGE_TITLE = "Blue Titles";
			break;
		case "green.php":
			$CURRENT_PAGE = "Green"; 
			$PAGE_TITLE = "Green Titles";
			break;
		case "yellow.php":
			$CURRENT_PAGE = "Yellow"; 
			$PAGE_TITLE = "Yellow Titles";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Klyp OMDb API";
	}

<?php
	
	//php code goes here
	session_start();
	unset($_SESSION["userID"]);
	
	$location = $_SESSION["page"];
	
	if($location == 'adminverification.php'){
		$location = "location: index.php";
	}else{
		$location = "Location: ".$location;
	}

	header($location);
	exit();

?>
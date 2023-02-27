<?php
	
	//php code goes here
	session_start();
	unset($_SESSION["userID"]);
	
	$location = $_SESSION["page"];
	$location = "Location: ".$location;
	

	header($location);
	exit();

?>
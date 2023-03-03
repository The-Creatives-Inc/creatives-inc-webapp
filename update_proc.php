<?php 

session_start();
//check if update form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['submitted'])) 
{
	require_once('configuration.php');
	//collection form data
	$signname =  $_POST['artist-name'];
	$account =  $_POST['account'];
	$number = $_POST['number'];
	$website = $_POST['website'];
	$imagedir = $_POST['image'];
	$email = $_POST['email'];
	$uid = $_SESSION['userID'];

	$sql1 = "UPDATE users SET phone_number = '$number', email = '$email', image = '$imagedir', account_number = '$account' WHERE userID = $uid";
	$sql2 = "UPDATE artist SET website = '$website', signature_name = '$signname' WHERE artistID = $uid";

	// check if query worked
	if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
	  
		//redirect to homepage
		header("Location: individualartist.php?aid=".$uid);
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: index.php");
	exit();
}



?>
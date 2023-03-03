<?php 

session_start();
//check if update form was submited
//by checking if the submit button element name was sent as part of the request
define("SAVED_DIRECTORY", "images/"); 
$allowed_extensions = array("jpeg", "jpg", "png");

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
	$img = $_FILES['myfile'];
  $uploaded_file_name = $_FILES['myfile']['name'];
  $uploaded_file_size = $_FILES['myfile']['size'];
  $uploaded_file_tmp  = $_FILES['myfile']['tmp_name'];
  $uploaded_file_type = $_FILES['myfile']['type'];
  
  $file_compositions = explode('.', $uploaded_file_name);
  $file_ext = strtolower(end($file_compositions));

  // if(in_array($file_ext, $allowed_extensions) === false){
  //       $_SESSION['ext-error'] = "Extension not allowed";
// 		header("Location: uploadar.php?aid=".$aid);
  //       exit();
  //   }

   $sub_name = $aid.'-'.$uploaded_file_name;
   $saved_file_name = "images/".$sub_name;
    

	$sql1 = "UPDATE users SET phone_number = '$number', email = '$email', image = '$saved_file_name', account_number = '$account' WHERE userID = $uid";
	$sql2 = "UPDATE artist SET website = '$website', signature_name = '$signname' WHERE artistID = $uid";

	// check if query worked
	if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
	  	 move_uploaded_file($uploaded_file_tmp, SAVED_DIRECTORY.$sub_name);
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
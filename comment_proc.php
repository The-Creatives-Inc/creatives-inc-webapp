
<?php

if (isset($_POST['comment-submit'])) 
{
    session_start();
    
  //collection form data
      $artworkID = $_POST['uid'];
      $comment = $_POST['comment'];
      $id = $_SESSION["userID"];
      
      if(empty($_SESSION['userID'])){
        $_SESSION['wcomment'] = "Login first";
        header("Location: individualartwork.php?uid=".$artworkID);
        exit();
      }
      if (!$comment){
        $_SESSION['wcomment'] = "Comment is empty";
        header("Location: individualartwork.php?uid=".$artworkID);
        exit();
      }
      
    
    // database connection parameters
    $servername = "localhost";
    $username = "root";
    $db_password = "creativeS@23";
    $dbname = "creative_db";

      // Create connection
      $conn = new mysqli($servername, $username, $db_password, $dbname);
      
      // Check connection
      if ($conn->connect_error) {
        //stop executing the code and echo error
        echo ("Connection failed: " . $conn->connect_error);
    
        header("Location: individualartwork.php?uid=".$artworkID);
        exit();
    
      }

  // Prepare a select statement
  // $sql = "INSERT INTO user_table (user_name, user_pass, user_role, user_status)
	// VALUES ('$user_name', '$encrypted_pass', '1', '1')";
    $sql = "INSERT INTO comment (artworkID, userID, commentMessage) VALUES ('$artworkID', '$id', '$comment')";
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        $_SESSION['comment'] = "Comment added successfully";
		header("Location: individualartwork.php?uid=".$artworkID);
        exit();

	} else {
		$_SESSION['wcomment'] = "Encountered an error";
		header("Location: individualartwork.php?uid=".$artworkID);
        exit();
	}

	//close database connection
	$conn->close();
} 
else {
    // redirect to login page
    header("Location: login.php");
    exit();
}
 
?>
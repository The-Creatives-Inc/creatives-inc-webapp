
<?php
if (isset($_GET['answer'])) 
{
    session_start();
    
  //collection form data
      $answer = $_GET['answer'];
      $artid = $_GET['artid'];
      
    // database connection parameters
    // $servername = "localhost";
    // $username = "root";
    // $db_password = "creativeS@23";
    // $dbname = "creative_db";
    
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "creative_db";

      // Create connection
      $conn = new mysqli($servername, $username, $db_password, $dbname);
      
      // Check connection
      if ($conn->connect_error) {
        //stop executing the code and echo error
        echo ("Connection failed: " . $conn->connect_error);
    
        header("Location: adminverification.php");
        exit();
    
      }

    $sql = "UPDATE artwork SET status='$answer' WHERE artworkID='$artid'";
    $result = $conn->query($sql);
    
    if ($result === TRUE) {
        $_SESSION['done'] = "successfully updated";
		header("Location: adminverification.php");
        exit();

	} else {
		$_SESSION['wrong'] = "Encountered an error";
		header("Location: adminverification.php");
        exit();
	}

	//close database connection
	$conn->close();
} 
else {
    // redirect to login page
    header("Location: adminverification.php");
    exit();
}
 
?>
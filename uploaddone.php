
<?php
session_start();
define("SAVED_DIRECTORY", "images/"); 
$allowed_extensions = array("jpeg", "jpg", "png");

$aid = $_POST["aid"];

if (isset($_POST['button'])) 
{

  require_once("configuration.php");
    
  //collection form data
      $title = $_POST['title'];
      $hashtag = $_POST['hashtag'];
      $desc = $_POST["desc"];
      $img = $_FILES['myfile'];
      $uploaded_file_name = $_FILES['myfile']['name'];
      $uploaded_file_size = $_FILES['myfile']['size'];
      $uploaded_file_tmp  = $_FILES['myfile']['tmp_name'];
      $uploaded_file_type = $_FILES['myfile']['type'];
      
      $file_compositions = explode('.', $uploaded_file_name);
      $file_ext = strtolower(end($file_compositions));
           

      if (!$title || !$desc || !$img){
        $_SESSION['wcomment'] = "one or more fields is/are empty";
        header("Location: uploadart.php?aid=".$aid);
        exit();
      }
      
      if(in_array($file_ext, $allowed_extensions) === false){
        $_SESSION['wcomment'] = "Extension not allowed";
		header("Location: uploadart.php?aid=".$aid);
        exit();
      }
      

  // Prepare a select statement

    $sql1 = "INSERT INTO artwork (artworkTitle, artistID, fieldID, artworkDescription, quantity, price, `status`) 
    VALUES ('$title', '$aid', 2, '$desc', 0, 0, 0)";
    
    $result1 = $conn->query($sql1);
    $artworkID = $conn->insert_id;
    $sub_name = $aid.'-'.$uploaded_file_name;
    $saved_file_name = "images/".$sub_name;
    
    $sql2 = "INSERT INTO link (linkID, link) VALUES ('$artworkID', '$saved_file_name')";
    
    $sql3 = "INSERT INTO artworklikes (artworkID, numLikes) VALUES ('$artworkID', 0)";
    
    
    
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    
    if ($result1 === TRUE && $result2 === TRUE && $result3 === TRUE) {
        $_SESSION['comment'] = "Artwork added successfully";
        move_uploaded_file($uploaded_file_tmp, SAVED_DIRECTORY.$sub_name);
        
		header("Location: individualartist.php?aid=".$aid);
        exit();

	} else {
		$_SESSION['wcomment'] = "Encountered an error";
		header("Location: uploadart.php?aid=".$aid);
        exit();
	}

	//close database connection
	$conn->close();
} 
else {
    // redirect to login page
    $location = 'individualartist.php?aid='.$aid;
    header("Location: ".$location);
    exit();
}
 
?>
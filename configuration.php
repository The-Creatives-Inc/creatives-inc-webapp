<?php
    // $servername = "localhost";
    // $username = "root";
    // $db_password = "";
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
  
      header("Location: signup.php");
    }
?>
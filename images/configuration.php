<?php
    // $servername = "localhost";
    // $username = "root";
    // $db_password = "";
    // $dbname = "creative_db";

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "creativeS@23";
    $dbname = "creative_db";
    
    // $servername = "18.168.199.7";
    // $username = "'ubuntu'@'172.31.9.192'";
    // $db_password = "creatives@23";
    // $dbname = "creative_db";
  
    // Create connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      //stop executing the code and echo error
      echo ("Connection failed: " . $conn->connect_error);
  
      header("Location: signup.php");
    }
?>
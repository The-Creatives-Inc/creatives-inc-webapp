<?php
session_start();    
  

// Checking first page values for empty,If it finds any blank field then redirected to first page.

if (isset($_POST['end'])) {
  if (empty($_POST['interest'])) {
     $_SESSION['error_3'] = "Please select one area of interest";
     header ("Location: signup-final.php");
  } else {
    
      //database connection parameters
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
    
        header("Location: signup-final.php");
    
      }
       
      //collect data from the sessions
      $phone_number = $_SESSION['post']['number'];
      $email = $_SESSION['post']['email'];
      $address = $_SESSION['post']['address'];
      $image = $_SESSION['post']['image'] == "" ? $_SESSION['post']['image'] : null;
      $password = $_SESSION['post']['password'];
      $account = $_SESSION['post']['account'] == "" ? $_SESSION['post']['account'] : null;
      $country = explode("+", $_SESSION['post']['country'])[0];
      
      $fieldID = settype($_SESSION['post']['field'], "Integer");
     
      $sql = "INSERT INTO users(phone_number, email, `address`, `image`, `passcode`, account_number, countryID, fieldID)
      VALUES ('$phone_number', '$email', '$address', '$image', '$password', '$account', '$country', '$fieldID')";
  
      // check if query worked
      if ($conn->query($sql) === TRUE) {
        
          //redirect to homepage
          session_unset();
          $_SESSION['success'] = "Registration Successfully";
          header("Location: login.php");
          exit();
  
      } else {
          //echo error but continue executing the code to close the session
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      //close database connection
      $conn->close();
  
  }

} else {
  header("location:signup-final.php");//redirecting to first page
}
?>
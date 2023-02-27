
<?php

if (isset($_POST['login'])) 
{
  //collection form data
  $userEmail =  $_POST['email'];
  $password = $_POST['password'];

  // database connection parameters
  // $servername = "18.168.199.7";
  // $username = "ubuntu";
  // $db_password = "creatives@23";
  // $dbname = "creative_db";

  // Create connection
  $conn = new mysqli($servername, $username, $db_password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    //stop executing the code and echo error
    echo ("Connection failed: " . $conn->connect_error);

    header("Location: login.php");

  }

  // Prepare a select statement
  $sql = "SELECT userID, email, passcode FROM users WHERE email = ?";
 

  if($stmt = mysqli_prepare($conn, $sql)){
      
      mysqli_stmt_bind_param($stmt, "s", $userEmail);
              
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          // Store result
          mysqli_stmt_store_result($stmt);
          
          // Check if user exists, if yes then verify password
          if(mysqli_stmt_num_rows($stmt) == 1){                    
              // Bind result variables
              mysqli_stmt_bind_result($stmt, $userID, $email, $passcode);
              if(mysqli_stmt_fetch($stmt)){
                  // if(password_verify($curr_user_pass, $user_pass)){
                if($password == $passcode){

                  //save session variables
                  session_start();
                  $_SESSION["userID"] = $userID;
              
                    header("Location: index.php");
                      // Password is correct, so start a new session
        
                  } else {
                    
                    header ("location: login.php");
                  }
            } else {
          //redirect to login page
          header("Location: login.php");
          exit();
        }
          } else {
            // redirect to login page
            header("Location: login.php");
            exit();
      }
        } else {
          // redirect to login page
          header("Location: login.php");
          exit();
        }
    } else {
      
      // redirect to login page
      header("Location: login.php");
      exit();
  }

} else {
    // redirect to login page
    header("Location: login.php");
    exit();
}
 
?>

<?php

if (isset($_POST['login'])) 
{
  //collection form data
  $userEmail =  $_POST['email'];
  $password = $_POST['password'];
  echo("connected");


  // database connection parameters
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "creativeS@23";
  $dbname = "creative_db";
  
    // // database connection parameters
    // $servername = "localhost";
    // $username = "root";
    // $db_password = "";
    // $dbname = "creative_db";

  // Create connection
  $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
  mysql_select_db($dbname) or die("Could not open the database '$dbname'");
  // $conn = new mysqli($servername, $username, $db_password, $dbname);

  echo("connected");
  // Check connection
  if ($conn->connect_error) {
    //stop executing the code and echo error
    echo ("Connection failed: " . $conn->connect_error);

    header("Location: login.php");

  }

  // Prepare a select statement
  $sql = "SELECT userID, email, passcode, isAdmin FROM users WHERE email = ?";
 

  if($stmt = mysqli_prepare($conn, $sql)){
      
      mysqli_stmt_bind_param($stmt, "s", $userEmail);
              
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          // Store result
          mysqli_stmt_store_result($stmt);
          
          // Check if user exists, if yes then verify password
          if(mysqli_stmt_num_rows($stmt) == 1){                    
              // Bind result variables
              mysqli_stmt_bind_result($stmt, $userID, $email, $passcode, $isAdmin);
              if(mysqli_stmt_fetch($stmt)){
                  // if(password_verify($curr_user_pass, $user_pass)){
                if($password == $passcode){

                  //save session variables
                  session_start();
                  $_SESSION["userID"] = $userID;
                  $_SESSION["isAdmin"] = $isAdmin;
                  
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
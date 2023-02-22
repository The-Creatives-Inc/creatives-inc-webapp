//To be finished after the database is populated

<?php
session_start();
if (isset($_POST['login'])) 
{
  //collection form data
  $user_name =  $_POST['email'];
  $curr_user_pass = $_POST['password'];

  //database connection parameters
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "creative_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    //stop executing the code and echo error
    die("Connection failed: " . $conn->connect_error);
  }

  // Check if username is empty
  if(empty(trim($user_name))){
      echo "Please enter username.";
      //redirect to login page
    header("Location: login.php");
    exit();
  } 
      
  // Check if password is empty
  if(empty(trim($curr_user_pass))){
      echo "Please enter your password.";
      //redirect to login page
    header("Location: login.php");
    exit();
  }

  // Prepare a select statement
  $sql = "SELECT  user_id, user_name, user_pass, user_role, user_status FROM user_table WHERE user_name = ?";

  if($stmt = mysqli_prepare($conn, $sql)){
      
      mysqli_stmt_bind_param($stmt, "s", $user_name);
              
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          // Store result
          mysqli_stmt_store_result($stmt);
          
          // Check if user exists, if yes then verify password
          if(mysqli_stmt_num_rows($stmt) == 1){                    
              // Bind result variables
              mysqli_stmt_bind_result($stmt, $user_id, $user_name, $user_pass, $user_role, $user_status);
              if(mysqli_stmt_fetch($stmt)){
                  if(password_verify($curr_user_pass, $user_pass)){

                    if ($user_status == 2) {

                      // Redirect user to inactive page
                        header("location: inactive.php");
                        exit();

                    } elseif ($user_status == 1) {

                      //start session
                      session_start();


                      //save session variables
                      $_SESSION["user_id"] = $user_id;
              $_SESSION["user_name"] = $user_name;
              $_SESSION["user_role"] = $user_role;

              if ($user_role == 1) {
                // Redirect user to admin page
                          header("location: adminindex.php");
                          exit();
              } elseif ($user_role == 2){
                // Redirect user to standard index page
                          header("location: standardindex.php");
                          exit();
              }
                    }
                      // Password is correct, so start a new session
        
                  } else {
                    echo "Incorrect Username and Password";
                    header ("location: login.php");
                  }
            } else {
          //redirect to login page
          header("Location: login.php");
          exit();
        }
          } else {
        //redirect to login page
        header("Location: login.php");
        exit();
      }
        } else {
      //redirect to login page
      header("Location: login.php");
      exit();
    }
    } else {
    //redirect to login page
    header("Location: login.php");
    exit();
  }

} else {
  //redirect to login page
  header("Location: login.php");
  exit();
}
 
?>
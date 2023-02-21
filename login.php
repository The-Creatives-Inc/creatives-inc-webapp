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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background: #000000;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }
        .nav {
            margin-top: 6%;
            border-radius: 0;
            background-color: black;
            color: white;
            border-color: white;
            text-align: center;
            justify-content: center;
          }
          
          .main-nav-info{
            text-align: center;
            font-family: 'Montserrat', sans-serif;
          }

          .nav a{
              padding-bottom: 10px;
              margin-left: 15px;
              position: relative;
              text-decoration: none;
              color: white;
          }
          
          form{
            text-align: center;
            margin-left: 35%;
            margin-right: 35%;
          }
         
          label{
            margin-top: 3%;
          }
         
          input{
            margin-top: 3%;
          }

          button{
            background-color: white;
            padding-left: 35%;
            padding-right: 35%;
            padding-top: 1%;
            padding-bottom: 1%;
            border-radius: 10px;           
          }
          
          #popUpYes {
            background-color: rgb(255, 255, 255);
            color: #000000;
          }
          
          #popUpYes:hover {
            background-color: rgb(0, 0, 0);
            color: white;
          }

          #exampleInputEmail1{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }

          #exampleInputPassword1{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }
          
    </style>

    <title>Login</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>    
    </nav>
    </div>

    <div class="main-nav-info">
            <h4>New? Create an account <a href="" style="color: white; text-decoration:underline; font-family: 'Croissant One', cursive;">here</a></h4>    
    </div>



    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <div class="form-group">
          <p class="help-block"> By using The Creative, you agree to our Privacy Policy and Terms of Use.</p>
        </div>
        <button type="submit" name="login" id="popUpYes">Login</button>
    </form>
      
      




      </div>
    </body>
  </html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
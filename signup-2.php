<?php
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.

if (isset($_POST['next'])){
     if (empty($_POST['email'])
     || empty($_POST['password'])
     || empty($_POST['confirm-password'])
     || empty($_POST['user-type'])){ 

     // Setting error message
         $_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
         header("location: signup.php"); // Redirecting to first page

     } else {
         // Sanitizing email field to remove unwanted characters.
         $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

         // After sanitization Validation is performed.
         if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

             if (($_POST['password']) === ($_POST['confirm-password'])) {
                foreach ($_POST as $key => $value) {
                    $_SESSION['post'][$key] = $value;
                }
              } else {

                 $_SESSION['error'] = "Password does not match with Confirm Password.";
                 header("location: signup.php"); //redirecting to first page
             }
        } else {
             $_SESSION['error'] = "Invalid Email Address";
             header("location: signup.php");//redirecting to first page
        }
     }
} else {
    if (empty($_SESSION['error_2'])) {
    header("location:signup.php");//redirecting to first page
 }
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
            margin-top: 1%;
          }
         
          input{
            margin-top: 1%;
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

    <title>Sign Up</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>    
    </nav>
    </div>

    <div class="main-nav-info">
            <h4>Already have an account? <a href="" style="color: white; text-decoration:underline; font-family: 'Croissant One', cursive;">sign in</a></h4>    
    </div>



    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Email">
          </div>  
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>  
          <div class="form-group">
            <p class="help-block"><input type="checkbox"> By using The Creative, you agree to our Privacy Policy and Terms of Use.</p>
          </div>
          <div class="form-group">
            <p class="help-block">
                <input type="checkbox">Artist 
                <input type="checkbox">Viewer 
                <input type="checkbox"> Promoter
            </p>
          </div>    
        <button type="submit" id="popUpYes">Submit</button>
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
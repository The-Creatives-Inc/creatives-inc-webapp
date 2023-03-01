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

        //  $passwordRegex = '/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/';
        $passwordRegex = '/^[0-9]{3}/';      

         $isPassValid = preg_match($passwordRegex, $_POST['password']);


         // After sanitization Validation is performed.
         if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        } else {
             $_SESSION['error'] = "Invalid Email Address";
             header("location: signup.php");//redirecting to first page
        }

        if ($isPassValid) {

            if (($_POST['password']) === ($_POST['confirm-password'])) {
                foreach ($_POST as $key => $value) {
                    $_SESSION['post'][$key] = $value;
                }
                
                $_SESSION['post']['password'] = password_hash($_SESSION['post']['password'], PASSWORD_DEFAULT);
              } else {

                 $_SESSION['error'] = "Password does not match with Confirm Password.";
                 header("location: signup.php"); //redirecting to first page
             }
        } else {

            $_SESSION['error'] = "Invalid Password";
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
            margin-top: 3%;
            margin-bottom: 3%;
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
            cursor: pointer;
            transition: all 0.6s ease;
          }
          
          #popUpYes:hover {
            background-color: rgb(0, 0, 0);
            color: white;
          }

          #InputFirstName,#InputLastName, #InputPassword1, #InputPhone, #InputAccount, #InputDate{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }
          
          #upload{
            background-color: #000000;
            border-color: white;
          }


    </style>

    <title>Sign Up</title>
  </head>
  <body>
  <h1></h1>
    <div class="main-nav">
        <h4><a href="index.php" style="color: white; font-family: 'Croissant One', cursive;">X</a></h4>
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>  
        </nav>
    </div>
    <h1></h1>

    <div class="main-nav-info">
            <h4>Few steps away from becoming part of this space ... </h4>    
    </div>

    <?php
        if ($_SESSION['post']['user-type'] == 1) {
         echo ("<form action='signup-final.php' method='POST'>");
        } else {
          echo ("<form action='signup-artist.php' method='POST'>");
        }
        
    ?>
     <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-circle mb-3" style="width: 110%;" alt="Avatar" />
        </div>
          <div class="col-md-6">
                <div class="form-group">
                
                    <div class="d-flex justify-content-center">
                        <div class="btn btn-primary btn-rounded" id="upload">
                            <label class="form-label text-white m-1" for="customFile1"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                              </svg>  Upload Image  </label>
                            <input type="file" class="form-control d-none" id="customFile1" />
                        </div>
                    </div>
                
                </div>  
         </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputEmail1">Firstname</label>
                    <input type="name" class="form-control" id="InputFirstName" placeholder="Firstname">
                </div>  
        </div>
            <div class="col-md-6">
                  <div class="form-group">
                      <label for="">Lastname</label>
                      <input type="name" class="form-control" id="InputLastName" placeholder="Lastname">
                  </div>  
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="phone" class="form-control" id="InputPhone" placeholder="+48 999-999-99" data-mdb-input-mask="+48 999-999-999">
                </div>  
        </div>
            <div class="col-md-6">
                  <div class="form-group">
                      <label for="">AccountNo</label>
                      <input type="text" class="form-control" id="InputAccount" placeholder="AccountNo">
                  </div>  
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">DOB</label>
                    <input type="date" class="form-control" id="InputDate">
                </div>  
            </div>
        </div>
        <button type="submit" id="popUpYes" style="margin-top: 8%;">Move Ahead</button>
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
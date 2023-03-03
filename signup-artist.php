<?php 
  session_start();

  if (isset($_POST['move'])) {
    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['number']) || empty($_POST['account']) || empty($_POST['dob']) || empty($_POST['country'])) {
       $_SESSION['error_2'] = "Mandatory fields are missing please fill it again.";
    } else {
    
      foreach ($_POST as $key => $value) { 
        $_SESSION['post'][$key] = $value;
      }
    } 
  } else {
    if(empty($_SESSION['error_3'])) {
      session_unset();
      header("location:signup_ind.php");
    }//redirecting to first page
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

          .center {
            margin: 0 auto;
            width: 100%;
          }
          form {
            margin: 0 auto;
            width: 100%; 
          }
          
          label{
            margin-top: 1%;
            justify-content: left; !important;
           
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
          .form-inline {
            margin-left: 0;
          }
          
          #popUpYes {
            background-color: rgb(255, 255, 255);
            color: #000000;
            text-align: center;
            cursor: pointer;
            transition: all 0.6s ease;
          }
          
          #popUpYes:hover {
            background-color: rgb(0, 0, 0);
            color: white;
          }

          #artist-name, #address, #gender-select, #website, #account-num {
            background-color: black;
            color: white;
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
  
    <div class="main-nav">
        <nav class="nav">
            
    </nav>
    </div>

    <div class="main-nav-info">
            <p>Last Stop ...</p>    
    </div>




      <div class="col-md-4 col-md-offset-4 center">

        <form class="row g-3" action="signup-final.php" method="POST">
          <div class="col-md-8">
            <label for="signature-name" class="form-label">Artist Name</label>
          <input type="text" class="form-control" id="artist-name" name="artist-name" placeholder="theAtarist">
          </div>
          <div class="col-md-4">
            <label for="gender-select">Gender</label>
            <select name="gender" class="form-select" id="gender-select">
              <option value="" disabled selected hidden>Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
          <!-- <div class="col-12">
            <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1 University Ave, Ashesi" name="address">
          </div> -->
          <div class="col-12">
           <label for="website">Website</label>
            <input type="text" class="form-control" id="website" name="website" placeholder="www.example.com">
          </div>
          <div class="col-12">
            <div class="form-check">
              <label class="form-check-label" for="gridCheck">
                <p class="help-block" style="font-size: 10px;">
               <em>By using The Creative, you agree to our Privacy Policy and Terms of Use.</em></p>
              </label>
            </div>
          </div>
          <div class="col-12 text-center">
             <button type="submit" id="popUpYes" name="next">Finally</button>
          </div>
        </form>

        
      </div>
      
      
      
    </body>
  </html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   
  </body>
</html>
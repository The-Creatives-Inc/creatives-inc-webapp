<?php
  session_start(); // Session starts here.
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
            cursor: pointer;
            transition: all 0.6s ease;
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

          #exampleInputPassword1, #exampleInputPassword2{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }
          .help-block {
            font-size: 10px;
          }
          
    </style>

    <title>Sign Up</title>
  </head>
  <body>
    
    <h1></h1>
    <div class="main-nav">
    <h4 style='text-align: right'><a href="index.php" style="color: white; font-family: 'Croissant One', cursive; text-decoration: none;">X</a></h4>
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>    
    </nav>
    </div>

    <div class="main-nav-info">
            <h4>Already have an account? <a href="" style="color: white; text-decoration:underline; font-family: 'Croissant One', cursive;">sign in</a></h4>    
    </div>

    <!--- Catching errors PHP --->
    <span id="error">

         <!---- Initializing Session for errors --->
         <?php
             if (!empty($_SESSION['error'])) {
              echo ("<p style='color: red; text-align: center;'>".$_SESSION['error']."</p>");
              unset($_SESSION['error']);
             }
         ?>

    </span>



    <form action="signup_com.php" method="POST" id="form-id">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="confirm-password" placeholder="Password">
          </div>
          <p id="error-message"></p>  
          <div class="form-group">
            <p class="help-block">
              <input type="checkbox" name="policy" id="accept"> By using The Creative, you agree to our Privacy Policy and Terms of Use.</p>
          </div>
          <div class="form-group">
            <p class="help-block">
              Select Your Role: &nbsp
              <select name="user-type" id="select">
                <option value="1">Individual Viewer</option>
                <option value="3">Individual Artist</option>
                <option value="2">Company Artist</option>
                <option value="4" selected>Company Viewer</option>
              </select>
            </p>
          </div>    
        <button type="submit" id="popUpYes" name="next" disabled>Next</button>
      </form>

      </div>
      <script type="text/javascript">
        const acceptBox = document.getElementById("accept");
        const btn = document.getElementById("popUpYes");
        const userSelected = document.getElementById("select");
        let userValue = userSelected.value;

        acceptBox.addEventListener("change", (e) => {
          e.preventDefault();
          if(acceptBox.checked) {
            btn.removeAttribute("disabled");
          } else {
            btn.disabled = "disabled";
          }

        })


       userSelected.addEventListener("click", (e) => {
          e.preventDefault();
          if (userSelected.value != userValue) {
            userValue = userSelected.value;
            document.getElementById("form-id").action = parseInt(userValue)%2 != 0 ? "signup_ind.php" : "signup_com.php";
          }
        })
  
      </script>
    </body>
  </html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

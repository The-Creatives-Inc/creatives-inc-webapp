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
            margin: auto 15%;

          }
          
          #popUpYes:hover {
            background-color: rgb(0, 0, 0);
            color: white;
          }

          .form-control{
            border-radius: 10px;
            background-color: black;
            color: white;
          }
          
          h4{
            text-align: right;
            margin-right: 20%;
          }
          
          form button#popUpYes{
            text-align: center;
            justify-items: center;
            padding-left: 20%;
            padding-right: 20%;
          }
          

          #country{
            display: block;
            margin-top: 7%;
            margin-bottom: 2%;
          }
          
          #code{
            display: inline;
            width: 20%;
            border: none;
            background-color: black;
          }
          
          #number{
            display: inline;
            width: 75%;
          }
          
          .container {
            align-items: center;
            justify-content: center;
          }
    </style>

    <title>Sign Up</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
    <h4><a href="signup.php" style="color: white; font-family: 'Croissant One', cursive;">X</a></h4>
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>  
        </nav>
    </div>
    
    <span id="error">

<!---- Initializing Session for errors --->
<?php
    if (!empty($_SESSION['error_2'])) {
     echo ("<p style='color: red; text-align: center;'>".$_SESSION['error_2']."</p>");
     unset($_SESSION['error_2']);
    }
?>

</span>

    <form action="signup-final.php" method="POST">
        <div class="form-group">
            <label for="name">Organization name</label>
            <input type="text" name="org-name" class="form-control" placeholder="">
        </div>  
        <div class="form-group">
          <label for="desc">Description</label>
          <input type="text" class="form-control" name="org-description" placeholder="">
        </div>
        <div class="form-group">
          <label for="desc">Account</label>
          <input type="text" class="form-control" name="account" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Add image</label>
          <input type="file" class="form-control" accept="image/*" name="image" placeholder="Select image">
        </div> 
        <div class="form-group">

          <select name="country" id="country">
            <option value="dummy" selected disabled>Select country</option>
            <?php
                require_once('configuration.php');
                
                $query = "SELECT countryID, country_code, country_name FROM country";
                $result = $conn->query($query);
                
                if($result->num_rows > 0){
                    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
                
                foreach ($options as $option){
            ?>
            <option value="<?= $option['countryID']."+".$option['country_code']; ?>"><?= $option['country_name']; ?> </option>
            <?php
               }
            ?>               
           
          </select>
        </div> 
        <div class="form-group">
          <input id="code" class="form-control" type="text" value="" readonly>
          <input id="number" class="form-control" name="number" type="text" value="">
        </div>
        <div class="form-group float-none">
          <label for="address">Address</label>
          <input type="address" class="form-control" name="address" placeholder="">
        </div> 
           
        <button type="submit" id="popUpYes" name="com-submit">Almost There</button>
      </form>

      </div>
      <script>
        const userSelected = document.getElementById("country");
        
        
        userSelected.addEventListener("change", (e) => {
          e.preventDefault();
          
          if (userSelected.value != "dummy") {
              
              let userValue = userSelected.value.split("+")[1];
              document.getElementById("code").value = "+" + userValue;
          }
          
        })
      
      </script>

      </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

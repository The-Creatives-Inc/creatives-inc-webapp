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

         $passwordRegex = '/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/';

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

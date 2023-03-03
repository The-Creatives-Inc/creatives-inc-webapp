<?php
session_start();    
  

// Checking first page values for empty,If it finds any blank field then redirected to first page.

if (isset($_POST['end'])) {
  if (empty($_POST['interest'])) {
     $_SESSION['error_3'] = "Please select one area of interest";
     header ("Location: signup-final.php");
  } else {
  
      require_once("configuration.php");
       
      //collect data from the sessions
      $phone_number = $_SESSION['post']['number'];
      $email = $_SESSION['post']['email'];
      $image = $_SESSION['post']['image'] == "" ? $_SESSION['post']['image'] : null;
      $password = $_SESSION['post']['password'];
      $account = $_SESSION['post']['account'];
      $country = explode("+", $_SESSION['post']['country'])[0];
      
      $fieldID = $_POST['interest'];
     
      $sql = "INSERT INTO users(phone_number, email, `image`, `passcode`, account_number, countryID, fieldID)
      VALUES ('$phone_number', '$email', '$image', '$password', '$account', '$country', '$fieldID')";
  
      // check if query worked
      if ($conn->query($sql) === TRUE) {

        $last_id = $conn->insert_id;


        if ($_SESSION['post']['user-type'] == 1) {

          $firstname = $_SESSION['post']['firstname'];
          $lastname = $_SESSION['post']['lastname'];
          $gender = $_SESSION['post']['gender'] == "" ? "-" : $_SESSION['post']['gender'];
          $dob = $_SESSION['post']['dob'];

          $sql1 = "INSERT INTO visitor(visitorID) VALUES ('$last_id');";
          $conn->query($sql1);
          $sql2 = "INSERT INTO individual_visitor VALUES ('$last_id', '$firstname', '$lastname', '$gender', '$dob');";
          $conn->query($sql2);

        }

        if ($_SESSION['post']['user-type'] == 3) {

          $firstname = $_SESSION['post']['firstname'];
          $lastname = $_SESSION['post']['lastname'];
          $gender = $_SESSION['post']['gender'] == "" ? "-" : $_SESSION['post']['gender'];
          $dob = $_SESSION['post']['dob'];
          $website = $_SESSION['post']['website'];
          $signname = $_SESSION['post']['artist-name'];

          $sql1 = "INSERT INTO artist VALUES ('$last_id', '$website', '$signname');";
          $conn->query($sql1);
          $sql2 = "INSERT INTO individual_artist VALUES ('$last_id', '$firstname', '$lastname', '$gender', '$dob');";
          $conn->query($sql2);

        }

        if ($_SESSION['post']['user-type'] == 4) {

          $organizationname = $_SESSION['post']['org-name'];
          $description = $_SESSION['post']['org-description'];

          $sql1 = "INSERT INTO visitor(visitorID) VALUES ('$last_id');";
          $conn->query($sql1);

          $sql2 = "INSERT INTO company_visitor VALUES ('$last_id', '$organizationname', '$description');";
          $conn->query($sql2);

        }

         if ($_SESSION['post']['user-type'] == 2) {

          $organizationname = $_SESSION['post']['org-name'];
          $description = $_SESSION['post']['org-description'];
          $website = $_SESSION['post']['website'];
          $signname = $_SESSION['post']['artist-name'];

          $sql1 = "INSERT INTO artist VALUES ('$last_id', '$website', '$signname');";
          $conn->query($sql1);
          $sql2 = "INSERT INTO company_artist VALUES ('$last_id', '$organizationname', '$description');";
          $conn->query($sql2);

        }
        
        //redirect to homepage
        session_unset();
        $_SESSION['success'] = "Registration Successfully";
        header("Location: login.php");
        exit();
  
      } else {
          //echo error but continue executing the code to close the session
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
  
      //close database connection
      $conn->close();
  
  }

} else {
  header("location:signup-final.php");//redirecting to first page
}
?>
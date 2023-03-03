<?php
  session_start(); // Session starts here.

  if(!isset($_SESSION['userID']) && ( !isset($_GET['aid']) || $_SESSION['userID'] =! $aid)){
    header("location: artist.php");
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

         
          label{
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
            color: black;
          }
          
          #popUpYes:hover {
            background-color: rgb(0, 0, 0);
            color: white;
          }

          #InputTitle{
            border-radius: 10px;
            background-color: black;
            color: black;
            text-align: center;
          }

          #InputDescription{
            border-radius: 10px;
            background-color: black;
            color: black;
            text-align: center;
          }

          #Hashtag{
            border-radius: 10px;
            background-color: black;
            color: black;
            text-align: center;
          }

          .columnone{
             padding-top:1%;
             padding-bottom:1%;
             padding-left:2%;
             padding-right:2%;
          }

          .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
          }

          .upload-section{
            border-style: dotted;
            border-color: white;
            padding-right: 20%;
            padding-left: 20%;
          }
          
          .row{
            display: block;
            width: 70%;
            margin: auto;
          }
          
          #Hashtag, #InputDescription, #InputTitle{
            background-color: white;
          }
          
          h4, label, h6{
            color: white;
            margin-bottom: 20px;
          }
          
          .col-md-6{
            margin: 20px 0;
            padding: 0;
            width: 40px;
          }
          
          .buttonss{
            display: flex;
            margin: auto;
            width: 100%;
          }
          
          input#myfile{
            color: white;
            margin: auto;
            
          }
    </style>

    <title>Login</title>
  </head>
  <body>
<div class="container-fluid">
    <div class="row">
        <div class="columnone" style="background-color: black; color: black;">
          <?php
            require_once('configuration.php');
            $aid = $_GET['aid'];
            $query = "SELECT `image`, signature_name FROM artist INNER JOIN users ON artistID = userID WHERE artistID = '$aid'";
            
            $result = $conn->query($query);
            
            if($result->num_rows > 0){
                $options = mysqli_fetch_assoc($result);
            }
            
          ?>
            <div class="row">
                <div class="col-md-12" style="background-color: black; color: black;">
                <?php  
                  if(!$options['image']){
                    echo '<img src="artists/OMEN.png" class="rounded-circle mb-3 center" style="height: 300px; width: 300px; text-align:center;" alt="Avatar">';
                  } else{
                    echo '<img src="'.$options["image"].'" class="rounded-circle mb-3 center" style="width: 300px; height: 300px; text-align:center;" alt="Avatar" />';
                  };
                ?>      
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background-color: black; color: black;">
                <h4 style="font-weight: bolder; text-align:center;margin-top: 4%; margin-bottom: 4%;"><?= $options['signature_name']; ?></h4>
                </div>
            </div>
            <?php
                   if (!empty($_SESSION['wcomment'])) {
                    echo ("<p style='color: red; text-align: center;'>".$_SESSION['wcomment']."</p>");
                    unset($_SESSION['wcomment']);
                    }
                   
                ?>
            <div class="row">
                <div class="col-md-12" style="background-color: black; color: black; padding-bottom: 7%">
                
                    <form action='uploaddone.php' method='POST' enctype="multipart/form-data">
                        <div class="form-group" style="text-align: left;">
                          <label for="">Title</label>
                          <input style="width: 100%;" type="text" class="form-control" id="InputTitle" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label for="">Description</label>
                          <textarea class="form-control" id="InputDescription" name='desc' rows="3"></textarea>                        
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="">Hashtag</label>
                            <input style="width: 100%;" type="text" class="form-control" id="Hashtag" name='hashtag' placeholder="separate with commas">
                        </div>  
                        <div class="columnone" style="text-align: center;">
                        <h4 style="margin-bottom: 3%;">Add Document</h4>
                            <div class="upload-section" style="margin-bottom: 3%;">
                              <div class="icon" style="margin-bottom: 5%; margin-top:5%">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-upload" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                  </svg>    
                              </div>
                            </div>
                            <h6>Upload Here </h6>
                            <input type="file" id="myfile" name="myfile">
                            <input type="text" value='<?= $aid ?>' name='aid' hidden>
                    
                            <div class="row buttonss">
                                <div class="col-md-6">
                                    <button type="submit" id="popUpYes" name="button" value='yes'>Done</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" id="popUpYes">Cancel</button>
                                </div>
                            </div>     
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
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
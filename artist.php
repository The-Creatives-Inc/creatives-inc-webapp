<?php
  session_start(); // Session starts here.
  $_SESSION["page"] = "artist.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        a{
          color: white;
        }
        
        a:hover{
          color: #DF9322;
          text-decoration: none;
        
        }
        
        body{
            background: #000000;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }
        .main-nav{
          position: sticky;
          top: 0;
          z-index: 1;
          background-color: rgba(0,0,0,0.8);
          margin-bottom: 70px;
        }
        
        .nav {
          padding: 1% 0;
          border-radius: 0;
          background-color: black;
          color: white;
          border-color: white;
          font-family: 'Fira Sans', sans-serif;
          justify-content: center;
          background-color: rgba(0,0,0,0);
        }
       
        hr.new1 {
          border-top: 3px solid white;
          margin: 0px;
          width: 100%;
        }
        
        .nav a{
            padding-bottom: 10px;
            margin-left: 15px;
            position: relative;
            text-decoration: none;
            color: white;
            font-size: 1.1em;
        }
        .nav a::before{
            content: '';
            position: absolute;
            width: 100%;
            height: 2.2px;
            border-radius: 40px;
            background-color: white;
            bottom: 0;
            left: 0;
            transform-origin: right;
            transform: scaleX(0);
            transition: transform .2s ease-in-out;
        }
        
        .nav a:hover::before {
            transform-origin: left;
            transform: scaleX(1);
          }

          img{
            border: 5px solid white;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #DF9322;
            -moz-box-shadow: 5px 5px 5px #DF9322;
            -webkit-box-shadow: 5px 5px 5px #DF9322;
            -khtml-box-shadow: 5px 5px 5px ;
          }

          .nopadding{
            margin-bottom: 30px;
          }

          

          .grow img{
            transition: 1s ease;
            }
            
            .grow img:hover{
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
            transition: 1s ease;
            }
  
            #current{
              color: #DF9322;
            }
    
    
    </style>

    <title>Artist</title>
  </head>
  <body>
  
    <div class="main-nav">
      <nav class="nav">
        <a class="nav-link" href="index.php#arts">HOME</a>
        <a class="nav-link" href="about.php">ABOUT</a>
        <a class="nav-link" href="artist.php" id='current'>ARTISTS</a>
        <a class="nav-link" href="index.php#last-arrow">CONTACT</a>
        <?php
          if (!empty($_SESSION['userID']) && $_SESSION['isAdmin'] == 1) {
           echo ("<a class='nav-link' href='adminverification.php'>ADMIN</a>");
          }        
        ?>
        <?php
          if (!empty($_SESSION['userID'])) {
           echo ("<a class='nav-link' href='logout.php'>SIGN OUT</a>");
          } else {
           echo ('<a class="nav-link" href="login.php">SIGN IN</a>');
          }
          
      ?>
      </nav>  
      <hr class="new1">
    </div>
    
    <?php
      require_once('configuration.php');
      
      //$query = "SELECT signature_name, `image`, link, field_name, artworkID FROM artist INNER JOIN users ON users.userID = artist.artistID 
      //INNER JOIN field ON field.fieldID = users.fieldID INNER JOIN artwork ON artwork.artistID = artist.artistID INNER JOIN link ON link.linkID = artwork.artworkID";
      
      $query = "SELECT artistID, signature_name, `image`, field_name FROM artist INNER JOIN users ON users.userID = artist.artistID 
      INNER JOIN field ON field.fieldID = users.fieldID";
      
      $result = $conn->query($query);
      
      if($result->num_rows > 0){
          $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
          
      }
      
    ?>

    <?php 
      for ($x = 0; $x < count($options); $x++){ 
    ?>
      <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <div class="grow">
              <a href="individualartist.php?aid=<?= $options[$x]['artistID']; ?>">
                <?php  
                  if(!$options[$x]['image']){
                    echo '<img src="artists/profile.png" class="rounded float-left" style="height: 200px; width: 200px"';
                  } else{
                    echo '<img src="'.$options[$x]['image'].'" class="rounded float-left" style="height: 200px; width: 200px">';
                  }
                ?> 
              </a>           
            </div>
          </div>
          <div class="col-md-3">
            <a href="individualartist.php?aid=<?= $options[$x]['artistID']; ?>">
              <p><?= $options[$x]['signature_name']; ?><br> Category: <?= $options[$x]['field_name']; ?></p>
            </a> 
          </div>
          <?php
            $aid= $options[$x]['artistID'];
            
            $query1 = "SELECT artworkID, link FROM artwork INNER JOIN link ON link.linkID = artwork.artworkID 
            INNER JOIN artist ON artwork.artistID = artist.artistID WHERE artist.artistID='$aid' LIMIT 3";
            
            $result1 = $conn->query($query1);
            
            if($result1->num_rows > 0){
                $options1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            }
            
            for ($y = 0; $y < count($options); $y++){ 
          ?>
            <div class="grow col-md-2">
              <a href="individualartwork.php?uid=<?= $options1[$y]['artworkID'];?>"><img src="<?= $options1[$y]['link']; ?>" style="height: 150px; width: 150px"></a>          
            </div>
          <?php } ?>   
        </div>   
      </div>
    <?php
      }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
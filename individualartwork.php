<?php
  session_start(); // Session starts here.
  $uid = $_GET['uid'];
  $_SESSION["page"] = "individualartwork.php?uid=".$uid;
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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        ::-webkit-scrollbar {
          width: 15px;
          margin: 5px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
          background: black; 
          /* border: 1px solid white; */
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: rgba(255, 255, 255, 0.9); 
          border-radius: 20px;
        }
        
        body{
            background: #000000;
            color: white;
            font-family: 'Montserrat', sans-serif;
            overflow: hidden;
        }
        
        .main-nav{
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: rgba(0,0,0,0.8);
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
          
          #current{
            color: #DF9322;
          }
         
          hr.new1 {
            border-top: 3px solid white;
            margin: 0px;
            width: 100%;
            margin-bottom: 60px;
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

          .new1 {
            border-top: 3px solid white;
            margin-bottom: 60px;
          }

          img{
            border: 2px solid white;
            border-radius: 20px;
          }

          .nopadding{
            margin-bottom: 30px;
          }

          .material-symbols-outlined {
            color: #DF9322;
              font-variation-settings:
              'FILL' 10,
              'wght' 900,
              'GRAD' 0,
              'opsz' 48
            }

            button{
              margin-top: 5%;
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
            
            #comments{
              margin-top: 5px;
              border-style: solid;
              border-width: 1px;
              border-radius: 30px;
              border-color: white;
              width: 80%;
              padding: 2% 10%;
            }

            #commentname{
              font-size: 2px;
            }

            #commenting{
              font-size: 12px;
              margin-top: 2%
            }
            
            .alignn{
              justify-content: center;
              text-align: center;
            }
            
            .material-symbols-outlined{
              margin-bottom: 30px;
            }
            
            .single-comment{
              margin-bottom: 30px;
              
            }
            
            div#comments {
              overflow: auto;
              height: 360px;
              width: 80%;
            }
            
            .col-md-10, .col-md-2{
              margin: 0;
              padding: 0;
            }
            
            .col-md-10{
              text-align: left;
            }
            
            p#name, p#commenting{
              margin: 0;
            }
            
            span#name, span#date{
              color: gray;  
            }
            
            span#date{
              margin-left: 130px;
            }
            
            #title{
              color: #DF9322;
              margin-bottom: 15px;
            }
            
            #title span.material-symbols-outlined{
              margin-left: 30px;
              font-size: 20px;
            }
            
            .heading{
              margin-bottom: 30px;
              margin-left: 10px;
            }
            
            .heading #signature{
              font-size: 30px;
              margin: auto 30px;
            }
            
            form #comment{
              width: 80%;
            }
    </style>

    <title>Individual Artwork</title>
</head>

<body>
    <div class="main-nav">
      <nav class="nav">
        <a class="nav-link" href="index.php#arts">HOME</a>
        <a class="nav-link" href="about.php">ABOUT</a>
        <a class="nav-link" href="artist.php">ARTISTS</a>
        <a class="nav-link" href="index.php#last-arrow">CONTACT</a>
        <?php
          if (!empty($_SESSION['userID']) && $_SESSION['isAdmin'] == 1) {
           echo ("<a class='nav-link' href='adminverification.php'>ADMIN</a>");
          }        
        ?>
        <?php
          if (!empty($_SESSION['userID'])) {
           echo ("<a class='nav-link' id='user' href='logout.php'>SIGN OUT</a>");
          } else {
           echo ('<a class="nav-link" id="user" href="login.php">SIGN IN</a>');
          }
        ?>
      </nav>  
      <hr class="new1">
    </div>


    <hr class="new1">


    <div class="container-fluid">
      <?php
                     
            require_once('configuration.php');
            
            $query = "SELECT artwork.artworkID as artworkID, signature_name, artworkTitle, commentMessage, users.image, link, artworkDescription, numLikes FROM users INNER JOIN artist ON artist.artistID = users.userID INNER JOIN artwork ON artist.artistID = artwork.artistID INNER JOIN link ON linkID = artwork.artworkID LEFT JOIN `artworkLikes` ON linkID = artworklikes.artworkID LEFT JOIN comment ON artwork.artworkID = comment.artworkID WHERE artwork.artworkID ='$uid';";
            $result = $conn->query($query);

            
            if($result->num_rows > 0){
                $options = mysqli_fetch_assoc($result);
            }
            $_SESSION['artworkID'] = $options['artworkID'];
          
        ?>
    
        <div class="row">
          <div class="col-md-6 alignn">
            <h1 id='title'>
              <span><?= $options['artworkTitle']; ?></span>
              <span class="material-symbols-outlined">favorite 0</span>
            </h1>
            
            <div class="row" style="margin-top: 5%;">
              <div class="col-md-6">
                <a href="like.php"><span id="like-btn" class="material-symbols-outlined">
                  favorite <span id="numOfLikes"><?= $options['numLikes']; ?></span>
                  </span></a>
              </div>
              
              <p>
                <?= $options['artworkDescription']; ?> 
              </p>

            </div>
          </div>
          
          <div class="col-md-6 alignn">
              <div class="row heading">
                <div>
                  <?php  
                    if(!$options['image']){
                      echo '<img src="artists/profile.png" class="rounded-circle" style="height: 100px; width:100px" alt="Cinque Terre">';
                    } else{
                      echo '<img src="'.$options['image'].'" class="rounded-circle" style="height: 100px; width:100px" alt="Cinque Terre">';
                    }
                  ?> 
                  
                  <span id='signature'><?= $options['signature_name']; ?></span>
                  <span class="material-symbols-outlined">verified</span> 
                </div>
              </div>      
              
              <!-- All comments -->
              <div id="comments">
                <div class="material-symbols-outlined" style="text-align: center;">forum</div>
                
                <?php
                    require_once('configuration.php');
                    
                    $query = "SELECT commentMessage, datePosted, email, `image` FROM comment INNER JOIN users ON comment.userID = users.userID WHERE comment.artworkID='$uid'";
                    $result = $conn->query($query);
                    
                    if($result->num_rows > 0){
                        $options = mysqli_fetch_all($result, MYSQLI_ASSOC); 
                        
                      for ($x = 0; $x < count($options); $x++){
                ?>
                
                <div class="row single-comment">
                  <div class="main-comment">
                    <div class="row">
                      <div class='col-md-2'>
                      <?php  
                        if(!$options[$x]['image']){
                          echo '<img src="artists/profile.png" class="rounded-circle" style="height: 100px; width:100px" alt="Cinque Terre">';
                        } else{
                          echo '<img src="'.$options[$x]['image'].'" class="rounded-circle" style="height: 50px; width:50px" alt="Cinque Terre">';
                        }
                      ?> 
                      </div>
                      <div class='col-md-10'>
                        <span id='name' style="font-size: 15px;"><?= $options[$x]['email'] ?></span>
                        <span id='date' style="font-size: 15px;"><?= $options[$x]['datePosted'] ?></span>
                        <p id="commenting"><?= $options[$x]['commentMessage'] ?></p>
                      </div>
                    </div>  
                    <hr style='background-color: gray; width: 470px;'>
                  </div>
                </div>
                <?php  }} ?>
                
                <?php
                   if (!empty($_SESSION['wcomment'])) {
                    echo ("<p style='color: red; text-align: center;'>".$_SESSION['wcomment']."</p>");
                    unset($_SESSION['wcomment']);
                   }
                   if (!empty($_SESSION['comment'])) {
                    echo ("<p style='color: green; text-align: center;'>".$_SESSION['comment']."</p>");
                    unset($_SESSION['comment']);
                   }
                ?>
                
                <form action="comment_proc.php" method='POST'>
                    <input type="text" placeholder='comment' name='comment' id='comment'>
                    <input type="text" value='<?= $uid ?>' name='uid' hidden>   
                    <input type="submit" name='comment-submit' id='submit'>
                </form>
              </div>
                
            </div>      
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <img src="images/i2.jpg" class="rounded-circle" style="height: 100px; width:20%" alt="Cinque Terre"> 
          </div>
          <div class="col-md-3">
            The Creator <br> The CMaster
          </div>
        </div>
    </div> -->

      </div>
    </body>
  </html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script
  </body>
</html>
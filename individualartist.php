<?php
  session_start(); // Session starts here.
  $aid = $_GET['aid'];
  $_SESSION["page"] = "individualartist.php?aid=".$aid;
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
        }
        
        .nav {
          padding: 2% 0;
          border-radius: 0;
          background-color: black;
          color: white;
          border-color: white;
          font-family: 'Fira Sans', sans-serif;
          justify-content: center;
          background-color: rgba(0,0,0,0);
          }
          
          .nav a{
              padding-bottom: 10px;
              margin-left: 15px;
              position: relative;
              text-decoration: none;
              color: white;
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
          
          .container-f{
            margin: 30px 100px;
          }

          .new1 {
            border-top: 3px solid white;
            margin-bottom: 60px;
            margin-top: 0px;
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
            
            #rec{
              height: 10%;
            }
            
            #popUpYes:hover {
              background-color: rgb(0, 0, 0);
              color: white;
            }
            
            #current{
              color: #DF9322;
            }
            
            #comments{
              margin-top: 2%;
              border-style: solid;
              border-width: 1px;
              border-radius: 30px;
              border-color: white;
              padding: 10px;
            }

            #commentname{
              font-size: 2px;
            }

            #commenting{
              font-size: 10px;
            }
            
            #rec{
              border: 3px solid white;
              border-radius: 10px;
              height: 10em;
              margin: 0 60px;
              background-image: linear-gradient(to right, violet,yellow, green, lightblue);
            }
            
            #art{
              margin-bottom: 20px;
            }
            
            #myTab span{
              display: inline-block;
              background-color: white;
              border-radius: 10px;
              padding: 7px 20px;
              margin: 0 20px 50px 0;
            }
            
            #myTab span:hover{
              background-color: black;  
            }
            
            #myTab span a{
              color: black;
            }
            
            #myTab span a:hover{
              color:#DF9322;
              text-decoration: none;
            }
            
            #under-button{
              border-bottom: 1px solid white;
              margin-bottom: 50px;
              
            }
            
            #under-button a{
              color: white;
              text-decoration: none;
              margin-right: 20px;
            }
            
            #under-button a:hover{
              text-decoration: underline;
              text-decoration-color:#DF9322;
              text-decoration-thickness: 5px;
            }
            
            .inside{
              border: 2px solid white;
              border-radius: 10px;
              padding: 2%;
            }
            
            img{
            border: 2px solid white;
            border-radius: 20px;
            }
            
            @media screen and  (min-width: 576px) {
            .col-sm-6{
                display: inline-block;
                max-width: 40%;
                margin-right: 9%;
                margin-bottom: 5%; 
              }
            }
            
            @media screen and  (min-width: 768px) {
            .col-md-4{
                display: inline-block;
                max-width: 30%;
                margin-right: 1%;
                margin: 0;
                margin-bottom: 5%; 
                margin-right: 2%;
              }
            }
            
                    
            #left{
              border-radius: 10px;
              border: 2px solid white;
              width: 100%;
              box-shadow: -5px 5px 5px #DF9322;
              -moz-box-shadow: -5px 5px 5px #DF9322;
              -webkit-box-shadow: -5px 5px 5px #DF9322;
              -khtml-box-shadow: -5px 5px 5px ;
            }
            
            .next-inside{
              margin-top: 10%;
            }
            
            .next-inside div p:nth-child(1){
              margin: 0;
              font-size: 0.9em;
            }
            
            p.edit{
              font-size: 10px;
              opacity: 0.6;
            }
            
            p#small{
              font-size: 10px;
            }
            
            #accordion{
              color: black;
              margin-top: 10%;
            }
            
            .btn-link{
              color: black;
              text-decoration: none;
            }
            
            .btn-link:hover{
              color: #DF9322;
              text-decoration: none;
            }
            
            .card{
              margin-bottom: 5%;
            }
            
            .card-header{
              padding: 0;
            }
            
            form{
            margin-left: 1%;
            }
           
            label{
              margin-top: 5%;
            }
           
            input{
              width: 100%;
            }
  
            #button{
              background-color: black;
              color: white;
              padding-left: 35%;
              padding-right: 35%;
              padding-top: 1%;
              padding-bottom: 1%;
              border-radius: 10px;           
            }
            
            #button:hover{
              background-color: white;
              color: black;
            }
            
            form img{
              display: block;
              border-radius: 50%;
              width: 50%;
              margin-left: auto;
              margin-right: auto;
              margin-bottom: 5%;
              border: 2px solid black;
            }
    </style>

    <title>Individual Artist</title>
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
               echo ("<a class='nav-link' href='logout.php'>SIGN OUT</a>");
              } else {
               echo ('<a class="nav-link" href="login.php">SIGN IN</a>');
              }            
          ?>  
        </nav>
        <hr class="new1">
    </div>
    
    <div id='rec'>
      <!-- for the colored-box -->
    </div>
        <?php
        if (!empty($_SESSION['comment'])) {
            echo ("<p style='color: green; text-align: center;'>".$_SESSION['comment']."</p>");
            unset($_SESSION['comment']);
           }
        ?>
    <?php
      require_once('configuration.php');
      $aid = $_GET['aid'];
      $query = "SELECT website, signature_name FROM artist WHERE artistID = '$aid'";
      
      $result = $conn->query($query);
      
      if($result->num_rows > 0){
          $options = mysqli_fetch_assoc($result);
      }
      
    ?>

    <div class="container-f">
      <div id='art'>
        <h3> <?= $options['signature_name']; ?></h3>
        <a href=""><?= $options['website']; ?></a>
        <p><?= $options['signature_name']; ?> is dedicated to bringing compelling works of contemporary generative art to life. 
        We unite artists, collectors, and blockchain technology in service of groundbreaking artwork and remarkable experiences.</p>
      </div>
      
      <div role="tablist" id='myTab'>
        <?php if(isset($_SESSION['userID']) && $_SESSION['userID'] == $aid){ 
            echo "<span><a href='uploadart.php?aid=".$aid."'>Create</a></span>";}
          ?>
        
        <span class="nav-item" role="presentation">
          <a 
            id='home-tab' 
            data-toggle='tab'
            href='#home' 
            role='tab' 
            aria-controls='home'
            aria-selected='true'>verified</a>
        </span>
        <?php if($_SESSION["isAdmin"]==1 || isset($_SESSION['userID']) && $_SESSION['userID'] == $aid){ 
          echo "<span class='nav-item' role='presentation'><a 
          id='profile-tab' 
          data-toggle='tab'
          href='#profile' 
          role='tab' 
          aria-controls='profile'
          aria-selected='false'>unverified</a></span>";
          
          echo "<span class='nav-item' role='presentation'><a 
          id='last-tab' 
          data-toggle='tab'
          href='#last' 
          role='tab' 
          aria-controls='last'
          aria-selected='false'>disapproved</a></span>"; }
        ?>
      </div>
      
      <div id='under-button'>
        <a href="">Items</a>
        <a href="">Marketplace</a>
      </div>
      
      <div class="row">
      
        <div id='left' class="col-md-4 col-sm-4">
        
        
          <div id="accordion">
            <div class="card">
              <?php if(isset($_SESSION['userID']) && $_SESSION['userID'] == $aid){  ?>
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      View Profile
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <form action="">
                      <img src="images/ten.png" alt="">
                      <input type="file" class="form-control" accept="image/*" placeholder="Select image"> <br>
                      <label for="">User name</label><br>
                      <input type="text" id='username'><br>
                      <label for="">Organization name</label><br>
                      <input type="text" id='orgname'><br>
                      <label for="">First name</label><br>
                      <input type="text" id='f_name'><br>
                      <label for="">Last name</label><br>
                      <input type="text" id='l_name'><br>
                      <label for="">Email</label><br>
                      <input type="email" id='email'><br>
                      <label for="">Phone number</label><br>
                      <input type="text" id='phone'>
                      <br> <br> 
                      <input type="submit" class="submit" id='button' value="Update">
                    </form>
                  </div>
                </div>
              <?php } ?> 
            </div>
     
          </div>
      
        </div>
        
        <div class="col-md-8 col-sm-8 tab-content" id="myTabContent">
          <!-- 1 -->
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php
   
              $query1 = "SELECT artworkID, link, artworkTitle FROM artwork INNER JOIN link ON link.linkID = artwork.artworkID 
              INNER JOIN artist ON artwork.artistID = artist.artistID WHERE artist.artistID='$aid' AND artwork.status = 1";
              
              $result1 = $conn->query($query1);
              
              if($result1->num_rows > 0){
                  $options1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
              }
              
              if($options1){
              
              for ($y = 0; $y < count($options1); $y++){ 
            ?>
              <div class="inside col-md-4 col-sm-6">
                <a href="individualartwork.php?uid=<?= $options1[$y]['artworkID'];?>"><img src="<?= $options1[$y]['link']; ?>" style="height: 180px; width: 200px"> <br></a>
                
                <div class="next-inside">
                  <div class="">
                    <p><?= $options1[$y]['artworkTitle'];?></p>
                    <p class='edit'><?= $options['signature_name']; ?></p>
                  </div>
                  
                  <div class="material-symbols-outlined float-right">
                    favorite
                    <p class='edit' id='small'>1.1 k</p>
                  </div>
                </div> 
              </div>
              
            <?php }} ?> 
          </div>
          
          <!-- 2 -->
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?php
              $query2 = "SELECT artworkID, link, artworkTitle FROM artwork INNER JOIN link ON link.linkID = artwork.artworkID 
              INNER JOIN artist ON artwork.artistID = artist.artistID WHERE artist.artistID='$aid' AND artwork.status = 0";
              
              $result2 = $conn->query($query2);
              
              if($result2->num_rows > 0){
                  $options2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
              }
              
              if($result2->num_rows){
              
              for ($z = 0; $z < count($options2); $z++){ 
            ?>
              <div class="inside col-md-4 col-sm-6">
                <a href="individualartwork.php?uid=<?= $options1[$z]['artworkID'];?>"><img src="<?= $options1[$z]['link']; ?>" style="height: 180px; width: 200px"> <br></a>
                
                <div class="next-inside">
                  <div class="">
                    <p><?= $options2[$z]['artworkTitle'];?></p>
                    <p class='edit'><?= $options['signature_name']; ?></p>
                  </div>
                </div> 
              </div>
            
            <?php }} ?> 
          
          </div>
          
          
          <!-- 3 -->
          <div class="tab-pane fade" id="last" role="tabpanel" aria-labelledby="last-tab">
            <?php
              $query3 = "SELECT artworkID, link, artworkTitle FROM artwork INNER JOIN link ON link.linkID = artwork.artworkID 
              INNER JOIN artist ON artwork.artistID = artist.artistID WHERE artist.artistID='$aid' AND artwork.status = 2";
              
              $result3 = $conn->query($query3);
              
              if($result3->num_rows > 0){
                  $options3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
              }
              
              if($result3->num_rows){
              
              for ($w = 0; $w < count($options3); $w++){ 
            ?>
              <div class="inside col-md-4 col-sm-6">
                <a href="individualartwork.php?uid=<?= $options1[$w]['artworkID'];?>"><img src="<?= $options1[$w]['link']; ?>" style="height: 180px; width: 200px"> <br></a>
                
                <div class="next-inside">
                  <div class="">
                    <p><?= $options3[$w]['artworkTitle'];?></p>
                    <p class='edit'><?= $option3['signature_name']; ?></p>
                  </div>
                </div> 
              </div>
            
            <?php }} ?> 
          
          </div>
          
          
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
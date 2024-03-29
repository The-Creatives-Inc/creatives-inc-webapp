<?php
  session_start(); // Session starts here.
  $_SESSION["page"] = "index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Creative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Style CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="swiper-bundle.min.css">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    html {
      scroll-behavior: smooth;
      background-color: rgb(0, 0, 0);
    }

    .material-symbols-outlined {
      color: black;
      background-color: white;
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 48
    }
    
    body{
      /* width: 100%; */
      font-family: 'Montserrat', sans-serif;
      background-color: white;
      margin: 0;
    }
    
    body {
      margin-bottom: 0%;
      padding-bottom: 0%;
    }
    
    .main-content{
      min-height: 90vh;
      box-shadow: 0 0.25em 0.5em 0 rgb(0 0 0);
    }
    
    .sub-container{
      margin-top: 5%;
      justify-content: center;
      vertical-align: middle;
    }
    
    .main-nav{
      position: sticky;
      top: 0;
      margin-top: 2%;
      background-color: rgba(0,0,0,0.8);
      z-index: 2;
    }
    
    .nav {
      padding: 2% 0;
      border-radius: 0;
      background-color: black;
      color: white;
      /* font-family: 'Fira Sans', sans-serif; */
      border-color: white;
      text-align: center;
      background-color: rgba(0,0,0,0);
    }
   
    hr.new1 {
      border-top: 3px solid white;
      margin: 0px;
      width: 100%;
    }
    
    .nav a{
        padding-bottom: 10px;
        margin-left: 20px;
        position: relative;
        text-decoration: none;
        color: white;
        font-size: 1.4em;
        font-weight: 10px;
        padding: 0.5rem 1rem;
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
    
    #main-img{
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 40%;
      margin-bottom: -50px;
      
    }
    
    .search-container{
      display: block;
      margin-left: 25%;
      margin-top: 10px;
      display: -ms-flexbox; 
      display: flex;
      width: 50%;
      position: relative;
    }
    
    .search-container i{
      position:absolute;
      display:inline-block;
      width: 22px;
      height:30px;
      top: 8px;
      right: 10px;
    }
    
    .input {
      display: inline-block;
    }
    
    #site-search{
      width: 100%;
      padding: 10px;
      border-radius: 15px;
      text-align: center;
      background-color: white;
      color: black;
      margin-bottom: 200px;
    }
    
    .small-about{
      margin-top: 2%;
      text-align: center;
      padding: 0;
      color: white;
    }
    
    .small{
      padding: 3% 25% 3% 25%;
      font-size: 1.2em;
    }    
    
    .main-content .arrow{
      justify-content: center;
    }
    
    .main-content img{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    
    #current{
      color: #DF9322;
    }
    
    #last-arrow{
      
      width: 2.5%;
      margin-left: auto;
      margin-right: auto;
      margin-top: 50px;
    }
    
    #last-arrow img{
      background-color: black;
      width: 40px;
      transform: rotate(180deg);
    }
    
    footer{
      color: white;
    }
    
    footer div{
      margin-bottom: 20px;
    }
    
    .orange{
      color: #DF9322;
      padding-top: 50px;
    }
    
    .head{
      margin: 0;
    }
    
    #arts{
      padding: 7% 0;
    }
    
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
    
    /* .make-scroll {
      overflow: auto;
      height: 900px;
    } */
    
    /* artworkssss */
    .container .row{
      margin: 5% 0;
    }
    
    .thumbnail{
      margin-left: 40px;
    }
  
    .hovereffect img{
      border: 5px solid white;
      border-radius: 20px;
      display:block;
      position:relative;
      -webkit-transition:all .4s linear;
      transition:all .4s linear;
      box-shadow: 5px 5px 5px #DF9322;
      -moz-box-shadow: 5px 5px 5px #DF9322;
      -webkit-box-shadow: 5px 5px 5px #DF9322;
      -khtml-box-shadow: 5px 5px 5px ;
    }
  
    .container p{
      margin-top: 20px;
      text-align: center;
      color: white;
    }
  
    .hovereffect .overlay {
      width:90%;
      height:90%;
      position:absolute;
      overflow:hidden;
      top:-3%;
      left:5%;
      opacity:0;
      background-color:rgba(0,0,0,0.5);
      -webkit-transition:all .4s ease-in-out;
      transition:all .4s ease-in-out
    }
    
    .hovereffect h2 {
      text-transform:uppercase;
      color:#fff;
      text-align:center;
      position:relative;
      font-size:17px;
      background:rgba(0,0,0,0.6);
      -webkit-transform:translatey(-100px);
      -ms-transform:translatey(-100px);
      transform:translatey(-100px);
      -webkit-transition:all .2s ease-in-out;
      transition:all .2s ease-in-out;
      padding:10px;
    }
    
    .hovereffect a.info {
      text-decoration:none;
      display:inline-block;
      text-transform:uppercase;
      color:#fff;
      border:1px solid #fff;
      background-color:transparent;
      opacity:0;
      filter:alpha(opacity=0);
      -webkit-transition:all .2s ease-in-out;
      transition:all .2s ease-in-out;
      margin:50px 0 0;
      padding:7px 14px;
    }
    
    .hovereffect a.info:hover {
    box-shadow:0 0 5px #fff;  
    }
    
    .hovereffect:hover img {
      -ms-transform:scale(1.2);
      -webkit-transform:scale(1.2);
      transform:scale(1.2);
    }
    
    .hovereffect:hover .overlay {
      opacity:1;
      filter:alpha(opacity=100);
    }
    
    .hovereffect:hover h2,.hovereffect:hover a.info {
      opacity:1;
      filter:alpha(opacity=100);
      -ms-transform:translatey(0);
      -webkit-transform:translatey(0);
      transform:translatey(0);
    }
    
    .hovereffect:hover a.info {
      -webkit-transition-delay:.2s;
      transition-delay:.2s;
    }  
    
    .col-md-3{
      padding-left: 25px;
      padding-right: 25px;
    }
    
    #buttondown{
      display: flex;
      align-items: flex-end;
      justify-content: center;
      height: 40vh;
    }
    
    div{
      background-color: black;
    }
    
    .row{
      margin: 0;
    }

    </style>
</head>

<body>
  <div id='top' class="main-content">
    <div class="sub-container">
      <img src="images/black background.png" id="main-img" class="rounded mx-auto d-block" alt="...">
      <!-- <div class="search-container">
        <i class="material-symbols-outlined">search</i>
        <input type="search" id="site-search" name="search" placeholder="Search this space">  
      </div> -->
    </div>
    <div id='buttondown'>
      <a href="#arts"><img src="images/arrow.png" alt=""></a> 
    </div>
  </div>
  
  <div class="main-nav">
    <nav class="nav">
      <a class="nav-link" href="#arts" id='current'>HOME</a>
      <a class="nav-link" href="about.php">ABOUT</a>
      <a class="nav-link" href="artist.php">ARTISTS</a>
      <a class="nav-link" href="#last-arrow">CONTACT</a>
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
  <div id='us' class="small-about">
    <div class="small">
      <h3>Who we are</h3>
      <p>The Creative platform will provide arts activists with a secure and safe space to save and showcase their art pieces without fear of losing them or piracy. It will also help them meet with promoters, viewers, and customers.</p>
    </div>
  </div>

  <div id='arts'>
    <div class="container">
      <!-- <div class="body">
        <div class="slide-container swiper">
              <div class="slide-content">
                  <div class="card-wrapper swiper-wrapper">
                    
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
  
                              <div class="card-image">
                                  <img src="images/profile8.jpg" alt="" class="card-img">
                              </div>
                          </div>
  
                          <div class="card-content">
                              <h2 class="name">David Dell</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
  
                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
  
                              <div class="card-image">
                                  <img src="images/profile9.jpg" alt="" class="card-img">
                              </div>
                          </div>
  
                          <div class="card-content">
                              <h2 class="name">David Dell</h2>
                              <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>
  
                              <button class="button">View More</button>
                          </div>
                      </div>
                  </div>
              </div>
          
              <div class="swiper-button-next swiper-navBtn"></div>
              <div class="swiper-button-prev swiper-navBtn"></div>
              <div class="swiper-pagination"></div>
          </div>
        </div> -->
        
        <?php
          require_once('configuration.php');
          
          $query = "SELECT linkID, link, artworkID, artworkTitle, artwork.artistID, dateCreated, artworkDescription, signature_name FROM link INNER JOIN artwork ON linkID = artworkID INNER JOIN artist ON artist.artistID = artwork.artistID";
          $result = $conn->query($query);
          
          if($result->num_rows > 0){
              $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
              
          }
          
        ?>
    
      <div class="row">
        <div class="col-md-4">
          <div class="hovereffect">
            <img src="<?= $options[0]['link']?>" style="height: 400px; width: 90%; margin:auto;"/>
            <p><?= $options[0]['artworkTitle']; ?> by <?= $options[0]['signature_name']; ?></p>
            <div class="overlay">
              <h2><?= $options[0]['artworkTitle'];?></h2>
              <p><?= $options[0]['artworkDescription']; ?></p>
              <a class="info" href="individualartwork.php?uid=<?= $options[0]['artworkID']; ?>">link here</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="hovereffect">
            <img src="<?= $options[1]['link']?>" style="height: 400px; width: 90%; margin:auto;"/>
            <p><?= $options[1]['artworkTitle']; ?> by <?= $options[1]['signature_name']; ?></p>
            <div class="overlay">
              <h2><?= $options[1]['artworkTitle']; ?></h2>
              <p><?= $options[1]['artworkDescription']; ?></p>
              <a class="info" href="individualartwork.php?uid=<?= $options[1]['artworkID']; ?>">link here</a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="hovereffect">
            <img src="<?= $options[2]['link']?>" style="height: 400px; width: 90%; margin:auto;"/>
            <p>Ashis by Mastermind</p>
            <div class="overlay">
              <h2>Ashis</h2>
              <p><?= $options[2]['artworkDescription']; ?></p>
              <a class="info" href="individualartwork.php?uid=<?= $options[2]['artworkID']; ?>">link here</a>
            </div>
          </div>
        </div>
      </div> 
    </div>
    
    <div>
    <div class="container make-scroll">
      <?php
          // foreach ($options as $option){
            for ($x = 3; $x < count($options); $x+=4){
      ?>
     
        <div class="row">
          <div class="col-md-3">
            <div class="hovereffect">
              <img src="<?= $options[$x + 0]['link']; ?>" style="height: 200px; width: 100%"/>
              <p><?= $options[$x + 0]['artworkTitle']; ?> by <?= $options[$x + 0]['signature_name']; ?> </p>
              <div class="overlay">
                <h2><?= $options[$x + 0]['artworkTitle']; ?></h2>
                <p><?= $options[$x + 0]['artworkDescription']; ?></p>
                <a class="info" href="individualartwork.php?uid=<?= $options[$x + 0]['artworkID']; ?>">link here</a>
              </div>
            </div>
          </div>
          
          <?php
           if(array_key_exists($x + 1, $options)){?>
            <div class="col-md-3">
              <div class="hovereffect">
                <img src="<?= $options[$x + 1]['link']; ?>" style="height: 200px; width: 100%"/>
                <p><?= $options[$x + 1]['artworkTitle']; ?> by <?= $options[$x + 1]['signature_name']; ?> </p>
                <div class="overlay">
                  <h2><?= $options[$x + 1]['artworkTitle']; ?></h2>
                  <p><?= $options[$x + 1]['artworkDescription']; ?></p>
                  <a class="info" href="individualartwork.php?uid=<?= $options[$x + 1]['artworkID']; ?>">link here</a>
                </div>
              </div>
            </div>
            <? };
            
           if(array_key_exists($x + 2, $options)){ ?>
            <div class="col-md-3">
              <div class="hovereffect">
                <img src="<?= $options[$x + 2]['link']; ?>" style="height: 200px; width: 100%"/>
                <p><?= $options[$x + 2]['artworkTitle']; ?> by <?= $options[$x + 2]['signature_name']; ?> </p>
                <div class="overlay">
                  <h2><?= $options[$x + 2]['artworkTitle']; ?></h2>
                  <p><?= $options[$x + 2]['artworkDescription']; ?></p>
                  <a class="info" href="individualartwork.php?uid=<?= $options[$x + 2]['artworkID']; ?>">link here</a>
                </div>
              </div>
            </div>
          <?php };
            
            if(array_key_exists($x + 3, $options)){ ?>
            <div class="col-md-3">
              <div class="hovereffect">
                <img src="<?= $options[$x + 3]['link']; ?>" style="height: 200px; width: 100%"/>
                <p><?= $options[$x + 3]['artworkTitle']; ?> by <?= $options[$x + 3]['signature_name']; ?> </p>
                <div class="overlay">
                  <h2><?= $options[$x + 3]['artworkTitle']; ?></h2>
                  <p><?= $options[$x + 3]['artworkDescription']; ?></p>
                  <a class="info" href="individualartwork.php?uid=<?= $options[$x + 3]['artworkID']; ?>">link here</a>
                </div>
              </div>
            </div>
          </div>
      
      <?php
         }
         }
      ?>  
      </div>
    </div>
  </div>
  </div>


<div id='last-arrow'>
  <a href="#top"><img src="images/arrow.png" alt=""></a> 
</div>

<footer class="text-center">
  <div>
    <p class='orange'>Contact US</p>
    
    <div class='row'>
      <div class="col-md-4">
        <p>Street Address</p>
        <p class='head'>1 University</p>
        <p class='head'>Avenue, Berekuso, E/R</p>
      </div>
      <div class="col-md-4">
        <p>Postal Address</p>
        <p class='head'>PMB CT3</p>
        <p class='head'>Cantonments, Accra</p>
      </div>
      <div class="col-md-4">
        <p>Phone & Email</p>
        <p class='head'>+233546396053</p>
        <p class='head'>theCreatives@gmail.com</p>
      </div>
    </div>
    <div class='orange'><p>&copy; The Creatives. All rights reserved</p></div>
  </div>
</footer>


<!-- Swiper JS -->
<script src="swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="script.js"></script>
</body>
</html>

<?php
  session_start(); // Session starts here.
  $_SESSION["page"] = "about.php";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        html {
          scroll-behavior: smooth;
        }
        
        body{
            background-color: black;
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

          
          .new2 {
            border-top: 6px solid #DF9322;
            margin-bottom: 60px;
            max-width: 70px;
            margin: 0px;
          }


          .thumbnail{
            margin-left: 40px;
          }

          p{
            margin-top: 20px;
            text-align: left;
          }

          #comments{
            margin-top: 2%;
            border-style: solid;
            border-width: 1px;
            border-radius: 30px;
            border-color: white;
            padding: 10px;
          }

          .material-symbols-outlined {
            font-variation-settings:
            'FILL' 2,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
          }
          
          .empty{
            background-color: white;
          }

          button{
            margin-top: 5%;
            background-color: white;
            padding-left: 45%;
            padding-right: 45%;
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

          #current{
            color: #DF9322;
          }
          
          #last-arrow{
            background-color: black;
            width: 2%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
          }
          
          #last-arrow img{
            width: 40px;
            transform: rotate(180deg);
          }
          
          footer{
            color: white;
            height: 300px;
          }
          
          footer p {
            text-align: center;
          }
          
          footer div{
            margin: 20px auto;
          
          }
          
          .orange{
            color: #DF9322;
            margin-top: 50px;
          }
          
          .head{
            margin: 0;
          }
          
          #arts{
            padding: 10% 0;
          }
          
          #img1{
            position: absolute;
            width: 703px;
            height: 670px;
            left: 0;
            top: 12px;
          }
          
          img.grow{
            transition: 4s ease;
          }
          
          img.grow:hover{
            -webkit-transform: scale(1.15);
            -ms-transform: scale(1.15);
            transform: scale(1.15);
            transition: 4s ease;
          }

    </style>

    <title>About</title>
  </head>
  <body>
    <div class="main-nav">
        <nav class="nav">
            <a class="nav-link" href="index.php#arts">HOME</a>
            <a class="nav-link" href="#top" id='current'>ABOUT</a>
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

        <div class="container-fluid">
            <div class="row">
              <div class="col-md-5" style="margin: 4%;">
                <h1>Create your experience with us</h1>
                <hr class="new2">
                <p style="text-align:left;">The Creative platform will provide arts activists with a secure and safe space to save and showcase their art pieces without fear of losing them or piracy. It will also help them meet with promoters, viewers, and customers.</p>
              </div>
              <div class="col-md-6">
                <!-- <img src="images/a2.png" alt=""> -->
                <img src="images/a1.png" class='grow' alt="" id="img1">
              </div>
            </div>

            <div class="row" style="background-color: white; color: black">
              <div class="col-md-4" style="margin: 4%;">
                <h1 id = "contact-topic">Contact us</h1>
                <hr class="new2"><br>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span><br>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                </span><br>
                <p>This Contact Us page is for a marketing agency that works directly with businesses. Since it knows its audience, Brandaffair encourages visitors to "have a talk" one-on-one rather than providing a one-way communication channel via support resources.</p>
              </div>
            </div>


            <div class="row" style="margin: 4%;">
              <div class="col-md-6" >
                <h1 id="news-header">News</h1>
                <hr class="new2">
              </div>
              <div class="col-md-6">
              </div>
            </div>

            <div class="row">
              <div class="col-md-5" id="comments" style="margin: 3%;">
                <img src="images/a3.png" class="thumbnail" style="height: 300px; width:80%" alt="Cinque Terre"> 
                <h3 style="text-align: center;">Velri by Omari</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, officia mollitia necessitatibus quam amet minima accusamus et. Dicta ad incidunt, maiores fuga, saepe dolorem repellendus corrupti nesciunt dolor quam ipsa.</p>
                <span class="material-symbols-outlined">
                  favorite
                </span> 100
              </div>
              <div class="col-md-5" style="margin: 3%;" id="comments">
                <img src="images/a3.png" class="thumbnail" style="height: 300px; width:80%" alt="Cinque Terre"> 
                <h3 style="text-align: center;">Velri by Omari</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quas repudiandae similique modi quasi deserunt et a. Nulla, nihil magnam asperiores reiciendis in adipisci eum sapiente quaerat aliquid, sint eaque nemo!</p>
                <span class="material-symbols-outlined">
                  favorite
                </span> 10
              </div>
            </div> 
            <div class="row">
            <div class="col-md-5" style="margin: 3%;">
              <button type="submit" id="popUpYes">Subscribe</button>
            </div>
            <div class="col-md-5" style="margin: 3%;" >
              <button type="submit" id="popUpYes">Subscribe</button>
            </div>
          </div> 
        </div>
      </div>
      
      <div class='empty'>
          end
      </div>
      
      <div id='last-arrow'>
        <a href="#top"><img src="images/arrow.png" alt=""></a> 
      </div>
      
      <footer class="container-fluid text-center">
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

    </body>
  </html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
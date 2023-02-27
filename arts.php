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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            background-color: black;
            color: white;
            font-family: 'Montserrat', sans-serif;
        }
        .nav {
            margin-top: 2%;
            margin-bottom: 2.5%;
            border-radius: 0;
            background-color: black;
            color: white;
            border-color: white;
            text-align: center;
            margin-left: 35%;
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
          


          .new1 {
            border-top: 3px solid white;
            margin-bottom: 60px;
          }

/* end hereeeeeeeeeeeeeeeee */

          .thumbnail{
            margin-left: 40px;
          }

          img{
            border: 5px solid white;
            border-radius: 20px;
            box-shadow: 5px 5px 5px #DF9322;
            -moz-box-shadow: 5px 5px 5px #DF9322;
            -webkit-box-shadow: 5px 5px 5px #DF9322;
            -khtml-box-shadow: 5px 5px 5px ;
          }

          p{
            margin-top: 20px;
            text-align: center;
          }

          .hovereffect .overlay {
            width:90%;
            height:90%;
            position:absolute;
            overflow:hidden;
            top:0;
            left:0;
            opacity:0;
            background-color:rgba(0,0,0,0.5);
            -webkit-transition:all .4s ease-in-out;
            transition:all .4s ease-in-out
            }
            
            .hovereffect img {
            display:block;
            position:relative;
            -webkit-transition:all .4s linear;
            transition:all .4s linear;
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

    </style>

    <title>Arts</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
    <nav class="nav">
      <a class="nav-link" href="index.php" id='current'>HOME</a>
      <a class="nav-link" href="about.php">ABOUT</a>
      <a class="nav-link" href="artist.php">ARTISTS</a>
      <a class="nav-link" href="arts.php">ARTWORKS</a>   
      <?php
        if (!empty($_SESSION['userID'])) {
         echo ("<a class='nav-link' href='logout.php'>SIGN OUT</a>");
        } else {
         echo ('<a class="nav-link" href="login.php">SIGN IN</a>');
        }
        
    ?>  
    </nav>
    </div>


    <hr class="new1">

        <div class="container">
            <div class="row">
              <div class="col-md-4">
                  <div class="hovereffect">
                <img src="images/one.png" style="height: 400px; width: 90%"/>
                <p>Valeri by Mastermind</p>

                <div class="overlay">
                         <h2>Artwork 1</h2>
                         <a class="info" href="individualartwork.php">View Artwork</a>
                </div>
              </div>

              </div>
              <div class="col-md-4">
                <div class="hovereffect">
              <img src="images/two.png" style="height: 400px; width: 90%"/>
              <p>Valeri by Mastermind</p>

              <div class="overlay">
                       <h2>Artwork 2</h2>
                       <a class="info" href="individualartwork.php">View Artwork</a>
              </div>
              </div>

            </div>

              <div class="col-md-4">
                <div class="hovereffect">
                <img src="images/three.png" style="height: 400px; width: 90%"/>
                <p>Valeri by Mastermind</p>

                <div class="overlay">
                         <h2>Artwork 3</h2>
                         <a class="info" href="individualartwork.php">View Artwork</a>
                </div>
              </div>

              </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="hovereffect">
              <img src="images/four.png" style="height: 140px; width: 100%"/>
              <p>Valeri by Mastermind</p>

              <div class="overlay">
                       <h2>Artwork 1</h2>
                       <a class="info" href="individualartwork.php">View Artwork</a>
              </div>
            </div>
            </div>
            <div class="col-md-3">
              <div class="hovereffect">
            <img src="images/five.png" style="height: 140px; width: 100%"/>
            <p>Valeri by Mastermind</p>

            <div class="overlay">
                     <h2>Artwork </h2>
                     <a class="info" href="individualartwork.php">View Artwork</a>
            </div>
          </div>
          </div>
          <div class="col-md-3">
            <div class="hovereffect">
          <img src="images/six.png" style="height: 140px; width: 100%"/>
          <p>Valeri by Mastermind</p>

          <div class="overlay">
                   <h2>Artwork </h2>
                   <a class="info" href="individualartwork.php">View Artwork</a>
          </div>
        </div>
        </div>

        <div class="col-md-3">
          <div class="hovereffect">
        <img src="images/seven.png" style="height: 140px; width: 100%"/>
        <p>Valeri by Mastermind</p>

        <div class="overlay">
                 <h2>Artwork </h2>
                 <a class="info" href="individualartwork.php">View Artwork</a>
        </div>
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
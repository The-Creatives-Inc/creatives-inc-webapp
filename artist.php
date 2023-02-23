<<<<<<< HEAD:artist.html
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
            background: #000000;
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
  

    </style>

    <title>Artist</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
        <nav class="nav">
            <a class="nav-link" href="#">HOME</a>
            <a class="nav-link" href="#">ABOUT</a>
            <a class="nav-link" href="#">CONTACT</a>
            <a class="nav-link" href="#">PRESS</a>    
    </nav>
    </div>


    <hr class="new1">


    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <div class="grow">
              <img src="images/thirteen.jpg" class="rounded float-left" style="height: 150px; width: 80%">          
            </div>
            </div>
          <div class="col-md-2">
            <p>Pen Down <br> Category: Poetry</p>
          </div>
          <div class="col-md-2">
            <div class="grow">
              <img src="images/fourteen.jpg"  style="height: 150px; width: 100%">          
            </div>
          </div>
          <div class="col-md-2">
            <div class="grow">
              <img src="images/fifteen.jpg"  style="height: 150px; width: 100%">          
            </div>
          </div>
          <div class="col-md-3">
            <div class="grow">
              <img src="images/sixteen.jpg" style="height: 150px; width: 100%">          
            </div>
          </div>

        </div>
    </div>

    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <div class="grow">
              <img src="images/eighteen.jpg" class="rounded float-left" style="height: 150px; width: 80%">          
            </div>
          </div>
          <div class="col-md-2">
            <p>Kalers <br>
              Category: Painting</p>
          </div>
          <div class="col-md-2">
            <!-- <img src="images/hero_2.jpg" style="height: 150px; width: 100%"/> -->
          </div>
          <div class="col-md-2">
            <!-- <img src="images/hero_2.jpg" style="height: 150px; width: 100%"/> -->
          </div>
          <div class="col-md-3">
            <div class="grow">
              <img src="images/nineteen.jpg" style="height: 150px; width: 80%">          
            </div>
          </div>

        </div>
    </div>


    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <div class="grow">
              <img src="images/twenty.jpg" class="rounded float-left" style="height: 150px; width: 80%">          
            </div>
          </div>
          <div class="col-md-2">
            <p>The C_Master <br>
              Category: Digital Design</p>
          </div>
          <div class="col-md-2">
            <!-- <img src="images/hero_2.jpg" style="height: 150px; width: 100%"/> -->
          </div>
          <div class="col-md-2">
            <div class="grow">
              <img src="images/eight.png"style="height: 150px; width: 100%">          
            </div>
          </div>
          <div class="col-md-3">
            <div class="grow">
              <img src="images/sixteen.jpg" style="height: 150px; width: 100%">          
            </div>
          </div>

        </div>
    </div>

    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3 no">
            <div class="grow">
              <img src="images/eleven.png" class="rounded float-left" style="height: 150px; width: 80%">          
            </div>
          </div>
          <div class="col-md-2">
            <p>Sound of Africa <br>
              Category:  Beat Making</p>
          </div>
          <div class="col-md-2">
            <div class="grow">
              <img src="images/nine.png" style="height: 150px; width: 100%">          
            </div>
          </div>
          <div class="col-md-2">
            <div class="grow">
              <img src="images/ten.png" style="height: 150px; width: 100%">          
            </div>
          </div>
          <div class="col-md-3">
            <div class="grow">
              <img src="images/eleven.png" style="height: 150px; width: 100%">          
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
=======
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
            background: #000000;
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

    </style>

    <title>Artist</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
        <nav class="nav">
            <a class="nav-link" href="#">HOME</a>
            <a class="nav-link" href="#">ABOUT</a>
            <a class="nav-link" href="#">CONTACT</a>
            <a class="nav-link" href="#">PRESS</a>    
    </nav>
    </div>


    <hr class="new1">


    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <img src="images/eight.png" class="rounded float-left" style="height: 150px; width: 80%">          </div>
          <div class="col-md-2">
            <p>Pen Down <br> Category: Poetry</p>
          </div>
          <div class="col-md-2">
            <img src="images/fourteen.jpg" style="height: 150px; width: 100%"/>
          </div>
          <div class="col-md-2">
            <img src="images/thirteen.jpg" style="height: 150px; width: 100%"/>
          </div>
          <div class="col-md-3">
            <img src="images/twelve.jpg" style="height: 150px; width: 100%"/>
          </div>

        </div>
    </div>

    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <img src="images/nine.png" class="rounded float-left" style="height: 150px; width: 80%">          </div>
          <div class="col-md-2">
            <p>Kalers <br>
              Category: Painting</p>
          </div>
          <div class="col-md-2">
            <!-- <img src="images/hero_2.jpg" style="height: 150px; width: 100%"/> -->
          </div>
          <div class="col-md-2">
            <!-- <img src="images/hero_2.jpg" style="height: 150px; width: 100%"/> -->
          </div>
          <div class="col-md-3">
            <img src="images/fifteen.jpg" style="height: 150px; width: 100%"/>
          </div>

        </div>
    </div>


    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <img src="images/ten.png" class="rounded float-left" style="height: 150px; width: 80%">          </div>
          <div class="col-md-2">
            <p>The C_Master <br>
              Category: Digital Design</p>
          </div>
          <div class="col-md-2">
            <!-- <img src="images/hero_2.jpg" style="height: 150px; width: 100%"/> -->
          </div>
          <div class="col-md-2">
            <img src="images/sixteen.jpg" style="height: 150px; width: 100%"/>
          </div>
          <div class="col-md-3">
            <img src="images/seventeen.jpg" style="height: 150px; width: 100%"/>
          </div>

        </div>
    </div>

    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3 no">
            <img src="images/eleven.png" class="rounded float-left" style="height: 150px; width: 80%">          </div>
          <div class="col-md-2">
            <p>Sound of Africa <br>
              Category:  Beat Making</p>
          </div>
          <div class="col-md-2">
            <img src="images/eighteen.jpg" style="height: 150px; width: 100%"/>
          </div>
          <div class="col-md-2">
            <img src="images/nineteen.jpg" style="height: 150px; width: 100%"/>
          </div>
          <div class="col-md-3">
            <img src="images/twenty.jpg" style="height: 150px; width: 100%"/>
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
>>>>>>> 126800dc79c948d8d508675e9ee24d33566a5924:artist.php
</html>
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
            }
            
            #popUpYes:hover {
              background-color: rgb(0, 0, 0);
              color: white;
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
    </style>

    <title>Individual Artwork</title>
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


    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <img src="images/i1.jpg" style="height: 380px; width: 80%"> <br>
            
            <div class="row" style="margin-top: 5%;">
              <div class="col-md-6">
                <span class="material-symbols-outlined">
                  favorite 20
                  </span>
              </div>

              <div class="col-md-6">
                <span class="material-symbols-outlined">
                  ios_share 100
                  </span>
              </div>

            </div>


            <div class="row" style="margin-top: 5%;">
              <div class="col-md-12">
                <p style="font-size: 30px; text-align:center">Other Works</p>
              </div>
              <div class="col-md-3">
                <img src="images/i3.jpg" style="height: 150px; width: 80%">          
              </div>
              <div class="col-md-3">
                <img src="images/i4.jpg" style="height: 150px; width: 100%"/>
              </div>
              <div class="col-md-3">
                <img src="images/i5.jpg" style="height: 150px; width: 100%"/>
              </div>
              <div class="col-md-3">
                <img src="images/i6.jpg" style="height: 150px; width: 100%"/>
              </div>
            </div>



          </div>
          <div class="col-md-6">
            <h1>Johnny Joker   <span class="material-symbols-outlined">
              verified
              </span></h1><br>
              <!-- <img src="images/i2.jpg" class="rounded-circle" style="height: 100px; width:20%" alt="Cinque Terre">  -->
              <div class="row">
                <div class="col-md-3">
                  <img src="images/i2.jpg" class="rounded-circle" style="height: 100px; width:100%" alt="Cinque Terre"> 
                </div>
                <div class="col-md-3">
                  The Creator <br> The CMaster
                  <button type="submit" id="popUpYes">Subscribe</button>
                </div>
              </div>      
              <div class="row">
                <div class="col-md-8" id="comments">
                  <div class="material-symbols-outlined" style="text-align: center;">
                    forum
                  </div>
                    <div class="row">
                      <div class="col-md-4">
                        <img src="images/i2.jpg" class="rounded-circle" style="height: 50px; width:50%" alt="Cinque Terre"> 
                       </div>
                      <div class="col-md-8">
                        <p style="font-size: 15px;">Kofi Ankrah</p>
                        <p id="commenting">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit deleniti facere quo ut illo facilis ad molestias culpa, aperiam animi. Perferendis aliquam unde. 
                          <div class="material-symbols-outlined">
                            thumb_up
                          </div> <span style="font-size: 10px;">1</span>
                        </p>
                      </div>
                   </div>

                   <div class="row">
                    <div class="col-md-4">
                      <img src="images/i2.jpg" class="rounded-circle" style="height: 50px; width:50%" alt="Cinque Terre"> 
                     </div>
                    <div class="col-md-8">
                      <p style="font-size: 15px;">Kofi Ankrah</p>
                      <p id="commenting">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit deleniti facere quo ut illo facilis ad molestias culpa, aperiam animi. Perferendis aliquam unde. 
                        <div class="material-symbols-outlined">
                          thumb_up
                        </div> <span style="font-size: 10px;">1</span>
                      </p>
                  </div>
                 </div>

                 <div class="row">
                  <div class="col-md-4">
                    <img src="images/i2.jpg" class="rounded-circle" style="height: 50px; width:50%" alt="Cinque Terre"> 
                   </div>
                  <div class="col-md-8">
                    <p style="font-size: 15px;">Kofi Ankrah</p>
                    <p id="commenting">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit deleniti facere quo ut illo facilis ad molestias culpa, aperiam animi. Perferendis aliquam unde. 
                      <div class="material-symbols-outlined">
                        thumb_up
                      </div> <span style="font-size: 10px;">1</span>
                    </p>
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
  </body>
</html>
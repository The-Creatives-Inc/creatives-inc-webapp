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

          h3{
            color: black;
            background-color: white;
            padding: 3%;
            margin-bottom: 3%;
            text-align: center;
            font-weight: bolder;
          }

          button{
            background-color: white;
            padding-left: 35%;
            padding-right: 35%;
            padding-top: 1%;
            padding-bottom: 1%;
            border-radius: 10px;
            
          }

          #popUpYes2{
            background-color: #DF9322;
          }

          input[type="checkbox"] {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #ffffff;
            background-clip: content-box;
            padding: 3px;
        }
        
        input[type="checkbox"]:checked {
            background-color: #ffffff;
        }

        #input1[type="checkbox"] {
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #000000;
            background-clip: content-box;
            padding: 3px;
        }
        
        #input1[type="checkbox"]:checked {
            background-color: #000000;
        }


    </style>

    <title>Admin Verification</title>
  </head>
  <body>


    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h3>Verify Items Here</h3>
          </div>
        </div>
    </div>



    <div class="container nopadding">
        <div class="row">
          <div class="col-md-3">
            <img src="images/eight.png" class="rounded float-left" style="height: 150px; width: 80%">          </div>
          <div class="col-md-2">
            <p>Pen Down <br> Category: Poetry</p>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <input type="checkbox" value="Apple" />
          </div>
          <div class="col-md-2">
            <button type="submit" id="popUpYes1">Approve</button>
          </div>
          <div class="col-md-2">
            <button type="submit" id="popUpYes2">Disapprove</button>
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
          <div class="col-md-1">
        </div>
        <div class="col-md-1">
          <input type="checkbox" value="Apple" />
        </div>
        <div class="col-md-2">
          <button type="submit" id="popUpYes1">Approve</button>
        </div>
        <div class="col-md-2">
          <button type="submit" id="popUpYes2">Disapprove</button>
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
          <div class="col-md-1">
        </div>
        <div class="col-md-1">
          <input type="checkbox" value="Apple" />
        </div>
        <div class="col-md-2">
          <button type="submit" id="popUpYes1">Approve</button>
        </div>
        <div class="col-md-2">
          <button type="submit" id="popUpYes2">Disapprove</button>
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
          <div class="col-md-1">
        </div>
        <div class="col-md-1">
          <input type="checkbox" value="Apple" />
        </div>
        <div class="col-md-2">
          <button type="submit" id="popUpYes1">Approve</button>
        </div>
        <div class="col-md-2">
          <button type="submit" id="popUpYes2">Disapprove</button>
        </div>
        </div>
    </div>

    <div class="container nopadding">
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <button type="submit" id="popUpYes1">Verify All  <input type="checkbox" value="Apple" id="input1"/>
          </button>
        </div>
        <div class="col-md-4">
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
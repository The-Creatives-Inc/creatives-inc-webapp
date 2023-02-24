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
            color: #000000;
          }
          
          #popUpYes:hover {
            background-color: rgb(0, 0, 0);
            color: white;
          }

          #InputTitle{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }

          #InputDescription{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }

          #Hashtag{
            border-radius: 10px;
            background-color: black;
            color: white;
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
          
    </style>

    <title>Login</title>
  </head>
  <body>
    <h1></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 columnone" style="background-color: white; color: black;">
            <div class="row">
                <div class="col-md-12" style="background-color: rgb(255, 255, 255); color: black;">
                <img src="images/profile.webp" class="rounded-circle mb-3 center" style="width: 50%; height: 100%; text-align:center;" alt="Avatar" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background-color: rgb(255, 255, 255); color: black;">
                <h4 style="font-weight: bolder; text-align:center;margin-top: 4%; margin-bottom: 4%;">Reagon Bones</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="background-color: rgb(255, 255, 255); color: black; padding-bottom: 7%">
                    <form>
                        <div class="form-group" style="text-align: left;">
                          <label for="">Title</label>
                          <input style="width: 480px;" type="text" class="form-control" id="InputTitle" name="email" placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label for="">Description</label>
                          <textarea class="form-control" id="InputDescription" rows="4"></textarea>                        
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="">Hashtag</label>
                            <input style="width: 480px;" type="text" class="form-control" id="Hashtag" name="email" placeholder="Hashtag">
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    
        <div class="col-md-8 columnone" style="text-align: center;">
        <h4 style="margin-bottom: 3%;">Add Document</h4>
            <div class="upload-section" style="margin-bottom: 3%;">
            <div class="icon" style="margin-bottom: 5%; margin-top:5%">
                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                  </svg>    
            </div>
              <h6>Drag and Drop Here </h6>
              <h6>Or</h6>
              <input type="file" id="myfile" name="myfile">
             <div class="progress" style="margin-bottom: 10%; margin-top:10%">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                aria-valuemin="0" aria-valuemax="100" style="width:60%;">
                  60% Complete (warning)
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" id="popUpYes" name="login" disabled>Done</button>
                </div>
                <div class="col-md-6">
                    <button type="submit" id="popUpYes" name="login" disabled>Cancel</button>
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
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
        .nav {
            border-radius: 0;
            background-color: black;
            color: white;
            border-color: white;
            text-align: center;
            justify-content: center;
          }
          
          .main-nav-info{
            text-align: center;
            font-family: 'Montserrat', sans-serif;
          }

          .nav a{
              padding-bottom: 10px;
              margin-left: 15px;
              position: relative;
              text-decoration: none;
              color: white;
          }
          
          form{
            margin-left: 35%;
            margin-right: 35%;
          }
         
          label{
            margin-top: 1%;
          }
         
          input{
            margin-top: 1%;
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

          .form-control{
            border-radius: 10px;
            background-color: black;
            color: white;
          }
          
          h4{
            text-align: right;
            margin-right: 20%;
          }
          
          form button#popUpYes{
            text-align: center;
            justify-items: center;
            padding-left: 20%;
            padding-right: 20%;
          }
          
          .container {
            align-items: center;
            justify-content: center;
          }
    </style>

    <title>Sign Up</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
    <h4><a href="signup.php" style="color: white; font-family: 'Croissant One', cursive;">X</a></h4>
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>  
        </nav>
    </div>

    <form>
        <div class="form-group">
            <label for="name">Organization name</label>
            <input type="text" class="form-control" placeholder="">
        </div>  
        <div class="form-group">
          <label for="desc">Description</label>
          <input type="text" class="form-control"  placeholder="">
        </div> 
        <div class="form-group">
          <label for="">Add image</label>
          <input type="file" class="form-control" accept="image/*" placeholder="Select image">
        </div> 
        <div class="form-group">
          <select name="" id="">
            <option value=""selected disabled>Country</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
            <option value="">Ghana</option>
          </select>
          <input type="text" class="form-control" value="+233">
        </div> 
        <div class="form-group float-none">
          <label for="address">Address</label>
          <input type="address" class="form-control" placeholder="">
        </div> 
           
        <button type="submit" id="popUpYes">Almost There</button>
      </form>
      
      




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
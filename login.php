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
            margin-top: 6%;
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
            text-align: center;
            margin-left: 35%;
            margin-right: 35%;
          }
         
          label{
            margin-top: 3%;
          }
         
          input{
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

          #exampleInputEmail1{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }

          #exampleInputPassword1{
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
          }

          .help-block {
            font-size: 10px;
          }
          
    </style>

    <title>Login</title>
  </head>
  <body>
    <h1></h1>
    <div class="main-nav">
        <nav class="nav">
            <a class="nav-link" href="#"><h1>The Creative</h1></a>    
    </nav>
    </div>

    <div class="main-nav-info">
            <h4>New? Create an account <a href="signup.php" style="color: white; text-decoration:underline; font-family: 'Croissant One', cursive;">here</a></h4>    
    </div>



    <form action="login_proc.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <p class="help-block">
              <input type="checkbox" name="policy" id="accept"> By using The Creative, you agree to our Privacy Policy and Terms of Use.</p>
          </div>
        <button type="submit" id="popUpYes" name="login" disabled>Login</button>
    </form>
      
      




      </div>
      <script type="text/javascript">
        const acceptBox = document.getElementById("accept");
        const btn = document.getElementById("popUpYes");
        const email = document.getElementById("exampleInputEmail1");
        const password = document.getElementById("exampleInputPassword1");
        const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        // const passwordRegex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
        const passwordRegex = /^[0-9]{3}/;

        acceptBox.addEventListener("change", (e) => {
          e.preventDefault();
          if(acceptBox.checked) {

            if (emailRegex.test(email.value) && passwordRegex.test(password.value)) 
            {
              email.style.border = "green solid 2px";
              password.style.border = "green solid 2px";
              btn.removeAttribute("disabled");
            } 
            else 
            {
              if (emailRegex.test(email.value) && !passwordRegex.test(password.value)) {
                email.style.border = "green solid 2px";
                password.style.border = "red solid 2px";         
              }
              else if (!emailRegex.test(email.value) && passwordRegex.test(password.value)) {
                email.style.border = "red solid 2px";
                password.style.border = "green solid 2px";
              }
              else {
                  email.style.border = "red solid 2px";
                  password.style.border = "red solid 2px";
              }
              btn.disabled = "disabled";
              acceptBox.checked = false;
            }
            
          } else {
            btn.disabled = "disabled";

          }

          

        })

        
      </script>
    </body>
  </html>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
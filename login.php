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
      <h4>New? Create an account <a href="" style="color: white; text-decoration:underline; font-family: 'Croissant One', cursive;">here</a></h4>    
    </div>



    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <p class="help-block"><input type="checkbox"> By using The Creative, you agree to our Privacy Policy and Terms of Use.</p>
        </div>
        <button type="submit" id="popUpYes">Submit</button>
    </form>
      
      <script type="text/javascript">
  		
  			//collect form data
  			let user_email = document.getElementById('uemail');
  			let user_pass = document.getElementById('upass');
  			let button = document.getElementById('login');
  			
  			button.addeventListener('click', validatepost);
  		
  			function validatepost(){
  				
  				
  				//validate email field
  				const password_regex = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  	      const email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  	            
  	            
  	      if(email_regex.test(user_email.value)){
		          alert('email is valid');
		            
		          if(password_regex.test(user_pass.value)){
			            alert('password is valid');
			            handleAjax();
				      }
				      else{
				        alert('password is invalid');
				        return false
			        }
			    }
			    else{
			        alert('email is invalid');
			        return false;
			    }
  			    
  				
  				//make http post to backend register_proc.php
  				const xhttp = new XMLHttpRequest();
  				
  				//handles ajax request
  				function handleAjax(){
  					xhttp.onreadystatechange = handler;
  					xhttp.open("GET", "login_proc.php?uemail="+user_email.value+"&upass="+user_pass.value+"&login="+login.value, true);
  					
  					// define POST parameters
  					const params = `uemail=${uemail.value}&upass=${upass.value}&register=${btn}`;
  
  					// set the header
  					ajax.setRequestHeader(
  						"Content-Type",
  						"application/x-www-form-urlencoded"
  					);
  					
  					// call our send method
  					ajax.send(params);	
  			}	
  			
  			function handler(){
  				if (httpRequest.readyState === XMLHttpRequest.DONE) {
  				  // check status code
  				    if (httpRequest.status === 200) {
  					  // Perfect!
  					  alert('record added successfully');
  					  document.location.href = 'register.php';
  					} else {
  					  // There was a problem with the request.
  					  // For example, the response may have a 404 (Not Found)
  					  // or 500 (Internal Server Error) response code.
  					  alert('Response went wrong');
  					}
  				} else {
  				  // Not ready yet.
  				  alert('Request not sent!');
  				}
  			}
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
<?php
  session_start(); // Session starts here.
  $_SESSION["page"] = "adminverification.php";
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
            background: #000000;
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
          padding: 2% 0;
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
            font-size: 1.2em;
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
          
          #current{
          color: #DF9322;
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
          
          #popUpYes2:hover{
            background-color: white;
          }
                   
          
          #popUpYes1:hover{
            background-color: #DF9322;
          }
          
          #check-all{
            display: flex;
            text-align: center;
            margin: 50px auto;
            justify-content: center;
          }      
          
          #check-all input{
            height: 35px;
            width: 30px;
          }
          
          #myTab{
            display: flex;
            justify-content: center;
          }
          
          #myTab span{
              display: inline-block;
              background-color: white;
              border-radius: 10px;
              padding: 7px 20px;
              margin: 0 20px 50px 0;
              
            }
            
            #myTab span:hover{
              background-color: black;  
            }
            
            #myTab span a{
              color: black;
            }
            
            #myTab span a:hover{
              color:#DF9322;
              text-decoration: none;
            }
    </style>

    <title>Admin Verification</title>
  </head>
  <body>
  <div class="main-nav">
    <nav class="nav">
      <a class="nav-link" href="index.php">HOME</a>
      <a class="nav-link" href="about.php">ABOUT</a>
      <a class="nav-link" href="artist.php">ARTISTS</a>
      <a class="nav-link" href="index.php#last-arrow">CONTACT</a>
      <?php
        if (!empty($_SESSION['userID']) && $_SESSION['isAdmin'] == 1) {
         echo ("<a class='nav-link' href='adminverification.php' id='current'>ADMIN</a>");
        }  else{
          header ("location: index.php");
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
          <div class="col-md-12">
            <h3>Verify Items Here</h3>
          </div>
        </div>
    </div>
    

    <div class="container nopadding">
        <div role="tablist" id='myTab'>
          <span class="nav-item" role="presentation">
            <a 
              id='home-tab' 
              data-toggle='tab'
              href='#home' 
              role='tab' 
              aria-controls='home'
              aria-selected='true'>Unverified Arts</a>
          </span>
          <span class='nav-item' role='presentation'><a 
            id='profile-tab' 
            data-toggle='tab'
            href='#profile' 
            role='tab' 
            aria-controls='profile'
            aria-selected='false'>Users</a>
          </span>
        </div>
        
        <div class="tab-content" id="myTabContent">
          <!-- 1 -->
          <!-- <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab"> -->
          <div>
            <div class="row">
            <?php
              require_once('configuration.php');
              
              $query2 = "SELECT artworkID, link, artworkTitle, field_name, signature_name FROM artwork INNER JOIN link ON link.linkID = artwork.artworkID
              INNER JOIN artist ON artwork.artistID = artist.artistID INNER JOIN field ON artwork.fieldID=field.fieldID WHERE artwork.status = 0";
              
              $result2 = $conn->query($query2);
              
              if($result2->num_rows > 0){
                  $options2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
              }
              
              if($result2->num_rows){
              
              for ($z = 0; $z < count($options2); $z++){ 
            ?>
              <div class="col-md-3">
                <img src="<?= $options1[$z]['link']; ?>" class="rounded float-left" style="height: 150px; width: 80%">       
              </div>
              <div class="col-md-2">
                <p>"<?= $options1[$z]['artworkTitle']; ?>" <br> Category: "<?= $options1[$z]['field_name']; ?>" <br> by "<?= $options1[$z]['signature_name']; ?>"</p>
              </div>
              <div class="col-md-1">
              </div>
              <div class="col-md-1">
                <input type="checkbox" value="Apple">
              </div>
              <div class="col-md-2">
                <button type="submit" id="popUpYes1" value="<?= $options1[$z]['artworkID']; ?> 1">Approve</button>
              </div>
              <div class="col-md-2">
                <button type="submit" id="popUpYes2" value="<?= $options1[$z]['artworkID']; ?> 2">Disapprove</button>
              </div>
              </div>
            
            <?php }} ?> 

            </div>
          </div>
          
          <!-- 2 -->
          <!-- <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab"> -->
          <div>
              <?php
                $query = "SELECT * FROM users INNER JOIN field ON users.fieldID = field.fieldID INNER JOIN country ON country.countryID = users.countryID = country.countryID;";
                $result = $conn->query($query);
              
              if($result->num_rows > 0){
                  $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
              }
              
              for ($x = 0; $x < count($options); $x++){ 
              ?> 
              
              <div>
                  <?php  
                    if(!$options[$x]['image']){
                      echo '<img src="artists/profile.png" class="rounded-circle" style="height: 100px; width:100px" alt="Cinque Terre">';
                    } else{
                      echo '<img src="'.$options[$x]['image'].'" class="rounded-circle" style="height: 100px; width:100px" alt="Cinque Terre">';
                    }
                  ?> 
                <p><?= $options[$x]['email'];?></p>
                <p><?= $options[$x]['phone_number'];?></p>
                <p><?= $options[$x]['date_joined'];?></p>
                <p><?= $options[$x]['country_name'];?></p>
                <p><?= $options[$x]['field_name'];?></p>     
              </div>
              <?php } ?>
          </div>          
        </div>
      </div>
    </div>
    
    <!-- <div id='check-all'>
      <input type="checkbox" name = 'all' value=''>
      <label for="all" class="col-sm-2 col-form-label">Select all users</label>
    </div> -->
    

    <!-- <div class="container nopadding">
        <div class="row">
          <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <button type="submit" id="popUpYes1">Verify All</button>
        </div>
        <div class="col-md-4">
        </div>  
        </div> 
    </div>-->
  


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
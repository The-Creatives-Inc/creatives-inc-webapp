<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Creative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" /> </head>
  <style>
    .material-symbols-outlined {
      color: black;
      background-color: white;
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 48
    }
    *{
      /* width: 100%; */
      font-family: 'Montserrat', sans-serif;
      background-color: rgb(0, 0, 0);
      
  }
  
  body {
    margin-bottom: 0%;
    background-color: 0%;
    padding-bottom: 0%;
  }
  .nav {
    margin-top: 6%;
    margin-bottom: 3%;
    border-radius: 0;
    background-color: black;
    color: white;
    border-color: white;
    font-family: 'Fira Sans', sans-serif;
    text-align: center;
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
  
  #main-img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
    margin-bottom: -50px;
    
  }
  
  .search-container{
    display: block;
    margin-left: 25%;
    margin-top: 10px;
    display: -ms-flexbox; 
    display: flex;
    width: 50%;
    position: relative;
  }
  
  .search-container i{
    position:absolute;
    display:inline-block;
    width: 22px;
    height:30px;
    top: 8px;
    right: 10px;
  }
  
  .input {
    display: inline-block;
  }
  
  #site-search{
    width: 100%;
    padding: 10px;
    border-radius: 15px;
    text-align: center;
    background-color: white;
    color: black;
    margin-bottom: 200px;
  }
  
  .small-about{
    margin-top: 15%;
    text-align: center;
    padding: 5%;
    color: white;
    padding-left: 25%;
    padding-right: 25%;
  }
  
  
  .second-nav {
    margin-top: 2%;
    margin-bottom: 20%;
    border-radius: 0;
    background-color: white;
    color: black;
    border-color: white;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    padding-bottom: 2%;
  }
  
  .second-nav a{
    padding-bottom: 10px;
    margin-left: 15px;
    position: relative;
    text-decoration: none;
    color: black;
  }
  
  .second-nav a::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 2.2px;
    border-radius: 40px;
    background-color: rgb(0, 0, 0);
    bottom: 0;
    left: 0;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .2s ease-in-out;
  }
  
  .second-nav a:hover::before {
    transform-origin: left;
    transform: scaleX(1);
  }
  
  hr.new1 {
    border: 3px solid white;
    margin-top: 30px;
  }
  
  
    </style>
<body>
<div class="main-content">
    <nav class="nav">
        <a class="nav-link" href="#">HOME</a>
        <a class="nav-link" href="#">ABOUT</a>
        <a class="nav-link" href="#">CONTACT</a>
        <a class="nav-link" href="#">PRESS</a>
    </nav>
    <img src="images/black background.png" id="main-img" class="rounded mx-auto d-block" alt="...">
    <div class="search-container">
      <i class="material-symbols-outlined">search</i>
      <input type="search" id="site-search" name="search" placeholder="Search this space">  
    </div>
    
</div>

<div class="small-about">
  <h3>Who we are</h3>
  <p>The Creative platform will provide arts activists with a secure and safe space to save and showcase their art pieces without fear of losing them or piracy. It will also help them meet with promoters, viewers, and customers.</p>
</div>

<div class="second-nav">
    <a class="nav-link" href="#">HOME</a>
    <a class="nav-link" href="#">ABOUT</a>
    <a class="nav-link" href="#">CONTACT</a>
    <a class="nav-link" href="#">PRESS</a>
</div>



  <!-- <div class="jumbotron" id="ctn">
  <div class="container-fluid">
    <h1>My Portfolio</h1>      
    <p>Some text that represents "Me"...</p>
  </div>
</div> -->
  
<!-- <div class="container-fluid bg-3 text-center">    
    <h5>Artist</h5>
    <div class="col-sm-4">
      <img src="images/hero_1.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit tempore consequuntur eligendi quia hic quis, officiis amet praesentium aliquam, accusamus impedit molestias ducimus perferendis! Vero voluptatum nulla alias neque placeat!</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/hero_2.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, ipsam quo. Aliquam pariatur nam ex minus dolorem veritatis sapiente eius animi expedita enim, modi ad cumque sequi hic. Perferendis, iste.</p>
    </div>
    <div class="col-sm-4"> 
      <img src="images/hero_3.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ducimus optio rem maiores provident nam temporibus placeat! Quis odio, vitae fugiat reprehenderit ut repellendus nesciunt culpa eius dignissimos, laboriosam unde.</p>
    </div>
  </div>
</div><br>
<div class="container-fluid bg-3 text-center">    
    <div class="row">
      <div class="col-sm-4">
        <img src="images/hero_1.jpg" class="img-responsive" style="width:100%" alt="Image">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos sed exercitationem ipsam cum vel nemo ipsum mollitia in dicta suscipit vitae assumenda id officiis facere atque, natus, omnis iusto harum?</p>
      </div>
      <div class="col-sm-4"> 
        <img src="images/hero_2.jpg" class="img-responsive" style="width:100%" alt="Image">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aperiam quae, esse dolores necessitatibus sapiente laudantium eum accusantium obcaecati, quo iusto incidunt perferendis ex voluptatibus facilis impedit alias, sunt cum?</p>
      </div>
      <div class="col-sm-4"> 
        <img src="images/hero_3.jpg" class="img-responsive" style="width:100%" alt="Image">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic tempora voluptatem qui impedit odit natus doloremque, libero, deleniti voluptas, nostrum saepe corporis. Iste delectus magni ipsa impedit, officiis natus sint?</p>
      </div>
    </div>
  </div><br>
  

</div><br><br>
<div class="jumbotron" id="ctn2">
    <div class="container-fluid">
      <h1>My Portfolio</h1>      
      <p>Some text that represents "Me"...</p>
    </div>
  </div>
</div> -->
<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->

</body>
</html>

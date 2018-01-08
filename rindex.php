<!DOCTYPE html>
<html lang="en">
<title>BOOK STORE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('/w3images/forestbridge.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>


	
	<!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="rhome.php" class="w3-button w3-bar-item">Home</a>
  <a href="rabout.php" class="w3-button w3-bar-item">About</a>
  <a href="rproducts.php" class="w3-button w3-bar-item">Products/Services</a>
  <a href="rnews.php" class="w3-button w3-bar-item">News</a>
  <a href="rcontacts.php" class="w3-button w3-bar-item">Contacts</a>
  
  
   <a href="rregister.php" class="w3-button w3-bar-item">Register </a>
   <a href="rUserdata.php" class="w3-button w3-bar-item">Total Users</a>
   <?php
              session_start();
              if(isset($_SESSION['login_user'])){
          ?>
         
          <a href="php/rlogout.php" class="w3-button w3-bar-item">Logout</a>
          
          <?php
              }
              else{
          ?>
          
         <a href="ruserlogin.php" class="w3-button w3-bar-item">Secure</a>
          <?php 
              }
          ?>
   
   

 </nav>

<body>


<style> 
#boxshadow {
    position: relative;
    -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    background: grey;
}

/* Make the image fit the box */
#boxshadow img {
    width: 100%;
    border: 1px solid #8a4419;
    border-style: inset;
}

#boxshadow::after {
    content: '';
    position: absolute;
    z-index: -1; /* hide shadow behind image */
    -webkit-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);                
    width: 70%; 
    left: 15%; /* one half of the remaining 30% */
    height: 100px;
    bottom: 0;
}
</style>

<body>

<div id="boxshadow">
  <img src="./images/img1.jpg" alt="/images/img1.jpg" width="600" height="400">
</div>

</body>
</body>
</html>

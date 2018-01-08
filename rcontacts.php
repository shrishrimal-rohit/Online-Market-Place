<!DOCTYPE html>

<html>
<title>Online Store</title>
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
 
   <a href="ruserlogin.php" class="w3-button w3-bar-item">Secure</a>
   <a href="rregister.php" class="w3-button w3-bar-item">Register </a>
   <a href="rUserdata.php" class="w3-button w3-bar-item">Total Users</a>

</nav>

<body>
	<html>
	<head>
		<title>HOME PAGE</title>
	</head>
<?php
 $file = "test.txt";
$f = fopen($file, "r") or exit("Unable to open file!");
// read file line by line until the end of file (feof)
while(!feof($f))
{
  echo fgets($f)."<br />";
}
 
fclose($f);
?>	
 </p1>

</html>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    Logo
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">35 days left</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
   
  </div>
</div>

</body>
</html>



















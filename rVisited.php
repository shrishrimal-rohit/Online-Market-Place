<!DOCTYPE html>
<html>
<title>BOOK Store</title>
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

</html>
<?php
			if(isset($_COOKIE['number'])){
				
				$x = $_COOKIE['number'];
				for($i=5;$i>0;$i--){
					
					if(isset($_COOKIE[$x])){
						print '<br>'.$_COOKIE[$x];
					}
					$x = ($x==1)? 5 : ($x-1);
				}
			}
			else{
				print "<br>No Pages Visited Yet";
			}
			
		?>



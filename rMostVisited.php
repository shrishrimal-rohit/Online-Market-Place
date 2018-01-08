
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
</head>
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
</head>
</html>

<?php
			$books = array('p1'=>'Together with Mathematics','p2'=>'LET US C','p3'=>'JAVA FOR BEGINEERS','p4'=>'CORE JAVA','p5'=>'HTML BASICS','p6'=>'Programming in C++','p7'=>'DATABASE SYSTEMS','p8'=>'OS FUNDAMENTALS','p9'=>'MICROPROCESSOR AND INTERFACES','p10'=>'Machine Learning');
			foreach($_COOKIE as $key=>$value){
				if(array_key_exists($key, $books)){
					$arr[$books[$key]] = $value;	
				}
			}
			if(empty($arr)){
				print "<br>No Pages Visited Yet";
			}
			else{
				arsort($arr);
				//print_r ($arr);
				$i=0;
				foreach($arr as $key=>$value){
					print "<br>";
					print $key.' Books page: visited '.$value.' times';
					$i++;
					if($i==5) break;
				}
			}
			
		?>		
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Garage  Collection</title>
	<link rel="shortcut icon" type="image/png" href-"image\logo1.png"/>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +66666666 </li>
			</ul>
			<ul class="logreg">
				<li><a href="userSignup.php">Search Users </a> </li>
				<li><a href="#"<span class="register">Register</span></a></li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a><h1>GC</h1></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="#">HOME</a> </li>
				<li>
					<a href="about.html">About Us</a>
 
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS<span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="sports.php">Sports</a></li>
						<li><a href="old.php">Old</a></li>
						<li><a href="new.php">New</a></li>
						<li><a href="compact.php">Compact</a></li>
						<li><a href="sedan.php">Sedan</a></li>
						<li><a href="crossover.php">Crossover</a></li>
						<li><a href="hatchback.php">Hatchback</a></li>
						<li><a href="convertible.php">Convertible</a></li>
						<li><a href="concept.php">Concept</a></li>
						<li><a href="supercar.php">Supercar</a></li>
					</ul>
				</li>
				
				<li>
					<a href="news.html">News</a>
 
				</li>
				<li>
					<a href="contact.php">CONTACT</a>
 
				</li>
				<li class="active"><a href="last.php">Last Visited</a> </li>
					<li class="active"><a href="most.php">Most Visited</a> </li>
				<button><a href="register.php" class="postnewcar">Admin</a></button>
			</ul>
		</div>
	</nav>
</div>
<div class="container">
    <div class="left" style="float: left;display: inline">
        <h4>User Sign Up!!</h4>
    <form method="post" action="afterUserSignup.php">
      <div class="form-group">
        <label for="name">FirstName:</label>
        <input type="text" class="form-control" name="FirstName" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">LastName:</label>
        <input type="text" class="form-control" name="LastName" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" class="form-control" name="Email" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="Password" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">Address:</label>
        <input type="text" class="form-control" name="Address" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">HomePhone:</label>
        <input type="text" class="form-control" name="HomePhone" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">CellPhone:</label>
        <input type="text" class="form-control" name="CellPhone" style="width: 500px;">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
    <div class="right" style="float: right; display: inline">
    <h4>Search for a user using FirstName</h4>
<form method="post" action="searchUserFirstName.php">
    <div class="form-group">
      <label for="name">Enter FirstName:</label>
      <input type="text" class="form-control" name="searchFirstName" style="width: 500px;">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>

<h4>Search for a user using Email</h4>
<form method="post" action="searchUserEmail.php">
<div class="form-group">
  <label for="name">Enter Email:</label>
  <input type="text" class="form-control" name="searchEmail" style="width: 500px;">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>

<h4>Search for a user using Phone Number</h4>
<form method="post" action="searchUserPhone.php">
<div class="form-group">
  <label for="name">Enter Phone Number:</label>
  <input type="text" class="form-control" name="searchPhone" style="width: 500px;">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>
</div>

</div>
  </body>
  </html>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up form</title>
  	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">

<link rel="stylesheet" href="style1.css" />
<link href="css0/style.css" rel="stylesheet"/>
  
  
      <link rel="stylesheet" href="style2.css">

  
</head>

<body>

<section style="border-bottom: 1px solid;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg  navigation">
					<a class="navbar-brand" href="index.html">
						<h3 style="color: blue;">SRVS MarketPlace</h3>
						
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">About US</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Partners<span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="vindex.php">FoodVilla Site</a>
									<a class="dropdown-item" href="indexs.html">Garadge Site</a>
									<a class="dropdown-item" href="home.html">Hotel Site</a>
									<a class="dropdown-item" href="indexsh.php">Sportsplay</a>

								</div>
							</li>
							
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link add-button" href="login.php">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link add-button" href="signup.php"></i> Sign Up</a>
							</li>
                                                        <li class="nav-item" style="margin-left:10">
								<a class="nav-link add-button" href="add_to_cart.php"></i> Cart</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>


<br/>



  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    <form method="POST" action="signmeup.php">
	    <input type="text" name="firstName" placeholder="First Name" />
	    <input type="text" name="lastName" placeholder="Last Name" />
	    <input type="text" name="email" placeholder="E-mail" />
	    <input type="password" name="password" placeholder="Password" />
    
    <input type="submit" name="signup_submit" value="Sign me up" />
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Register with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
   <a href="googlelogin_index.php"> <button class="social-signin google" >Log in with Google+</button></a>
  </div>
  <div class="or">OR</div>
</div>
  
  
</body>
</html>

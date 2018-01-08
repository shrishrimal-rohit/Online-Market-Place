<?php
    setcookie('concept', isset($_COOKIE['concept']) ? ++$_COOKIE['concept'] : 1,time()+60*60,"/");
    if(isset($_COOKIE['counter'])){
    	$c=$_COOKIE['counter'];
    	$c++;
    	if($c>5) $c=1;
    }
    else{
    	$c=1;
    }
    setcookie('counter',$c,time()+60*60*24,"/");
    setcookie($c,"Concept Cars",time()+60*60,"/");

    setcookie('shanproduct9', isset($_COOKIE['shanproduct9']) ? ++$_COOKIE['shanproduct9'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Concept Cars",time()+60*60*30*24,"/");

?>



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
				<li><a href="#">Login </a> </li>
				<li><a href="#"><span class="register">Register</span></a></li>
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
				<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
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
						<li><a href="olds.php">Old</a></li>
						<li><a href="news.php">New</a></li>
						<li><a href="compacts.php">Compact</a></li>
						<li><a href="sedans.php">Sedan</a></li>
						<li><a href="crossovers.php">Crossover</a></li>
						<li><a href="hatchbacks.php">Hatchback</a></li>
						<li><a href="convertibles.php">Convertible</a></li>
						<li><a href="concepts.php">Concept</a></li>
						<li><a href="supercars.php">Supercar</a></li>
					</ul>
				</li>

				<li>
					<a href="news.html">News</a>

				</li>
				<li>
					<a href="contacts.php">CONTACT</a>

				</li>
				<li class="active"><a href="lasts.php">Last Visited</a> </li>
					<li class="active"><a href="mosts.php">Most Visited</a> </li>
				<button><a href="registers.php" class="postnewcar">Admin</a></button>
			</ul>
		</div>
	</nav>
</div>

<!-- ____________________News Section ______________________________-->
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>C O N C E P T<span class="carstxt"> C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow">
			<div class="col-lg-12 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="image/car2.jpg" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>THE NEW 718 CONCEPT CAR</h1>
							<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt </p>
			 				<h2>Price &euro;</h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>Car Name</h1>
			 						<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
			 						sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
			 						</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
  <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true" class="fa fa-twitter" >tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>

<div id="center_button">
    <button onclick="location.href='https://plus.google.com/share?url=http://guptashantanu.com/supercars.php'"><img src="images1/glogin.png" alt="" width="300" height="100"/></button> 

	<?php
                    $servername = "localhost";
                    $username = "cmperoot";
                    $password = "password";
                    $dbname = "CMP272";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $result = mysqli_query($conn,"SELECT * FROM ProdReviews WHERE P_Id='shan10'");

                    while($row = mysqli_fetch_array($result))
                    {
                        if($row['ProdRating'] == "one")
                        {
                            $rating = "1";
                        }
                        if($row['ProdRating'] == "two")
                        {
                            $rating = "2";
                        }
                        if($row['ProdRating'] == "three")
                        {
                            $rating = "3";
                        }
                        if($row['ProdRating'] == "four")
                        {
                            $rating = "4";
                        }
                        if($row['ProdRating'] == "five")
                        {
                            $rating = "5";
                        }

    ?>
                    <h4 style="margin-left: 20px;">Top Reviews</h4>
                        <div class="container-fluid">

                        <div class="abc" style="width: 100%;border: 1px solid;height: 110;padding: 20px;margin-top: 5px;"><?php echo "UserName: <strong>". $row['reviewEmail']; echo "</strong><br/> Review: <strong>&nbsp:&nbsp;&nbsp;"; echo $row['ProdReview']; echo "</strong><br/> Rating: <strong>&nbsp:&nbsp;&nbsp;"; echo $rating; ?></strong></div>
                        </div>

                <?php
                    }
    ?>
    <hr/>
                <h3 style="text-decoration: underline;"> Leave a Review..</h3>
                  <form method="POST" action="processReviewShan1.php" style="margin-left: 20px;">
                      <div class="form-group">
                        <label for="exampleInputEmail1">User Name</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter email id">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Your Review</label>
                        <input type="text" class="form-control" name="review" id="review" placeholder="Enter your review">
                      </div>


                      <legend>Your Rating: </legend>

                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="rating" id="optionsRadios1" value="one" checked>
                              One
                            </label>
                          </div>
                          <div class="form-check">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="rating" id="optionsRadios2" value="two">
                              Two
                            </label>
                          </div>
                          <div class="form-check">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="rating" id="optionsRadios3" value="three" >
                              Three
                            </label>
                          </div>
                          <div class="form-check">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="rating" id="optionsRadios4" value="four">
                              Four
                            </label>
                          </div>
                          <div class="form-check">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="rating" id="optionsRadios5" value="five">
                              Five
                            </label>
                          </div>
                          <button type="submit" style="height: 40px;text-align: center;background-color: gray;color: black;width: 100px;border-radius: 4px;">Submit</button>
                          </form>
                      </legend>


	<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>
<?php
    setcookie('product11', isset($_COOKIE['product11']) ? ++$_COOKIE['product11'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Dryfit Trackpant",time()+60*60*30*24,"/");

    setcookie('shaproduct11', isset($_COOKIE['shaproduct11']) ? ++$_COOKIE['shaproduct11'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"DryFit Trackpant",time()+60*60*30*24,"/");

?>

<html>
	<head>
		<title>sportsplay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<div class="row">
							<div class="12u">

								<!-- Logo -->
									<h1><a href="#" id="logo">sportsplay</a></h1>

								<!-- Nav -->
								<nav id="nav" style="font-size: 12px;">
									<a href="index.php">Home</a>
									<a href="#">About Us</a>
									<a href="products.php">Products</a>
									<a href="contactus.php">Contact Us</a>
									<a href="admin.php">Secure Section</a>
									<a href="Last_five.php">Last 5 Products</a>
									<a href="Most_Visited.php">Most Visited Products</a>
									<a href="userSignup.php">User</a>
								</nav>

							</div>
						</div>
					</header>
				</div>

			<!-- Content -->
				<div id="content-wrapper">
					<div id="content">
						<div class="container">
							<div class="row">
								<div class="12u">

									<!-- Main Content -->
										<section>
											<header>
													<h2>Product Description</h2>
												<hr>
											</header>
										<h2> A brief description about the product.</h2>
                    <img src="images/11.jpeg">
                    <h3> Product id: 011 </h3>
                    <h3> Product Name: DryFit Trackpant </h3>
                    <h3> Product Brand: Dryfit </h3>
                    <h3> Price: $80 </h3>

										</section>

								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
      <div id="footer-wrapper">
        <footer id="footer" class="container">
          <div class="row">
            <div class="8u 12u(mobile)">
            <!-- Links -->
            </div>
            <div class="4u 12u(mobile)">
              <!-- Blurb -->
            </div>
          </div>
        </footer>
      </div>

    <!-- Copyright -->
      <div id="copyright">

      </div>

  </div>
  <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" class="fa fa-twitter" >Tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>

  <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/skel-viewport.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>
</html>
1
<!DOCTYPE HTML>
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

												<hr>
											</header>
                      <h3>
						  <?php
  									$sports = array('product1'=>'Adidas Shoes','product2'=>'HRX Shoes','product3'=>'Manchester United Jersey','product4'=>'Skateboard','product5'=>'BaseBall Bat','product6'=>'Soccer Ball Adidas','product7'=>'Soccer Ball Nike','product8'=>'Mountain Bike','product9'=>'Regular Bike','product10'=>'Dumbell 20kg', 'product11'=>'DryFit Trackpant', 'product12'=>'Football');
  									foreach($_COOKIE as $key=>$value){
  										if(array_key_exists($key, $sports)){
  											$arr3[$sports[$key]] = $value;
  										}
  									}
  									if(empty($arr3)){
  										print "<br>No Pages Visited Yet";
  									}
  									else{
  										arsort($arr3);
  										//print_r ($arr);
  										$i=0;
  										foreach($arr3 as $key=>$value){
  											print "<br>";
  											print $key.' Sports page: visited '.$value.' times';
  											$i++;
  											if($i==4) break;
  										}
  									}

  								?>
                      </h3>
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

  <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/skel-viewport.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>
</html>

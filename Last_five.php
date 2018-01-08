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
												<h2>Last past 5 Products seen by the User:</h2>
												<hr>
											</header>
                      <h3>
                        <?php
                        $dat=$_COOKIE['visited'];
                        $data=unserialize($dat);
                        $len = sizeof($data);
                        $count=1;
                        for($x=$len-1;$x>0;$x--)
                        {
                          if($count <= 5) {
                          echo $data[$x];
                          echo "<br>";
                          $count++;
                        }
                        else {
                          break;
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

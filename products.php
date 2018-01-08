<?php
if(!isset($_COOKIE['visited']))
{
$cookie_name = "visited";
$value=array('products.php');
$value1=serialize($value);
setcookie($cookie_name, $value1, time() + (86400 * 30), "/");
}
else {
}

if(!isset($_COOKIE['count']))
{
$cookie_name = "count";
$one = 0;
$two = 0;
$three = 0;
$four = 0;
$five = 0;
$six = 0;
$seven = 0;
$eight = 0;
$nine = 0;
$ten = 0;
$eleven = 0;
$twelve = 0;
$value=array($one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$eleven,$twelve);
$value1=serialize($value);
setcookie($cookie_name, $value1, time() + (86400 * 30), "/");
}
else {
}
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
												<h2><strong>List of Products</strong></h2>
												<hr>
											</header>

                     <div id="container" style="padding: 10px;">
                        <div style="background-image:url('images/1.jpeg');border: 1px solid orange;"><a href="product1.php"><button>Product 1</button></a></div>
                        <div style="background-image:url('images/2.jpeg');border: 1px solid orange;"><a href="product2.php"><button>Product 2</button></a></div>
                        <div style="background-image:url('images/3.jpeg');border: 1px solid orange;"><a href="product3.php"><button>Product 3</button></a></div>
                        <div style="background-image:url('images/4.jpeg');border: 1px solid orange;"><a href="product4.php"><button>Product 4</button></a></div> <span></span>
                    </div>
                    <div id="container" style="margin-top: 20px;">
                       <div style="background-image:url('images/5.jpeg');border: 1px solid orange;"><a href="product5.php"><button>Product 5</button></a></div>
                       <div style="background-image:url('images/6.jpeg');border: 1px solid orange;"><a href="product6.php"><button>Product 6</button></a></div>
                       <div style="background-image:url('images/7.jpeg');border: 1px solid orange;"><a href="product7.php"><button>Product 7</button></a></div>
                       <div style="background-image:url('images/8.jpeg');border: 1px solid orange;"><a href="product8.php"><button>Product 8</button></a></div> <span></span>
                   </div>
                   <div id="container">
                      <div style="background-image:url('images/9.jpeg');border: 1px solid orange;"><a href="product9.php"><button>Product 9</button></a></div>
                      <div style="background-image:url('images/10.jpeg');border: 1px solid orange;"><a href="product10.php"><button>Product 10</button></a></div>
                      <div style="background-image:url('images/11.jpeg');border: 1px solid orange;"><a href="product11.php"><button>Product 11</button></a></div>
                      <div style="background-image:url('images/12.jpeg');border: 1px solid orange;"><a href="product12.php"><button>Product 12</button></a></div> <span></span>
                  </div>
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

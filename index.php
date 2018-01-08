<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MarketPlace</title>

  <!-- PLUGINS CSS STYLE -->
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
  <!-- CUSTOM CSS -->
  <link href="css0/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">


</head>

<body class="body-wrapper">


<section>
	<div class="container">
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
							<?php
              session_start();
              if(isset($_SESSION['login_user'])){
          ?>
          </ul>
	<ul class="navbar-nav ml-auto mt-10">
         <a class="nav-link login-button" href="/php/logout.php">Logout</a>
         <ul class="navbar-nav ml-auto mt-10">
         </ul>
          <?php
              }
              else{
          ?>
          </ul>
						<ul class="navbar-nav ml-auto mt-10">
          
          <li class="nav-item">
								<a class="nav-link add-button" href="login.php">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link add-button" href="signup.php"></i> Sign Up</a>
							</li>
							</ul>
							
          <?php 
              }
          ?>
							
						
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Buy and Sell At SRVS</h1>
					<p>Shop from a wide variety of products ranging from Sports, Food stuff, Cars and Hotel booking. </p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="vindex.php"><i class="fa fa-bed"></i>Food</a></li>
							<li class="list-inline-item">
								<a href="indexsh.php"><i class="fa fa-grav"></i> Fitness</a>
							</li>
							<li class="list-inline-item">
								<a href="indexs.html"><i class="fa fa-car"></i> Cars</a>
							</li>
							<li class="list-inline-item">
								<a href="home.html"><i class="fa fa-cutlery"></i> Hotel Site</a>
							</li>

						</ul>
					</div>

				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<h2 style="color: blue;">One Stop MarketPlace for Food, Sports, Hotel and Cars. </h2>

				</div>

			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">



        <div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Most Visited from Whole MarketPlace</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->

            <?php
            			$total = array('shaproduct1'=>'Adidas Shoes','shaproduct2'=>'HRX Shoes','shaproduct3'=>'Manchester United Jersey','shaproduct4'=>'Skateboard','shaproduct5'=>'BaseBall Bat','shaproduct6'=>'Soccer Ball Adidas','shaproduct7'=>'Soccer Ball Nike','shaproduct8'=>'Mountain Bike','shaproduct9'=>'Regular Bike','shaproduct10'=>'Dumbell 20kg', 'shaproduct11'=>'DryFit Trackpant', 'shaproduct12'=>'Football', 'shanproduct4'=>'Compact Cars','shanproduct9'=>'Concept Cars','shanproduct8'=>'Convertible Cars','shanproduct6'=>'Crossover Cars','shanproduct7'=>'Hatchback Cars','shanproduct3'=>'New Cars','shanproduct2'=>'Old Cars','shanproduct5'=>'Sedan Cars','shanproduct1'=>'Sports Car','shanproduct10'=>'Supercars', 'vinproduct4'=>'Beef','vinproduct9'=>'Bread','vinproduct1'=>'BreakFast','vinproduct6'=>'Curry','vinproduct10'=>'Dinner','vinproduct8'=>'Masala','vinproduct5'=>'Mushroom','vinproduct3'=>'Pizza','vinproduct2'=>'SeaFood','vinproduct7'=>'Spagetti');
            			foreach($_COOKIE as $key=>$value){
            				if(array_key_exists($key, $total)){
            					$arr5[$total[$key]] = $value;
            				}
            			}
            			if(empty($arr5)){
            				print "<br>No Pages Visited Yet";
            			}
            			else{
            				arsort($arr5);
            				//print_r ($arr);
            				$i=0;
            				foreach($arr5 as $key=>$value){

?>
                                			<div class="col-sm-12 col-lg-3">
                                				<!-- product card -->
                                <div class="product-item bg-light">
                                	<div class="card">
                                		<div class="card-body">
                                		    <h4 class="card-title"><a href=""><?php print $key.'<br/> You visited '.$value.' times'; ?></a></a></h4>
                                		    <ul class="list-inline product-meta">
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-folder-open-o"></i>MarketPlace</a>
                                		    	</li>
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-calendar"></i>26th December</a>
                                		    	</li>
                                		    </ul>
                                		    
                                		    <div class="product-ratings">
                                		    	<ul class="list-inline">
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                		    	</ul>
                                		    </div>
                                		</div>
                                	</div>
                                </div>



                                			</div>

<?php
            					print "<br>";
            					$i++;
            					if($i==4) break;
            				}
            			}

            		?>


		</div>




		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Most Visited from Hotel Site</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->

            <?php
            			$books = array('p1'=>'King Size Bedroom','p2'=>'Deluxe Room','p3'=>'Special Spa Room','p4'=>'Family Room','p5'=>'Children Room','p6'=>'Family Room 1','p7'=>'Luxury Room','p8'=>'Family Room 2','p9'=>'Single Room','p10'=>'Simple Room');
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

?>
                                			<div class="col-sm-12 col-lg-3">
                                				<!-- product card -->
                                <div class="product-item bg-light">
                                	<div class="card">
                                		<div class="card-body">
                                		    <h4 class="card-title"><a href=""><?php print $key.' <br/> you visited: '.$value.' times'; ?></a></a></h4>
                                		    <ul class="list-inline product-meta">
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-folder-open-o"></i>Hotels</a>
                                		    	</li>
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-calendar"></i>26th December</a>
                                		    	</li>
                                		    </ul>
                                		    
                                		    <div class="product-ratings">
                                		    	<ul class="list-inline">
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                		    	</ul>
                                		    </div>
                                		</div>
                                	</div>
                                </div>



                                			</div>

<?php
            					print "<br>";
            					$i++;
            					if($i==4) break;
            				}
            			}

            		?>


		</div>

        <!-- Top 4 products from Shantanus Website -->
        <div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Most Visited from Garadge</h2>
				</div>
			</div>
		</div>
        <div class="row">
			<!-- offer 01 -->

            <?php
            $products = array('compact'=>'Compact Cars','concept'=>'Concept Cars','convertible'=>'Convertible Cars','crossover'=>'Crossover Cars','hatchback'=>'Hatchback Cars','new'=>'New Cars','old'=>'Old Cars','sedan'=>'Sedan Cars','sports'=>'Sports Car','supercar'=>'Supercars');
            foreach($_COOKIE as $key=>$value){
                if(array_key_exists($key, $products)){
                    $arr1[$products[$key]] = $value;
                }
            }
            if(empty($arr1)){
                print "<br>No Pages Visited Yet";
            }
            else{
                arsort($arr1);
                //print_r ($arr);
                $i=0;
                foreach($arr1 as $key=>$value){

?>
                                			<div class="col-sm-12 col-lg-3">
                                				<!-- product card -->
                                <div class="product-item bg-light">
                                	<div class="card">
                                		<div class="card-body">
                                		    <h4 class="card-title"><a href=""><?php print $key.'<br/> You visited '.$value.' times'; ?></a></a></h4>
                                		    <ul class="list-inline product-meta">
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-folder-open-o"></i>Cars</a>
                                		    	</li>
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-calendar"></i>26th December</a>
                                		    	</li>
                                		    </ul>
                                		    
                                		    <div class="product-ratings">
                                		    	<ul class="list-inline">
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                		    	</ul>
                                		    </div>
                                		</div>
                                	</div>
                                </div>



                                			</div>

<?php
            					print "<br>";
            					$i++;
            					if($i==4) break;
            				}
            			}

            		?>


		</div>


        <!-- Top 4 products from Vinits Website -->
        <div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Most Visited from FoodVilla</h2>
				</div>
			</div>
		</div>
        <div class="row">
			<!-- offer 01 -->

            <?php
            $menu = array('beef'=>'Beef','bread'=>'Bread','breakfast'=>'BreakFast','curry'=>'Curry','dinner'=>'Dinner','masala'=>'Masala','mushroom'=>'Mushroom','pizza'=>'Pizza','sea'=>'SeaFood','spagetti'=>'Spagetti');
			foreach($_COOKIE as $key=>$value){
				if(array_key_exists($key, $menu)){
					$arr2[$menu[$key]] = $value;
				}
			}
			if(empty($arr2)){
				print "<br>No Pages Visited Yet";
			}
			else{
				arsort($arr2);
				//print_r ($arr);
				$i=0;
				foreach($arr2 as $key=>$value){

?>
                                			<div class="col-sm-12 col-lg-3">
                                				<!-- product card -->
                                <div class="product-item bg-light">
                                	<div class="card">
                                		<div class="card-body">
                                		    <h4 class="card-title"><a href=""><?php print $key.'<br/> You visited '.$value.' times'; ?></a></a></h4>
                                		    <ul class="list-inline product-meta">
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-folder-open-o"></i>Food</a>
                                		    	</li>
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-calendar"></i>26th December</a>
                                		    	</li>
                                		    </ul>
                                		    
                                		    <div class="product-ratings">
                                		    	<ul class="list-inline">
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                		    	</ul>
                                		    </div>
                                		</div>
                                	</div>
                                </div>



                                			</div>

<?php
            					print "<br>";
            					$i++;
            					if($i==4) break;
            				}
            			}

            		?>


		</div>

        <!-- Top 4 products from Shashank's Website -->
        <div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Most Visited from SportsPlayPro</h2>
				</div>
			</div>
		</div>
        <div class="row">
			<!-- offer 01 -->

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

?>
                                			<div class="col-sm-12 col-lg-3">
                                				<!-- product card -->
                                <div class="product-item bg-light">
                                	<div class="card">
                                		<div class="card-body">
                                		    <h4 class="card-title"><a href=""><?php print $key.'<br/> You visited '.$value.' times'; ?></a></a></h4>
                                		    <ul class="list-inline product-meta">
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-folder-open-o"></i>Sports</a>
                                		    	</li>
                                		    	<li class="list-inline-item">
                                		    		<a href=""><i class="fa fa-calendar"></i>26th December</a>
                                		    	</li>
                                		    </ul>
                                		    
                                		    <div class="product-ratings">
                                		    	<ul class="list-inline">
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
                                		    	</ul>
                                		    </div>
                                		</div>
                                	</div>
                                </div>



                                			</div>

<?php
            					print "<br>";
            					$i++;
            					if($i==4) break;
            				}
            			}

            		?>


		</div>




	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<h4>Popular pages from partner websites.</h4>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-1"></i>
								<h4>HotelVilla</h4>
							</div>
							<ul class="category-list" >
								<li><a href="http://guptashantanu.com/vbreakfast.php">Breakfast <span>93</span></a></li>
								<li><a href="http://guptashantanu.com/vbread.php">Bread <span>233</span></a></li>
								<li><a href="#">Dinner  <span>183</span></a></li>
								<li><a href="#">Curry Masala <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-2"></i>
								<h4>Garadge</h4>
							</div>
							<ul class="category-list" >
								<li><a href="#">Sports Car <span>393</span></a></li>
								<li><a href="#">Crossover <span>23</span></a></li>
								<li><a href="#">Supercars <span>13</span></a></li>
								<li><a href="#">Sedan Cars<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i>
								<h4>Hotels</h4>
							</div>
							<ul class="category-list" >
								<li><a href="#">Deluxe Rooms <span>93</span></a></li>
								<li><a href="#">Standard Rooms <span>23</span></a></li>
								<li><a href="#">Executive Rooms <span>83</span></a></li>
								<li><a href="#">Services <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-shopping-basket icon-bg-4"></i>
								<h4>SportsPlay</h4>
							</div>
							<ul class="category-list" >
								<li><a href="#">Adidas Shoes <span>53</span></a></li>
								<li><a href="#">Skateboard <span>212</span></a></li>
								<li><a href="#">Soccer Ball <span>133</span></a></li>
								<li><a href="#">Regular Bike <span>143</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->

				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>




<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
         
          <!-- description -->
          <p class="alt-color">This market place provides a one stop solution to all the user needs ranging from Hotel Site, Sports items, Food items and Car Buying service. There are four partner websites that are linked to form this one stop place.</p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">FoodVilla</a></li>
            <li><a href="#">Garadge Site</a></li>
            <li><a href="#">Hotel Site</a></li>
            <li><a href="#">SportsPlay</a></li>
          </ul>
        </div>
      </div>
      
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="images0/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Get the Dealsy Mobile App and Save more</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js0/scripts.js"></script>

</body>

</html>

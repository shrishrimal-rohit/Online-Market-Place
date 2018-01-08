<?php
    setcookie('product1', isset($_COOKIE['product1']) ? ++$_COOKIE['product1'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Adidas Shoes",time()+60*60*30*24,"/");

    setcookie('shaproduct1', isset($_COOKIE['shaproduct1']) ? ++$_COOKIE['shaproduct1'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Adidas Shoes",time()+60*60*30*24,"/");

?>





<html>
	<head>
		<title>sportsplay</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calssimax</title>

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
								<nav id="nav" style="font-size: 17px; padding: 5px;">
									<a href="index.php" style="text-decoration: underline;">Home</a>
									<a href="#" style="text-decoration: underline;">About Us</a>
									<a href="products.php" style="text-decoration: underline;">Products</a>
									<a href="contactus.php" style="text-decoration: underline;">Contact Us</a>
									<a href="admin.php" style="text-decoration: underline;">Secure Section</a>
									<a href="Last_five.php" style="text-decoration: underline;">Last 5 Products</a>
									<a href="Most_Visited.php" style="text-decoration: underline;">Most Visited Products</a>
									<a href="userSignup.php" style="text-decoration: underline;">User</a>
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
                    <img src="images/1.jpeg">
                    <h3> Product id: 001 </h3>
                    <h3> Product Name: Adidas Shoes </h3>
                    <h3> Product Brand: Adidas </h3>
                    <h3> Price: $80 </h3>
                    <h3> Product Type: Shoes </h3>
										</section>
<!-- paste this content -->
                                        <form method="post" action="add_to_cart.php">
                                        <div class="form-group disabled">
                                          <input type="text" class="form-control" name="productName" value="Adidas Shoes" style="width: 500px;border: none;" disabled>
                                        </div>
                                        <div class="form-group disabled">
                                          <input type="text" class="form-control" name="productPrice" value="80" style="width: 500px;" disabled>
                                        </div>
                                        <button type="submit" style="height: 40px;text-align: center;background-color: gray;color: black;width: 100px;border-radius: 4px">Add to Cart</button>
                                        </form>
<!-- Paste till here -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" class="fa fa-twitter" >Tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>

<div id="center_button">
    <button onclick="location.href='https://plus.google.com/share?url=http://guptashantanu.com/product1.php'"><img src="images1/glogin.png" alt="" width="300" height="100"/></button> 

<!-- paste this -->
<?php
                $servername = "localhost:3306";
                $username = "root";
                $password = "password";
                $dbname = "CMP272";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $result = mysqli_query($conn,"SELECT * FROM ProdReviews WHERE P_Id='sha1'");

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
              <form method="POST" action="processReview.php" style="margin-left: 20px;">
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
<!-- paste till here -->
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
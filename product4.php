<?php
    setcookie('product4', isset($_COOKIE['product4']) ? ++$_COOKIE['product4'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Skateboard",time()+60*60*30*24,"/");

    setcookie('shaproduct4', isset($_COOKIE['shaproduct4']) ? ++$_COOKIE['shaproduct4'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Skateboard",time()+60*60*30*24,"/");

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
                    <img src="images/4.jpeg">
                    <h3> Product id: 004 </h3>
                    <h3> Product Name: Skateboard </h3>
                    <h3> Product Brand: Nike </h3>
                    <h3> Price: $100 </h3>
                    <h3> Product Type: Equipment </h3>
										</section>
										<form method="post" action="add_to_cart.php">
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="productName" value="Skateboard" style="width: 500px;">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="productPrice" value="100" style="width: 500px;">
                                        </div>
                                        <button type="submit" style="height: 40px;text-align: center;background-color: gray;color: black;width: 100px;border-radius: 4px">Add to Cart</button>
                                        </form>
                                        
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" class="fa fa-twitter" >Tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>
	
	
	    
    

<div id="center_button">
    <button onclick="location.href='https://plus.google.com/share?url=http://guptashantanu.com/product4.php'"><img src="images1/glogin.png" alt="" width="300" height="100"/></button> 

					
								
								</div>
							</div>
						</div>
					</div>
				</div>

<!-- paste this -->
<?php
                $servername = "localhost";
$username = "cmperoot";
$password = "password";
$dbname = "CMP272";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $result = mysqli_query($conn,"SELECT * FROM ProdReviews WHERE P_Id='sha4'");

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
              <form method="POST" action="processReviewSha4.php" style="margin-left: 20px;">
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
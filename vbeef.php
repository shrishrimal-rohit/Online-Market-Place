<?php
    setcookie('beef', isset($_COOKIE['beef']) ? ++$_COOKIE['beef'] : 1,time()+60*60,"/");
    if(isset($_COOKIE['count_1'])){
                $c=$_COOKIE['count_1'];
                $c++;
                if($c>5) $c=1;
    }
    else{
                $c=1;
    }
    setcookie('count_1',$c,time()+60*60*24,"/");
    setcookie($c,"Beef",time()+60*60,"/");

    setcookie('vinproduct4', isset($_COOKIE['vinproduct4']) ? ++$_COOKIE['vinproduct4'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"beef",time()+60*60*30*24,"/");

?>


<!DOCTYPE html>
<head>

	

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

  	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/nivo-lightbox.css">
  	<link rel="stylesheet" href="css/nivo_themes/default/default.css">

  	<link rel="stylesheet" href="css/hover-min.css">
  	<link rel="stylesheet" href="css/flexslider.css">

	<link rel="stylesheet" href="css/style.css">

  	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Hotel Villa</h1>
              <p class="wow fadeInUp" data-wow-delay="1.0s">Come Dine with Us.</p>
              <a href="#vuserSignup.php" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">User Search</a>
          </div>

      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Hotel Villa</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="smoothScroll">Home</a></li>
       
        <li><a href="#feature" class="smoothScroll">Features</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#menu" class="smoothScroll">Products</a></li>
        <li><a href="#team" class="smoothScroll">Team</a></li>
        <li><a href="#gallery" class="smoothScroll">News</a></li>
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
        <li><a href="#admin" class="smoothScroll">Admin</a></li>
     

        


      </ul>
    </div>

  </div>
</div>
<div id="center_button">
    <button onclick="location.href='https://plus.google.com/share?url=http://guptashantanu.com/vbeef.php'">Share With Google+</button>
</div>


<figure>
  <img src="images/gallery-img5.jpg" alt="Food Menu" width="400
  " height="400">

</figure>
<p><strong>Description:</strong>Beef</p>



<!-- paste this in other pages -->

<form method="post" action="add_to_cart.php">
<div class="form-group">
  <input type="text" class="form-control" name="productName" value="beef" style="width: 500px;">
</div>
<div class="form-group">
  <input type="text" class="form-control" name="productPrice" value="60" style="width: 500px;">
</div>
<button type="submit" style="height: 40px;text-align: center;background-color: gray;color: black;width: 100px;border-radius: 4px">Add to Cart</button>
</form>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true" class="fa fa-twitter" >tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>
<hr/>


<?php
                $servername = "localhost";
                $username = "cmperoot";
                $password = "password";
                $dbname = "CMP272";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $result = mysqli_query($conn,"SELECT * FROM ProdReviews WHERE P_Id='vin2'");

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
              <form method="POST" action="processReviewvin2.php" style="margin-left: 20px;">
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
</body>
</html>
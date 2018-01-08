<html>
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

<div class="container-fluid">

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



<?php

$servername = "localhost";
$username = "rootcmpe";
$password = "password";
$dbname = "CMP272";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['productName']) && isset($_POST['productPrice'])){
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    $sql = "INSERT INTO cart (productName, productPrice) VALUES ('$productName','$productPrice')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>product added to cart successfully</h2>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


}

else {
    $servername = "localhost";
    $username = "rootcmpe";
    $password = "password";
    $dbname = "CMP272";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $result = mysqli_query($conn,"SELECT * FROM cart");
    $total_price = 0;
    while($row = mysqli_fetch_array($result))
    {
    $total_price = $total_price + (int)$row['productPrice'];
    
?>
        <div class="container">

<div class="abc" style="width: 100%;border: 1px solid;height: 60;padding: 20px;margin-top: 5px;"><?php echo "product Name: <strong>". $row['productName']; echo "</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Product Price: <strong>&nbsp:&nbsp;&nbsp;"; echo $row['productPrice']; ?></strong></div>
        </div>

<?php
    }
    
        

    $conn->close();


 ?>
	<hr/>
	<div>
		<div>Your Total : <?php echo $total_price  ?> </div>
		<form method="POST" action="clearCart.php">
		    <div><button type="submit">Clear Cart</button></div>
		</form>
		<div><a href="pay.html"><button type="submit">Checkout</button></a></div>
	</div>
<?php
}

?>


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

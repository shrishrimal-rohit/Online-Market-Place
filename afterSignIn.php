<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
      <?php

      $username =  $_POST['username'];
      $password = $_POST['password'];

      if($username == "admin") {
        if($password == "password") { ?>
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
    <div class="container">
      <h3>List of Users registered on the website:</h3>
        <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Password</th>
            <th>Age</th>
            <th>City</th>
            <th>Country</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>anna123</td>
          <td>35</td>
          <td>New York</td>
          <td>USA</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Siddharth</td>
        <td>smith</td>
        <td>sid123</td>
        <td>26</td>
        <td>San Jose</td>
        <td>USA</td>
    </tr>
    </tbody>
  </table>
  </div>
<?php }
        else {
          echo "password wrong";
        }
      }
      else {
        echo "credentials wrong";
      }

       ?>
  </body>
</html>

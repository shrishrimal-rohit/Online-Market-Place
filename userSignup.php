<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div id="header-wrapper">
    <header id="header" class="container">
      <div class="row">
        <div class="12u">

          <!-- Logo -->
            <h1><a href="#" id="logo">sportsplay</a></h1>

          <!-- Nav -->
          <nav id="nav" style="font-size: 10px;">
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
    <div class="left" style="float: left;display: inline">
        <h4>User Sign Up!!</h4>
    <form method="post" action="afterUserSignup.php">
      <div class="form-group">
        <label for="name">FirstName:</label>
        <input type="text" class="form-control" name="FirstName" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">LastName:</label>
        <input type="text" class="form-control" name="LastName" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" class="form-control" name="Email" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="Password" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">Address:</label>
        <input type="text" class="form-control" name="Address" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">HomePhone:</label>
        <input type="text" class="form-control" name="HomePhone" style="width: 500px;">
      </div>
      <div class="form-group">
        <label for="name">CellPhone:</label>
        <input type="text" class="form-control" name="CellPhone" style="width: 500px;">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
    <div class="right" style="float: right; display: inline">
    <h4>Search for a user using FirstName</h4>
<form method="post" action="searchUserFirstName.php">
    <div class="form-group">
      <label for="name">Enter FirstName:</label>
      <input type="text" class="form-control" name="searchFirstName" style="width: 500px;">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>

<h4>Search for a user using Email</h4>
<form method="post" action="searchUserEmail.php">
<div class="form-group">
  <label for="name">Enter Email:</label>
  <input type="text" class="form-control" name="searchEmail" style="width: 500px;">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>

<h4>Search for a user using Phone Number</h4>
<form method="post" action="searchUserPhone.php">
<div class="form-group">
  <label for="name">Enter Phone Number:</label>
  <input type="text" class="form-control" name="searchPhone" style="width: 500px;">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>
</div>

</div>
  </body>
  </html>

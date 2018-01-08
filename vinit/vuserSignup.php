<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotel Villa</title>
	<link rel="shortcut icon" type="image/png" href-"image\logo1.png"/>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>

<div class="container">
    <div class="left" style="float: left;display: inline">
        <h4>User Sign Up!!</h4>
    <form method="post" action="vafterUserSignup.php">
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
<form method="post" action="vsearchUserFirstName.php">
    <div class="form-group">
      <label for="name">Enter FirstName:</label>
      <input type="text" class="form-control" name="searchFirstName" style="width: 500px;">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
</form>

<h4>Search for a user using Email</h4>
<form method="post" action="vsearchUserEmail.php">
<div class="form-group">
  <label for="name">Enter Email:</label>
  <input type="text" class="form-control" name="searchEmail" style="width: 500px;">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>

<h4>Search for a user using Phone Number</h4>
<form method="post" action="vsearchUserPhone.php">
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

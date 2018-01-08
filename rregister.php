<!DOCTYPE html>
<html lang="en">
<title>BOOK STORE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('/w3images/forestbridge.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>


  
  <!-- Navigation -->
<nav class="w3-bar w3-black">
  <a href="rhome.php" class="w3-button w3-bar-item">Home</a>
  <a href="rabout.php" class="w3-button w3-bar-item">About</a>
  <a href="rproducts.php" class="w3-button w3-bar-item">Products/Services</a>
  <a href="rnews.php" class="w3-button w3-bar-item">News</a>
  <a href="rcontacts.php" class="w3-button w3-bar-item">Contacts</a>
   <a href="ruserlogin.php" class="w3-button w3-bar-item">Secure</a>
   <a href="rregister.php" class="w3-button w3-bar-item">Register</a>
   <a href="rUserdata.php" class="w3-button w3-bar-item">Total Users</a>

 </nav>

<body>


<style> 
#boxshadow {
    position: relative;
    -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    padding: 10px;
    background: grey;
}

/* Make the image fit the box */
#boxshadow img {
    width: 100%;
    border: 1px solid #8a4419;
    border-style: inset;
}

#boxshadow::after {
    content: '';
    position: absolute;
    z-index: -1; /* hide shadow behind image */
    -webkit-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.3);                
    width: 70%; 
    left: 15%; /* one half of the remaining 30% */
    height: 100px;
    bottom: 0;
}
</style>

<body>

<div id="boxshadow">
  <img src="./images/img1.jpg" alt="/images/img1.jpg" width="600" height="400">
</div>

</body>
</body>


<head>
  <meta charset="UTF-8">
  <title>Sign-Up/User Search</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/signup.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">User Search</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="php/rsignup.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                User Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="user_username"/>
            </div>
            
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="first_name"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="last_name"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
              <label>
                Address<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="address"/>
          </div>
          
            <div class="field-wrap">
              <label>
                Phone<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="phone"/>
            </div>
            
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="user_password"/>
          </div>
          
          <button type="submit" class="button button-block" name="Register"/>Signup</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>User Search</h1>
          
          <form action="php/rusersearch.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req"></span>
            </label>
            <input type="email" autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              First Name<span class="req"></span>
            </label>
            <input type="text" autocomplete="off" name="first_name"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Last Name<span class="req"></span>
            </label>
            <input type="text" autocomplete="off" name="last_name"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Phone<span class="req"></span>
            </label>
            <input type="text" autocomplete="off" name="phone"/>
          </div>
          
          <?php 
          session_start();
          if (isset($_SESSION['error'])){ ?>
          <div class="text-center pad-top-20">
            <p><font color="red"><strong><?php echo($_SESSION['error']); ?></strong></font></p>
          </div>
          <?php } 
          $_SESSION['error'] = '';
          ?>
          
          <button class="button button-block" name="user_search"/>Search</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/signup.js"></script>

</body>
</html>
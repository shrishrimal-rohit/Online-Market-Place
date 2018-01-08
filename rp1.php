<?php
    setcookie('p1', isset($_COOKIE['p1']) ? ++$_COOKIE['p1'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"Together with Mathematics",time()+60*60*30*24,"/");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" src="jquery-ui.min.js">
</script>
<script type="text/javascript" src="tt_slideshow.js">
</script>
<script type="text/javascript" src="bootstrap.min.js">
</script>
<script type="text/javascript" src="Customjs.js">
</script>
<script type="text/javascript" src="contactform.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Add the site description here" />
<meta  name="keywords" content="First keyword, second keyword," />
<title>
New Page
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="totop.js">
</script>
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
</head>
<body class="Rooms">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div>
<div id="ttr_page" class="container">
<header id="ttr_header">
<div id="ttr_header_inner">
<a href="http://www.templatetoaster.com" target="_self">
<img  class="ttr_header_logo" src="logo.png" >
</a>
</div>
</header>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div class="menuforeground">
</div>
<div id="navigationmenu">
<div class="navbar-header">
<button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</button>
</div>
<div class="menu-center collapse navbar-collapse">
<ul class="ttr_menu_items nav navbar-nav nav-center">
<li class="ttr_menu_items_parent dropdown"><a href="home.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="about.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown active"><a href="rooms.html" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Rooms</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="services.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Services</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="contact.html" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
<hr class ="horiz_separator"/>
</li>
</ul>
</div>
</div>
</div>
</nav>

</br>
<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 0em 0em;"><span><img src="images/60.jpg" class="ttr_fill" style="max-width:300px;max-height:192px;" /></span></span><br style="font-family:'Droid Serif';font-size:1.571em;" /></p><p style="text-align:Center;"><span style="font-family:'Droid Serif','Times New Roman';font-size:1.571em;">KING SIZE BEDROOM</span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';">Vivamus non nisi massa, nec lacinia odiomassa</span></p><p style="margin:0.71em 0.36em 0.36em 0.36em;text-align:Center;line-height:1.76056338028169;"><span><span><a HREF="d1.html" target="_self" class="btn btn-md btn-default">BOOK NOW</a></span></span></p></div>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" class="fa fa-twitter" >Tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>

<div id="center_button">
    <button onclick="location.href='https://plus.google.com/share?url=http://guptashantanu.com/rp1.php'"><img src="images1/glogin.png" alt="" width="300" height="100"/></button> 

<form method="POST" action="processReview.php">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email id">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Review</label>
    <input type="text" class="form-control" name="review" id="review" placeholder="Enter your review">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <legend>Your Rating: </legend>
<form method="post" action="processReview.php">
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
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </legend>





<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_footer_bottom_footer">
<div class="ttr_footer_bottom_footer_inner">
<div id="ttr_copyright">
<a href="#">
Copyright © 2014. All rights reserved.
</a>

</div>
</div>
</div>
</footer>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
</div>
<script type="text/javascript">
WebFontConfig = {
google: { families: [ 'Droid+Serif'] }
};
(function() {
var wf = document.createElement('script');
wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
wf.type = 'text/javascript';
wf.async = 'true';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(wf, s);
})();
</script>
</body>
</html>
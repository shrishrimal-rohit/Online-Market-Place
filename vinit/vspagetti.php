<?php
    setcookie('spagetti', isset($_COOKIE['spagetti']) ? ++$_COOKIE['spagetti'] : 1,time()+60*60,"/");
    if(isset($_COOKIE['count_1'])){
    	$c=$_COOKIE['count_1'];
    	$c++;
    	if($c>5) $c=1;
    }
    else{
    	$c=1;	
    }
    setcookie('count_1',$c,time()+60*60*24,"/");
    setcookie($c,"spagetti",time()+60*60,"/");

?>


<!DOCTYPE html>
<html>
<body>



<figure>
  <img src="images/gallery-img7.jpg" alt="Food Menu" width="400
  " height="400">
  
</figure>
<p><strong>Description:</strong>Spagetti</p>
</body>
</html>
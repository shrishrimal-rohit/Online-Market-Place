<?php
    setcookie('masala', isset($_COOKIE['masala']) ? ++$_COOKIE['masala'] : 1,time()+60*60,"/");
    if(isset($_COOKIE['count_1'])){
    	$c=$_COOKIE['count_1'];
    	$c++;
    	if($c>5) $c=1;
    }
    else{
    	$c=1;
    }
    setcookie('count_1',$c,time()+60*60*24,"/");
    setcookie($c,"masala",time()+60*60,"/");

    setcookie('vinproduct8', isset($_COOKIE['vinproduct8']) ? ++$_COOKIE['vinproduct8'] : 1,time()+60*60*24*30,"/");
    if(isset($_COOKIE['number'])){
    	$x=$_COOKIE['number'];
    	$x++;
    	if($x>5) $x=1;
    }
    else{
    	$x=1;
    }
    setcookie('number',$x,time()+60*60*24*30,"/");
    setcookie($x,"masala",time()+60*60*30*24,"/");

?>

<!DOCTYPE html>
<html>
<body>

<div id="center_button">
    <button onclick="location.href='https://plus.google.com/share?url=http://guptashantanu.com/vmasala.php'">Share With Google+</button>
</div>

<figure>
  <img src="images/gallery-img5.jpg" alt="Food Menu" width="400
  " height="400">

</figure>
<p><strong>Description:</strong>Masala</p>









<!-- paste this in other pages -->

<form method="post" action="add_to_cart.php">
<div class="form-group">
  <input type="text" class="form-control" name="productName" value="Masala" style="width: 500px;">
</div>
<div class="form-group">
  <input type="text" class="form-control" name="productPrice" value="20" style="width: 500px;">
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

                $result = mysqli_query($conn,"SELECT * FROM ProdReviews WHERE P_Id='vin1");

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
              <form method="POST" action="processReviewvin1.php" style="margin-left: 20px;">
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
                  <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true" class="fa fa-twitter" >tweet</a>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	</script>


















<!-- paste till here -->

</body>
</html>

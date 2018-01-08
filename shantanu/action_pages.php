<?php
$uname =  $_POST['name'];
$pass =  $_POST['pwd'];

if($uname == "shantanu") {
    if($pass == "admin") {
       echo "Successful Login"; 
?>
<h3> Name: Alex Bington <br> password: 123456 <hr>Name: John Smith <br> password: 123456</h3>
       
<?php
     }
    else 
     {
      echo "wrong password";
     }
}
else
{
   echo "Wrong username or password";
}
?>
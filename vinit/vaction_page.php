<?php
$uname =  $_POST['name'];
$pass =  $_POST['pwd'];

if($uname == "vinit") {
    if($pass == "admin") {
       echo "Successful Login"; 
?>
<h3> Name: John Wang <br> password: john123<hr>Name: Mary Smith <br> password: donald123</h3>
       
<?php
     }
    else 
     {
      echo "wrong password";
     }
}
else
{
   echo "please login with correct credentials";
}
?>
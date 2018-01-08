<?php
$connection = mysqli_connect('localhost', 'rootcmpe', 'password');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'CMP272');
if (!$select_db){
echo "hey";
    die("Database Selection Failed" . mysqli_error($connection));
}

if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>
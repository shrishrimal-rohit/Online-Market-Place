<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['Login'])) {
if (empty($_POST['user_username']) || empty($_POST['user_password'])) {
$error = "Username or Password is invalid ..";
echo($error);
$_SESSION['error'] = $error;

header("location: ../login.php");
}
else
{
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "rootcmpe", "password");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
    echo('connection to db failed');
    echo($connection);
}

// To protect MySQL injection for Security purpose
$username = ($_POST['user_username']);
$password = ($_POST['user_password']);
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

// Selecting Database
$db = mysqli_select_db($connection, "CMP272");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from signup where password='$password' AND email='$username';");

$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: ../index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
$_SESSION['error'] = $error;
header("location: ../login.php");
}
mysqli_close($connection); // Closing Connection
}
}
?>
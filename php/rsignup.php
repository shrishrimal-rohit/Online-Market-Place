<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['Register'])) {
    echo("I m here");
    if (empty($_POST['user_username']) || empty($_POST['user_password']) || empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['phone'])) {
        if (empty($_POST['user_username'])) {
            $error = "Username can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
        if (empty($_POST['user_password'])) {
            $error = "Password can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
        if (empty($_POST['first_name'])) {
            $error = "First Name can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
        if (empty($_POST['last_name'])) {
            $error = "Last Name can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
        if (empty($_POST['email'])) {
            $error = "E-mail can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
        if (empty($_POST['address'])) {
            $error = "Address can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
        if (empty($_POST['phone'])) {
            $error = "Phone can't be blank";
            echo($error);
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting back
            }
}
else
{
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "rohitshrishrimal", "qwerty");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
        echo('connection to db failed');
        echo($connection);
    }
    echo("Connected successfully \n");
    // To protect MySQL injection for Security purpose
    $username = ($_POST['user_username']);
    $password = ($_POST['user_password']);
    $firstname = ($_POST['first_name']);
    $lastname = ($_POST['last_name']);
    $email = ($_POST['email']);
    $address = ($_POST['address']);
    $phone = ($_POST['phone']);
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    // Selecting Database
    $db = mysqli_select_db($connection, "userlistcmpe272");
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysqli_query($connection, "select * from login where username='$username';");
    $rows = mysqli_num_rows($query);
    echo("Number of username rows = " + $rows);
    if ($rows == 0) {
        $query = mysqli_query($connection, "select * from userdata where email='$email';");
        $rows = mysqli_num_rows($query);
        echo("Number of email rows = " + $rows);
        if ($rows > 0){
            $error = "E-mail is already registered, Please Login!";
            $_SESSION['error'] = $error;
            header("location: ../rregister.php"); // Redirecting To Registration Page
        }
        $query = mysqli_query($connection, "insert into userdata values(default,'$username','$firstname','$lastname','$email','$address','$phone');");
        echo(mysqli_error($connection));
        $query = mysqli_query($connection, "insert into login values(default,'$username','$password');");
        echo(mysqli_error($connection));
        $_SESSION['error'] = "Registration Successful";
        header("location: ../ruserlogin.php");
    } 
    else {
        $error = "Username is occupied, try another!";
        $_SESSION['error'] = $error;
        header("location: ../rregister.php"); // Redirecting To Registration Page
        }
    mysqli_close($connection); // Closing Connection
}
}
?>
<?php

$servername = "localhost";
$username = "cmperoot";
$password = "password";
$dbname = "CMP272";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['email']) && isset($_POST['review']) && isset($_POST['rating'])){
    $email = $_POST['email'];
    $review = $_POST['review'];
    $radio = $_POST['rating'];

    $sql = "INSERT INTO ProdReviews (P_Id, ProdName, ProdReview, ProdRating,reviewEmail) VALUES ('shan8', 'Sedan Cars', '$review', '$radio','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2>Thank you. Your rating saved successfully</h2>";
        echo "Your Rating: ". $radio;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

 ?>

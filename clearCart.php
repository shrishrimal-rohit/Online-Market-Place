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

// sql to delete a record
$sql = "DELETE FROM cart";

if ($conn->query($sql) === TRUE) {
    echo "Cart items Removed SuccessFully.";
    header("Refresh:5; url=index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
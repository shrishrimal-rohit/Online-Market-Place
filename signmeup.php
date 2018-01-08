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
    // retrive the data posted from the form
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])){
        $FirstName = $_POST['firstName'];
        $LastName = $_POST['lastName'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        $sql = "INSERT INTO signup (FirstName, LastName, Email, Password) VALUES ('$FirstName', '$LastName', '$Email', '$Password')";

        if ($conn->query($sql) === TRUE) {
            echo "<h2>Signed Up Successfully.</h2>";
            header("Refresh:1; url=login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
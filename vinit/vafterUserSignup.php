<?php
        $servername = "localhost";
        $username = "vinsingh";
        $password = "Deloitte@29";
        $dbname = "UserSearch";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    // retrive the data posted from the form
    if (isset($_POST['FirstName']) && isset($_POST['LastName']) && isset($_POST['Email']) && isset($_POST['Password'])){
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Address = $_POST['Address'];
        $HomePhone = $_POST['HomePhone'];
        $CellPhone = $_POST['CellPhone'];



        $sql = "INSERT INTO Users (FirstName, LastName, Email, Password, Address, HomePhone, CellPhone) VALUES ('$FirstName', '$LastName', '$Email', '$Password', '$Address', '$HomePhone', '$CellPhone')";

        if ($conn->query($sql) === TRUE) {
            echo "<h2>New record created successfully</h2>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>

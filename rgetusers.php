 <?php
 		
        $connection = mysqli_connect("localhost", "rohitshrishrimal", "qwerty");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
            echo('connection to db failed');
            echo($connection);
            }
            // Selecting Database
            $db = mysqli_select_db($connection, "userlistcmpe272");
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysqli_query($connection, "select username, `first name`, `last name` from userdata;");
            $rows = mysqli_num_rows($query);
            if ($rows > 0) {
                echo("<table style=\"width:100%\">
                          <tr>
                            <th>Username</th>
                            <th>Firstname</th> 
                            <th>Lastname</th>
                          </tr>");
                while ($user = $query->fetch_assoc()) {
                    echo("<tr>
                            <td>".$user['username']."</td>
                            <td>".$user['first name']."</td>
                            <td>".$user['last name']."</td>
                          </tr>");
                }
                echo("</table>");
            }
            else{
                echo("No Users");
            }
            mysqli_close($connection);
      ?>
      
      <html>
      <head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
      </html>
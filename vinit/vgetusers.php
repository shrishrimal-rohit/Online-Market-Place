<?php
 		
        $connection = mysqli_connect("localhost", "vinsingh", "Deloitte@29");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
            echo('connection to db failed');
            echo($connection);
            }
            // Selecting Database
            $db = mysqli_select_db($connection, "UserSearch");
            // SQL query to fetch information of registerd users and finds user match.
            $query = mysqli_query($connection, "select Username, FirstName, LastName from Users;");
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
                            <td>".$user['Username']."</td>
                            <td>".$user['FirstName']."</td>
                            <td>".$user['LastName']."</td>
                          </tr>");
                }
                echo("</table>");
            }
            else{
                echo("No Users");
            }
            mysqli_close($connection);
      ?>
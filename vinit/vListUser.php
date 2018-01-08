<?php
$con=mysqli_connect("localhost","vinsingh","Deloitte@29","UserSearch");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Users");

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Firstname</th>
<th>Lastname</th>



</tr>";

while($row = mysqli_fetch_array($result))
{
    
 
echo "<tr>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "</tr>";



}
echo "</table>";


mysqli_close($con);
?>

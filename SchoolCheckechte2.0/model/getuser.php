<!DOCTYPE html>
<html>
<head>
<body>

<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','schoolcheck2');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"schoolcheck");

$sql="SELECT title, content FROM schools WHERE title LIKE '%$q%'"; //wildcard

$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Title</th>
<th>Content</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" .$row['name']. "</td>";
    echo "<td>" .$row['street']. "</td>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
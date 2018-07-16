<?php 
session_start();
require_once('dbconfiguration.php');
//if(!isset($_SESSION['email'])){
  //  header("location: login.html");
//}
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Billing Project</title>
</head>
<body>
<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body bgcolor="#EEFDEF">
<?php
$tab1 = mysqli_query($con,"SELECT * FROM bill_details");
echo "<table border='1'>
<tr>
<th>Id</th>
<th>Bike</th>
<th>Price</th>
<th>OrderDate</th>
</tr>";
while($row = mysqli_fetch_array($tab1))
{
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['bike'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  //echo "<td>" . $row['orderdate'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
<a href="logout.php">LOGOUT</a>

</html>
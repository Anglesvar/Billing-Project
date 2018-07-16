<?php 
$con = mysqli_connect('localhost','root','', 'project');
// Check connection
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 
?>

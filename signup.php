<?php
require_once('dbconfiguration.php');
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$password=$_POST['password'];
$email=$_POST['email'];

	
$sql= "INSERT INTO signup(firstname,lastname, password,  email) VALUES ('$firstname','$lastname','$password','$email')";

$sl= "INSERT INTO login(email, password) VALUES ('$email','$password')";
$resultl = mysqli_query($con,$sl);
$result = mysqli_query($con,$sql);

if($result AND $resultl){
	echo '<script type="text/javascript">'; 
	echo 'alert("Signed Up Successfully!!");'; 
	echo 'window.location.href = "login.html";';
	echo '</script>';
}
}
?>


<?php
session_start();
require_once('dbconfiguration.php');
if ($_SERVER['REQUEST_METHOD']=='POST')
{

$email=$_POST['email'];
$password=$_POST['password'];
//$pass->encryptIt($pass);
	
$sqli= "SELECT * FROM login WHERE email = '$email' AND password = '$password' ";
$resulti = mysqli_query($con,$sqli);
$rowcount = mysqli_num_rows($resulti);

if($rowcount==1){
	$_SESSION['email']=$_POST['email'];
	 header('Location:bill.html');
}
	

else{
	echo '<script type="text/javascript">'; 
	echo 'alert("Username and Password donot Match..Try Again!!");'; 
	echo 'window.location.href = "login.html";';
	echo '</script>';

	//error_reporting(E_ERROR | E_PARSE);
	}
}
?>


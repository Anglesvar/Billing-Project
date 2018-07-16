<?php 

require_once("dbconfiguration.php");
$id=$_POST['id'];
$bike=$_POST['bike'];
$price=$_POST['price'];
$orderdate=$_POST['orderdate'];

$rs="INSERT INTO `bill_details`(`id`, `bike`, `price`, `orderdate`, `time`) VALUES ('$id','$bike','$price','$orderdate',NOW())";
$update=mysqli_query($con,$rs);
if($update==TRUE){
    header("Location:updatedb.html");
}
else{
    header("Location:bill.html");

}



?>
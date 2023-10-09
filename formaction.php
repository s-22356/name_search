<?php 
session_start();
include("connection.php");
$name=$_REQUEST["name"];
$sql1="SELECT * FROM form WHERE Name='$name'";
$data1=mysqli_query($conn,$sql1);
$value1=mysqli_num_rows($data1);
$result=mysqli_fetch_assoc($data1);
 if($value1)
 {
 	$_SESSION['id']=$result['user_id'];
 	header("location:display.php");
 }
 else
 {
 	echo "NO record found";
 }
?>
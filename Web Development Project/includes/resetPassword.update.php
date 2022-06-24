<?php
	session_start();
	include("db.php");
	$password = $_POST['password'];
	$username = $_SESSION["username"];
	$sql =  "UPDATE user SET UserPassword='$password' WHERE UserName='$username';";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Reset password successful");
	session_destroy();
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../loginCustomer.php?reset=success';</script>";
	}	
?>
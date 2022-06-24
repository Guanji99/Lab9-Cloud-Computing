<?php
	include("db.php");
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "INSERT INTO user (`UserName`,`UserPassword`,`UserEmail`) VALUES ('$username','$password','$email');";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Register successful");
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../login.php';</script>";
	}	
?>
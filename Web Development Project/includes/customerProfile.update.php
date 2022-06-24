<?php
	session_start();
	include("db.php");
	$password = $_POST['password'];
	$email = $_POST['email'];
	$username=$_SESSION["name"];
	$sql =  "UPDATE user SET UserPassword='$password',UserEmail='$email' WHERE UserName='$username';";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Update successful");
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../customerProfile.php?update=success';</script>";
	}	
?>
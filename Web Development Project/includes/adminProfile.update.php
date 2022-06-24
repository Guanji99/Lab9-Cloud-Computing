<?php
	session_start();
	include("db.php");
	$password = $_POST['password'];
	$username = $_SESSION["user"];
	$sql =  "UPDATE admin SET AdminPassword='$password' WHERE AdminName='$username';";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Update successful");
	function alert($msg) {
		$user=$_SESSION["user"];
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../adminProfile.php?admin_name=$user&update=success';</script>";
	}	
?>
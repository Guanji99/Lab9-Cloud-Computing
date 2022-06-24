<?php
	include("db.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "INSERT INTO admin (`AdminName`,`AdminPassword`) VALUES ('$username','$password');";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Successful Add Admin");
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../admin.php?add=success';</script>";
	}	
?>
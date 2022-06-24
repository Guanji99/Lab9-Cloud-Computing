<?php
	session_start();
	include("db.php");
	$admin = $_GET["admin_name"];
	$sql =  "DELETE FROM `admin` WHERE AdminName='$admin'";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Delete successful");
	function alert($msg) {
		$user=$_SESSION["user"];
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../admin.php?delete	=success';</script>";
	}	
?>
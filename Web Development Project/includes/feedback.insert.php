<?php
    session_start();
	include("db.php");
	$feedback_text = $_POST['feedback_text'];
    $uid = $_SESSION["uid"];
	$sql = "INSERT INTO feedback(`UserId`,`FeedbackDetail`) VALUES ('$uid','$feedback_text');";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	alert("Feedback Sent");
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='../homepage.php';</script>";
	}	
?>
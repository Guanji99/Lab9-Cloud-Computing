<?php
	session_start();
	session_destroy();
	alert("Logout successful");
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='loginAdmin.php?logout=success';</script>";
	}	
?>
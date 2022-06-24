<script>
	localStorage.setItem('ratedIndex', -1);
	localStorage.setItem('checkLogin', 0);
</script>
<?php
	session_start();
	$_SESSION["name"] = '';
	alert("Logout successful");
	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');window.location.href='homepage.php?logout=success';</script>";
	}	
?>
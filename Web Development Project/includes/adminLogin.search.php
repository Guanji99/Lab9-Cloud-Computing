<?php
	session_start();
	include("db.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * from `admin` where AdminName = '$username'";
	$query = mysqli_query($con,$sql);
	if(mysqli_num_rows($query)>0)
	{
		foreach($query as $row)
		{	
			if($password!=$row['AdminPassword']){
				//wrong password
				echo "<script type='text/javascript'>alert('Invalid password! Please try again.');window.location.href='../loginAdmin.php?login=failed';</script>";
			}
			else
			{
				//login successful
				$_SESSION["admin_name"] = $username;
				echo "<script type='text/javascript'>alert('Login successful');window.location.href='../admin.php?login=success';</script>";
			}
		}
	}
	else{
			//invalid username
			echo "<script type='text/javascript'>alert('Invalid username! Please try again.');window.location.href='../loginAdmin.php?login=failed';</script>";
		}
	
?>
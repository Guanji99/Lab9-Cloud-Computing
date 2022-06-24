<?php
	session_start();
	include("db.php");
	$username = $_POST['username'];
	$password = $_POST['CustomerPassword'];
	$sql = "SELECT * from user where UserName = '$username'";
	$query = mysqli_query($con,$sql);
	if(mysqli_num_rows($query)>0)
	{
		foreach($query as $row)
		{	
			if($password!=$row['UserPassword']){
				//wrong password
				echo "<script type='text/javascript'>alert('Invalid password! Please try again.');window.location.href='../loginCustomer.php?login=failed';</script>";
			}
			else
			{
				//login successful
				$_SESSION["name"] = $username;
				$_SESSION["uid"] = $row['UserId'];			
				echo "<script type='text/javascript'>alert('Login successful');window.location.href='../homepage.php?login=success';</script>";
			}
		}
	}
	else{
			//invalid username
			echo "<script type='text/javascript'>alert('Invalid username! Please try again.');window.location.href='../loginCustomer.php?login=failed';</script>";
		}
	
?>
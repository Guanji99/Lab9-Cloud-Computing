<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Forget Password</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css?<?php echo time();?>">

</head>
<body>
<?php include 'navbar.php'; ?>
<div class="forget_container">
	<div class="forget_display">
		<form class="content" id="forget" action="resetPassword.php" method="POST">
			<div class="forget_contain">
				<div class="text-center">
					<h2 class="text-center;">Forget Password</h2>
				</div>
				<div>
				<label for="username"><b></b></label>
				<input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
				</div>
				<div>
				<label for="email"><b></b></label>
				<input type="email" placeholder="Email Address (eg. abc@gmail.com)"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" autocomplete="off" name="email" required/>
				</div>
				<input type="submit" name="find" class="forget_button" value="Next" >
				<div class="mb-3">
					<br>
					<a class="btn" href="loginCustomer.php">Back</a>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>
<script>
	document.getElementById("forget").onsubmit = function(){
		event.preventDefault();
		var pass = false;
		<?php
		include("includes/db.php");
		$sql = "SELECT * from user";
		$query = mysqli_query($con,$sql);
		if(mysqli_num_rows($query)>0){
			foreach($query as $row){	
		?>
		if(document.getElementById('username').value== "<?= $row['UserName'] ?>"){
			if(document.getElementById('email').value== "<?= $row['UserEmail'] ?>"){
				pass=true;
				<?php $_SESSION["username"]= $row['UserName']; ?>
			}
			else{
				pass = false;
				alert("Invalid Email. Please enter again.");
				return false;
			}
		}
		<?php
			}
		}
		else{
			echo "No record Found.";
		}
		?>
		if ( pass == true ){
			this.submit();
		}
		else{
			alert("Invalid username. Please enter again.");
		}
		return false;
	}
</script>
</body>
</html>
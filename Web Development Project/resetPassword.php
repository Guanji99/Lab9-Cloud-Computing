<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Reset Password</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style CSS -->
<link rel="stylesheet" href="style2.css?<?php echo time();?>">
</head>

<body>
<?php include 'navbar.php'; ?>
<div class="reset_container">
	<div class="reset_display">
		<form id="reset" class="content" action="includes/resetPassword.update.php" method="post">
			<div class="reset_contain">
				<div class="text-center">
					<h2 class="text-center;">Reset Password</h2>
				</div>
				<div>
				<label for="password"><b></b></label>
				<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and more than 7 characters" placeholder="Password" required>
				</div>
				<div>
				<label for="RepeatPassword"><b></b></label>
				<input type="password" name="RepeatPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and more than 7 characters" id="RepeatPassword" placeholder="Confirm Password" required>
				</div>
				<div class="text-center">
					<input type="submit" name="resetPassword" class="reset_button" value="Submit" >
				</div>
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
	document.getElementById("reset").onsubmit = function(){
		event.preventDefault();
		var pass = true;
		if ( document.getElementById("password").value.trim()!= document.getElementById("RepeatPassword").value.trim()){
			pass = false;
			alert("Please make sure the repeat password are same with password!");
			return false;
		}
		if ( pass == true ){	
			<?php $_SESSION["username"] = $_POST['username'];?>
			this.submit();
		}
		return false;
	}
</script>
</body>
</html>
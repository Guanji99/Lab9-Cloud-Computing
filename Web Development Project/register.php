<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Register</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css?<?php echo time();?>">
</head>
<body>

<?php 
include 'navbar.php'; 
?>
<div class="register_container">
	<div class="register_display">
		<form class="register_contents" id="register" action="includes/userRegister.insert.php" method="POST">
			<div class="text-center">
				<h1 class="display-4 ">Register</h1>
				<h5 class="mb-3 font-16">Fill the register form.</h5>
			</div>
			<div class="register_contain">
				<div>
				<label for="username"><b></b></label>
				<input type="text" name="username" id="username" placeholder="Username" required>
				</div>
				<div>
				<label for="email"><b></b></label>
				<input type="email" placeholder="Email Address (eg. abc@gmail.com)"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" name="email" required />
				</div>
				<div>
				<label for="password"><b></b></label>
				<input type="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" id="password" title="Must contain at least one number and one uppercase and lowercase letter, and more than 7 characters" placeholder="Password" required>
				</div>
				<div>
				<label for="RepeatPassword"><b></b></label>
				<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and more than 7 characters" name="RepeatPassword" id="RepeatPassword" placeholder="Repeat Password" required>
				</div>
				<input type="submit" name="login" class="register_button" value="Register">
				<div class="text-center">
					<p class="mb-4">
						Already have an account?<a href="loginCustomer.php" class="font-16"> Login</a>
					</p>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>
<script>
		document.getElementById("register").onsubmit  = function(){
			event.preventDefault();
			var pass = true;
			<?php
			include("includes/db.php");
			$sql = "SELECT * from user";
			$query = mysqli_query($con,$sql);
			if(mysqli_num_rows($query)>0){
				foreach($query as $row){	
			?>
			if(document.getElementById('username').value== "<?= $row['UserName'] ?>"){
				pass = false;
				alert("username has been used. Please enter another username.");
				return false;
			}

			<?php
				}
			}
			else{
					echo "No record Found.";
				}
			?>
			if ( document.getElementById("password").value.trim()!= document.getElementById("RepeatPassword").value.trim() ){
				pass = false;
				alert("Please make sure the repeat password are same with password!");
				return false;
			}
			if ( pass == true ){
				this.submit();
			}
			return false;
		}
</script>
</body>
</html>
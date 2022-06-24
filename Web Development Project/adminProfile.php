<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Admin Profile</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style CSS -->
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container border">
		<div class="text-center">
			<div>
				<h1 class="display-4 ">Admin Profile</h1>
			</div>
			<div>
				<div class="col-12 offset-md-3">
					<div class="form-group col-md-6">
						<div class="text-center">
							<a class="btn" href="admin.php">Back</a>
						</div>							
					</div>
					<form id="profile" action="includes/adminProfile.update.php" method="post">
						<?php
							$username=$_GET['admin_name'];
							$_SESSION["user"] = $username;
							include("includes/db.php");
							$sql = "SELECT * from `admin` where AdminName ='$username'";
							$query = mysqli_query($con,$sql);
							if(mysqli_num_rows($query)>0){
								foreach($query as $row){
						?>
						<div class="row">
							<div class="form-group col-md-6 text-left">
								<label for="username"><b>Username</b></label>
								<input type="text" disabled="true" class="form-control" value="<?= $row['AdminName'] ?>" placeholder="Username" id="username" name="username" required />
							</div>							
							<div class="form-group col-md-6 text-left">
								<label for="password"><b>Password</b></label>
								<input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and more than 7 characters" id="password" value="<?= $row['AdminPassword'] ?>" placeholder="Password" required>
							</div>
							<div class="form-group col-md-6">
								<input type="submit" name="update" class="btn mb-3" value="Update">
							</div>
						</div>
						<?php
									}
								}
								else{
									echo "<script type='text/javascript'>alert('No record Found');</script>";
								}
							?>
					</form>
				</div>
			</div>		
		</div>
	</div>
</body>
</html>
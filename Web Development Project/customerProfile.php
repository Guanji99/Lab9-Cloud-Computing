<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Profile</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style CSS -->
<link rel="stylesheet" href="style2.css?<?php echo time();?>">

</head>
<body>
    <?php include 'navbar.php'; ?>

	<div class="container border profile_container">
		<div class="profile_content">
			<div>
				<h1 class="display-4 ">Profile</h1>
			</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 offset-md-3">
					<form id="profile" action="includes/customerProfile.update.php" method="post">
						<?php
							$username=$_SESSION["name"];
							include("includes/db.php");
							$sql = "SELECT * from user where UserName ='$username'";
							$query = mysqli_query($con,$sql);
							if(mysqli_num_rows($query)>0){
								foreach($query as $row){
						?>
						<div class="profile_row">
							<div class="form-group col-md-6">
								<label for="username">Username</label>
								<input type="text" disabled="true" class="form-control" value="<?= $row['UserName'] ?>" placeholder="Username" id="username" name="username" required />
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" class="form-control" value="<?= $row['UserEmail'] ?>" placeholder="Your Email Address (eg. abc@mail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" name="email" required />
							</div>
							<div class="form-group col-md-6">
								<label for="password">Password</label>
								<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and more than 7 characters" id="password" value="<?= $row['UserPassword'] ?>" placeholder="Password" required>
							</div>
							<div class="form-group col-md-6">
								<input type="submit" name="update" class="btn mb-3" value="Update">
							</div>
						</div>
						<?php
									}
								}
								else{
									echo "<script type='text/javascript'>alert('No record Found');</scrip>";
								}
							?>
					</form>
				</div>
			</div>		
			</div>
		</div>
	</div>
    <?php include 'footer.php'; ?>
	
</body>
</html>
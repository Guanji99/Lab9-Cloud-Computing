<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Admin</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style CSS -->
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container border">
		<div class="text-center">
			<div id="admin">
				<h1 class="display-4 ">Admin</h1>
			</div>
			<div id="add">
				<h1 class="display-4 ">Add Admin</h1>
			</div>
			<div id="viewAdmin">
				<div class="col-12 offset-md-3">
					<div class="row mb-3">
						<a class="btn" href="logoutAdmin.php">Logout</a>
					</div>
					<div class="row mb-3">
						<a class="btn" href="admin.php">Edit admin account</a>
					</div>
					<div class="row mb-3">
						<a class="btn" href="rating_feedback_view_admin.php">Rating/Feedback</a>
					</div>	
					<div class="row mb-3">
						<div class="col-6">
							<button class="btn" onClick="display();">Add Admin</button>
						</div>
					</div>
				</div>
				<div>
					<table align="center" class="mb-4 table" >
						<tr>
							<th>Delete</th>
							<th>Id</th>
							<th>Username</th>
							<th>View Detail</th>
						</tr>
						<?php
						include("includes/db.php");
						$sql = "SELECT AdminId,AdminName from admin";
						$query = mysqli_query($con,$sql);
						if(mysqli_num_rows($query)>0){
							$admin=array();
							$i=0;
							foreach($query as $row){
						?>
							<tr>
								<td>
									<?php
										$admin[$i]=$row['AdminName'];
										$i=$i+1;
									?>
								<form id="<?=$admin[$i-1]?>" action="includes/adminDelete.delete.php?admin_name=<?=$admin[$i-1]?>" method="POST"><button class="btn">Delete Admin</button></form>
								</td>
								<td>
									<b><?php echo $row['AdminId'];?></b>
								</td>
								<td>
									<b><?php echo $row['AdminName'];?></b>
								</td>
								<td>
									<a href="adminProfile.php?admin_name=<?=$admin[$i-1]?>" >View</a>
								</td>
							</tr>
						<?php
							}
						}
						?>
					</table>
				</div>
			</div>
			<div id="addAdmin">
				<div>
					<form id="register" action="includes/adminRegister.insert.php" method="POST">
					  	<div>
							<div class="row" >
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3">
									<div class="mb-4" >
										<div class="row">
											<div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
												<button class="btn" onClick="display();">Back</button>
											</div>
										</div>
										<div class="row">
											<div class="col-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<label for="username"><b>Username</b></label>
													<input type="text" name="username" id="username" autocomplete="off" placeholder="Username" required>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<label for="password"><b>Password</b></label>
													<input type="password" name="password" id="password" placeholder="Password" required>
												</div>
											</div>
											<div class="col-12 col-sm-12 col-md-12 col-lg-12">
												<div class="form-group">
													<label for="RepeatPassword"><b>Repeat Password</b></label>
													<input type="password" name="RepeatPassword" id="RepeatPassword" placeholder="Repeat Password" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
												<input type="submit" name="login" class="btn mb-3" value="Add">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	document.getElementById("addAdmin").style.visibility = "hidden";
	document.getElementById("addAdmin").style.display = "none";
	document.getElementById("add").style.visibility = "hidden";
	document.getElementById("add").style.display = "none";
	function display(){
		if (document.getElementById("viewAdmin").style.display === "none") {
			document.getElementById("viewAdmin").style.display = "block";
			document.getElementById("admin").style.display = "block";
			document.getElementById("addAdmin").style.display = "none";
			document.getElementById("add").style.display = "none";
	  	}
		else{
			document.getElementById("viewAdmin").style.display = "none";
			document.getElementById("admin").style.display = "none";
			document.getElementById("addAdmin").style.visibility = 'visible';
			document.getElementById("addAdmin").style.display = "block";
			document.getElementById("add").style.visibility = 'visible';
			document.getElementById("add").style.display = "block";
		}
	}
	
	document.getElementById("register").onsubmit  = function(){
			event.preventDefault();
			var pass = true;
			<?php
			include("includes/db.php");
			$sql = "SELECT * from admin";
			$query = mysqli_query($con,$sql);
			if(mysqli_num_rows($query)>0){
				foreach($query as $row){	
			?>
			if(document.getElementById('username').value== "<?= $row['AdminName'] ?>"){
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
	<?php
			include("includes/db.php");
			$sql = "SELECT * from admin";
			$query = mysqli_query($con,$sql);
			if(mysqli_num_rows($query)>0){
				foreach($query as $row){	
			?>
			document.getElementById("<?= $row['AdminName']?>").addEventListener("submit", function(e) {
				  if (confirm("Are you sure?")) {
					console.log("Deleting");
					// form is submitting here
				  }
				  else {
					console.log("Cancelled");
					e.preventDefault(); // cancelling submission
				  }
				})
			<?php
				}
			}
			else{
					echo "No record Found.";
				}
			?>
	
	
	

</script>
</html>
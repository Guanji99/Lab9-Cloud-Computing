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
                        <?php
						    include("includes/db.php");
                            $sql = $con->query("SELECT UserId FROM rating");
                            $numR = $sql->num_rows;
                        
                            $sql = $con->query("SELECT SUM(RatingScore) AS total FROM rating");
                            $rData = $sql->fetch_array();
                            $total = $rData['total'];
                        
                            $avg = $total / $numR;
                        ?>
						<div class="col-6">
							<h1>Rating: <?php echo round($avg,2)?></h1>
						</div>
					</div>
				</div>
				<div>
					<h1>Feedback</h1>
					<table align="center" class="mb-4 table" >
						<tr>
							<th>Username</th>
							<th>Feedback</th>
						</tr>
						<?php
						include("includes/db.php");
						$sql = "SELECT feedback.FeedbackDetail, user.UserName FROM feedback JOIN user On feedback.UserId = user.UserId";
						$query = mysqli_query($con,$sql);
						if(mysqli_num_rows($query)>0){
							$admin=array();
							$i=0;
							foreach($query as $row){
						?>
							<tr>
								<td>
									<b><?php echo $row['UserName'];?></b>
								</td>
								<td>
									<b><?php echo $row['FeedbackDetail'];?></b>
								</td>
							</tr>
						<?php
							}
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
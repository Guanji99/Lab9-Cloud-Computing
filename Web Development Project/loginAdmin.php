<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Admin Login</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style CSS -->
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="display">
		  <form class="content" action="includes/adminLogin.search.php" method="post">
			<h2 style="text-align:center;">Admin Login</h2>
			<div class="contain">
				<label for="username"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" autocomplete="off" name="username" required>
				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<input type="submit" class="button mb-3" value="Login">
			</div>
		  </form>
		</div>
	</div>
</body>
</html>
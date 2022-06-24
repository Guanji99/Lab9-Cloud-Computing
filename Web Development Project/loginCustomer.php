<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Recipe</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style CSS -->
<link rel="stylesheet" href="style2.css?<?php echo time();?>">
</head>
<body>
    <?php include 'navbar.php'; ?>
	<div class="login_container">
        <div class="container">
            <div class="login_display">
                <div class="login_content">
                <form id="login" action="includes/userLogin.search.php" method="POST">
                    <div class="text-center">
                            <h1 class="display-4">Login</h1>
                    </div>
                    <div class="contain">
                        <div class="login_form">
                            <div>
                                <label for="username"></label>
                                <input type="text" name="username" id="username" placeholder="Username" autocorrect="off" autocomplete="off" autocapitalize="off" autofocus="" required>
                            </div>
                            <div>
                                <label for="CustomerPassword"></label>
                                <input type="password" name="CustomerPassword" id="CustomerPassword" placeholder="Password" required>
                            </div>                   
                            <input type="submit" name="login" class="button_login" value="Log In">
                            <div class="text-center">
                                <p class="login_other">
                                    <a href="forgetPassword.php" id="RecoverPassword" class="font-14">Forgot your password?</a> &nbsp; | &nbsp;
                                    <a href="register.php" id="customer_register_link" class="font-14">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
	</div>
    <script>
        document.getElementById("login").onsubmit  = function(){
            localStorage.setItem('checkLogin', 1);
        }  
    </script>
	<?php include 'footer.php'; ?>
</body>
</html>

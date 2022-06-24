<script>
    var check = 0;
    check = localStorage.getItem("checkLogin");
</script>
<nav>
    <div class="nav_left">
        <a href="homepage.php"><img src="image/logo/logo.jpg" alt=""></a>
    </div>
    <div class="nav_right">
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="category.php">Category</a></li>
            <li id="profile"></li>
            <li id="log_in"></li>
            <script>
                if (check == 1){
                    var profile = document.getElementById("profile");
                    profile.innerHTML = '<a href="customerProfile.php">Profile</a>';
                    var log_in = document.getElementById("log_in");
                    log_in.innerHTML = '<a href="logout.php">Log Out</a>';
                }

                else{
                    function login_alert(){
                        alert('Please Login An Account');
                    }
                    var profile = document.getElementById("profile");
                    profile.innerHTML = '<a href="javascript:login_alert();">Profile</a>';
                    var log_in = document.getElementById("log_in");
                    log_in.innerHTML = '<a href="loginCustomer.php">Log In/ Sign Up</a>';
                }
            </script>
        </ul>
    </div>
</nav>
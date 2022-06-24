<script>
    var rate = localStorage.getItem('rateIndex');
            var d = new Date();
            d.setTime(d.getTime() + (1*24*60*60*1000));
            var expires = "expires="+ d.toUTCString();
            document.cookie = 'rate' + "=" + rate + ";" + expires + ";path=/";
</script>
<?php
    $rate = $_COOKIE['rate'];
    session_start();
    $uid = $_SESSION["uid"];
    include 'db.php';
    $sql = "INSERT INTO rating (UserId, RatingScore)
    VALUES ('$uid',$rate)";
    function alert($msg) {
        echo "<script type='text/javascript'>alert('$msg');window.location.href='../homepage.php';</script>";
    }	
    if ($con->query($sql) === TRUE) {
        alert("Feedback Sent");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
    $con->close();
?>
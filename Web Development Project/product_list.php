<?php
	session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css?<?php echo time();?>">
    <title>Recipe</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="product_list_container">
    <script>
        var category = localStorage.getItem('category');
        var d = new Date();
        d.setTime(d.getTime() + (1*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
    </script>
    <?php
        require 'includes/db.php';
        $category = $_COOKIE['category'];
        $query = "SELECT * FROM product WHERE ProductCategory = '$category'";
        $query_run = mysqli_query($con, $query);
        $check_product = mysqli_num_rows($query_run) > 0;

        if($check_product){
            while($row = mysqli_fetch_array($query_run)){
            ?>
                        <div href="javascript:product_page()" class="product_list_content">
                            <img src="image/product/<?php echo $category ?>/<?php echo $row['ProductImage']; ?>" class="product_list_content_img" alt="">
                            <div class="product_list_content_right">
                                <div class="product_list_content_name">
                                    <h2><?php echo $row['ProductName']; ?></h2>
                                </div>
                                <div class="product_list_content_info">
                                    <p><?php echo $row['ProductInfo']; ?></p>
                                </div>
                                <div class="product_list_content_qr">
                                    <img src="image/product/<?php echo $row['ProductQr']; ?>" alt="">
                                </div>
                                <div>
                                    <a href="file/<?php echo $row['ProductFile']; ?>" download="<?php echo $row['ProductName']; ?>.pdf">Download Recipe</a>
                                </div>
                            </div>
                        </div>
            <?php
            }
        }
        else{
            echo "Error";
        }
    ?>
    </div>
    <?php include 'footer.php'; ?>
    
    
</body>
</html>
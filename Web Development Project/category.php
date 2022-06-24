<?php
	session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css?<?php echo time();?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Recipe</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="category_containers">
        <div class="category_container">
            <script>
                function category1(){
                    localStorage.setItem('category','curry');
                    var category = localStorage.getItem('category');
                    var d = new Date();
                    d.setTime(d.getTime() + (1*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
                    window.location.href = "product_list.php";
                }
                function category2(){
                    localStorage.setItem('category','rice');
                    var category = localStorage.getItem('category');
                    var d = new Date();
                    d.setTime(d.getTime() + (1*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
                    window.location.href = "product_list.php";
                }
                function category3(){
                    localStorage.setItem('category','breakfast_and_brunch');
                    var category = localStorage.getItem('category');
                    var d = new Date();
                    d.setTime(d.getTime() + (1*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
                    window.location.href = "product_list.php";
                }
                function category4(){
                    localStorage.setItem('category','noodles');
                    var category = localStorage.getItem('category');
                    var d = new Date();
                    d.setTime(d.getTime() + (1*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
                    window.location.href = "product_list.php";
                }
                function category5(){
                    localStorage.setItem('category','side_dish');
                    var category = localStorage.getItem('category');
                    var d = new Date();
                    d.setTime(d.getTime() + (1*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
                    window.location.href = "product_list.php";
                }
                function category6(){
                    localStorage.setItem('category','seafood');
                    var category = localStorage.getItem('category');
                    var d = new Date();
                    d.setTime(d.getTime() + (1*24*60*60*1000));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = 'category' + "=" + category + ";" + expires + ";path=/";
                    window.location.href = "product_list.php";
                }
            </script>
            <a href="javascript:category1();" class="category">
                <img src="image/product/12.jpg" alt="">
                <h2>Curry Recipe</h2>
            </a>
            <a href="javascript:category2();" class="category">
                <img src="image/product/13.jpg" alt="">
                <h2>Rice</h2>
            </a>
            <a href="javascript:category3();" class="category">
                <img src="image/product/6.jpg" alt="">
                <h2>Breakfast And Brunch</h2>
            </a>
            <a href="javascript:category4();" class="category">
                <img src="image/product/7.jpg" alt="">
                <h2>Noodles</h2>
            </a>
        </div>
        <div class="category_container">
            <a href="javascript:category5();" class="category">
                <img src="image/product/14.jpg" alt="">
                <h2>Side Dish Recipe</h2>
            </a>
            <a href="javascript:category6();" class="category">
                <img src="image/product/9.jpg" alt="">
                <h2>Seafood Recipe</h2>
            </a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
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
    
    <script>
        function category1(){
            localStorage.setItem('category','air_fryer');
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
    <div class="homepage_container">
        <div class="homepage_banner">
            <video autoplay muted loop id="myVideo1" class="myVideo">
                    <source src="image/banner/banner.mp4" type="video/mp4">
            </video>
        </div>
        <div class="homepage_popular">
            <div class="homepage_popular_left">
                <div class="homepage_popular_left_title">
                    <h2>Curry Recipe</h2>
                </div>
                <div class="homepage_popular_left_description">
                    <p>The delicious curry recipe</p>
                </div>
                <div class="homepage_popular_left_viewBtn">
                    <a href="javascript:category1();">View Details</a>
                </div>
            </div>
            <div class="homepage_popular_right">
                <a href=""><img src="image/product/12.jpg" alt=""></a>
                <a href=""><img src="image/product/15.jpg" alt=""></a>
                <a href=""><img src="image/product/17.jpg" alt=""></a>
            </div>
        </div>
        <div class="homepage_random">
            <div href="" class="homepage_random_container">
                    <img src="image/product/6.jpg" alt="">
                    <div class="homepage_random_name">
                        <h2>Classic Hash Browns</h2>
                    </div>
                    <div class="homepage_random_description">
                        <p>These classic diner-style hash browns are 
                            crispy on the outside and fluffy on the 
                            inside.</p>
                    </div>
            </div>
            <div href="" class="homepage_random_container">
                <img src="image/product/13.jpg" alt="">
                <div class="homepage_random_name">
                    <h2>Hainanese Chicken Rice</h2>
                </div>
                <div class="homepage_random_description">
                    <p>The secret is in the broth: this is the most amazing, flavorsome Chinese chicken rice dish you've ever tried. Garnish with sliced cucumber, sprigs of spring onions, and cilantro.</p>
                </div>
            </div>
            <div href="" class="homepage_random_container">
                <img src="image/product/14.jpg" alt="">
                <div class="homepage_random_name">
                    <h2>Chicken Curry Puffs</h2>
                </div>
                <div class="homepage_random_description">
                    <p>These oven-baked beauties are great as appetizers or a snack. They're spicy and savory, with a subtle coconut milk base. In Malaysia, they are traditionally deep fried. But here's a modern version.</p>
                </div>
            </div>
            <div href="" class="homepage_random_container">
                <img src="image/product/9.jpg" alt="">
                <div class="homepage_random_name">
                    <h2>Coconut Shrimp</h2>
                </div>
                <div class="homepage_random_description">
                    <p>These crispy shrimp are rolled in a coconut beer batter before frying. For dipping sauce, I use orange marmalade, mustard and horseradish mixed to taste.</p>
                </div>
            </div>
        </div>
        <div class="homepage_new">
            <div class="homepage_new_right">
                <img src="image/product/9.jpg" alt="">
                <img src="image/product/10.jpg" alt="">
                <img src="image/product/11.jpg" alt="">
            </div>
            <div class="homepage_new_left">
                <div class="homepage_new_left_title">
                    <h2>Seafood Recipe</h2>
                </div>
                <div class="homepage_new_left_description">
                    <p>The dish recipe to cook seafood</p>
                </div>
                <div class="homepage_new_left_viewBtn">
                    <a href="javascript:category6();">View Details</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
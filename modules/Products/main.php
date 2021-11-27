<?php 
include("../../path.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/product.css">
    <link rel="stylesheet" href="../../assets/css/lightslider.css">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/lightslider.js"></script>

    <title>AAA-Gyms-Products</title>

</head>

<body>
    <?php include(ROOT_PATH ."/components/header.php")?>
    <div class="slideshow-container">
        <div class="mySlides fade">

            <img src="../../assets/images/products/banner.jpg" class="carousel-images">

        </div>

        <div class="mySlides fade">

            <img src="../../assets/images/products/treadmill.jpeg" class="carousel-images">

        </div>

        <div class="mySlides fade">

            <img src="../../assets/images/products/banner3.jpg" class="carousel-images">

        </div>
    </div>
    <div class="heading">
        <h2>Add the Products to your Cart</h2>

    </div>
    <!-- Carousel images -->
    <div class="container">
        <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
                <div class="box">
                    <div class="box-img">
                        <img src="../../assets/images/products/product1.jpg" alt="">
                        <div class="overlay">
                            <a href="" class="buy-btn">Buy</a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="type">
                            <a href="">TreadMill</a>
                            <a href="" class="category">Category</a>
                        </div>
                        <span class="price">₹ 100</span>
                        <!-- <a href="../../controllers/products/add_to_cart.php?id=1" class="btn">Buy Now</a> -->
                    </div>
                </div>
            </li>
            <li class="item-b">
                <div class="box">
                    <div class="box-img">
                        <img src="../../assets/images/products/product1.jpg" alt="">
                        <div class="overlay">
                            <a href="" class="buy-btn">Buy</a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="type">
                            <a href="">TreadMill</a>
                            <a href="" class="category">Category</a>
                        </div>
                        <span class="price">₹ 100</span>
                        <!-- <a href="../../controllers/products/add_to_cart.php?id=1" class="btn">Buy Now</a> -->
                    </div>
                </div>
            </li>
            <li class="item-c">
                <div class="box">
                    <div class="box-img">
                        <img src="../../assets/images/products/product1.jpg" alt="">
                        <div class="overlay">
                            <a href="" class="buy-btn">Buy</a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="type">
                            <a href="">TreadMill</a>
                            <a href="" class="category">Category</a>
                        </div>
                        <span class="price">₹ 100</span>
                        <!-- <a href="../../controllers/products/add_to_cart.php?id=1" class="btn">Buy Now</a> -->
                    </div>
                </div>
            </li>

        </ul>

    </div>
    <script src="../../assets/js/script.js"></script>
</body>






</html>
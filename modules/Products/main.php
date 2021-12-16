<?php 
include("../../path.php");
include(ROOT_PATH."/controllers/products.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/product.css">
    <link rel="stylesheet" href="../../assets/css/lightslider.css">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/lightslider.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <title>AAA-Gyms-Products</title>

</head>

<body>
    <?php include(ROOT_PATH ."/components/header.php")?>
    <div class="slideshow-container">
        <div class="mySlides fade">

            <img src="../../assets/images/products/probg1.jpg" class="carousel-images">

        </div>

        <div class="mySlides fade">

            <img src="../../assets/images/products/probg2.jpg" class="carousel-images">

        </div>

        <div class="mySlides fade">

            <img src="../../assets/images/products/progb3.jpg" class="carousel-images">

        </div>
    </div>
    <div class="headingtop">
        <h2>Shop Now for Exclusive offer from AAA-Gyms</h2>

    </div>
    <!-- Carousel images -->
    <div class="container">
        <div class="heading">
            Limited Time Offer
        </div>
        <ul id="autoWidth" class="cs-hidden">
            <?php foreach($products as $product):?>
            <li class="item-a">
                <div class="box">
                    <div class="box-img">
                        <img src="<?php echo BASE_URL . '/assets/products/' . $product['image']; ?>" alt="">
                        <div class="overlay">
                            <a href="product.php?id=<?php echo $product['id'];?>" class="buy-btn">Buy</a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="type">
                            <a href=""><?php 
                                if(strlen($product['name']) > 30){
                                    echo substr($product['name'], 0, 30) . '...';
                                }
                                ?></a>

                            <div class="price-container">
                                <span class="price">₹<?php echo $product['price']-$product['discount'];?></span>
                                <p class="discount"><strike>₹<?php echo $product['price'];?></strike></p>

                            </div>
                            <a href="" class="category" style="color: orangered;
                                                                font-size: 13px;
                                                            font-weight: 600;"><?php 
                                if(strlen($product['category']) > 20){
                                    echo substr($product['category'], 0, 20) . '...';
                                }
                                else{
                                    echo $product['category'];
                                }
                                ?></a>

                        </div>
                        <!-- <a href="../../controllers/products/add_to_cart.php?id=1" class="btn">Buy Now</a> -->
                    </div>
                </div>
            </li>
            <?php endforeach;?>

        </ul>

        <div class="headingtop">
            Hurry Up! Limited Stock
        </div>
        <ul id="chont" class="cs-hidden">
            <?php foreach($products as $product):?>
            <li class="item-a">
                <div class="box">
                    <div class="box-img">
                        <img src="<?php echo BASE_URL . '/assets/products/' . $product['image']; ?>" alt="">
                        <div class="overlay">
                            <a href="" class="buy-btn">Buy</a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="type">
                            <a href=""><?php 
                                if(strlen($product['name']) > 20){
                                    echo substr($product['name'], 0, 20) . '...';
                                }
                                ?></a>
                            <a href="" class="category">Category</a>
                        </div>
                        <span class="price">₹<?php echo $product['price'];?></span>
                        <!-- <a href="../../controllers/products/add_to_cart.php?id=1" class="btn">Buy Now</a> -->
                    </div>
                </div>
            </li>
            <?php endforeach;?>

        </ul>


    </div>

    <?php include(ROOT_PATH."/components/footer.php");?>

    <script src="../../assets/js/script.js"></script>
    <script>
    $(document).ready(function() {
        $("#chont").lightSlider({
            autoWidth: true,
            loop: true,
            onSliderLoad: function() {
                $("#chont").removeClass("cS-hidden");
            },
        });
    });
    </script>
</body>






</html>
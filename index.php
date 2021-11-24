<?php include("path.php");
include(ROOT_PATH."/components/database/db.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAA Gyms</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header -->
    <?php include("components/header.php");?>
    <!-- /Header -->
    <?php include("components/messages.php");?>
    <!-- Slideshow comtainer -->
    <div class="slideshow-container">
        <div class="mySlides fade">

            <img src="assets/images/bg1.jpg" style="width: 100%;height: 80vh;">

        </div>

        <div class="mySlides fade">

            <img src="assets/images/bg3.jpg" style="width: 100%;height: 80vh;">

        </div>

        <div class="mySlides fade">

            <img src="assets/images/gym3.jpg" style="width: 100%;height: 80vh;">

        </div>
    </div>
    <!-- /Slideshow comtainer -->
    <!-- Specialoffer -->
    <div>
        <div class="specialoffer">
            <div class="specialoffer-content">
                <h1>Special Offer</h1>
                <div class="buygym">
                    <h2>BUY AN AAA'S GYM <h2>
                            <h2>MEMBERSHIP TODAY </h2>
                            <h4>Start your Fitness Journey Today</h4>

                </div>
                <a href="#" class="btn">Buy now</a>
            </div>
        </div>
    </div>
    <!-- branding -->
    <div class="centers">
        <h2 class="title">AAA<span>-Gyms</span></h2>
        <p class="muchmore">We can give you much more than others</p>
        <ul>
            <li><i class="fas fa-city large"></i><br>
                <h3>3+ Gym centers</h3>
            </li>
            <li><i class="fas fa-dumbbell large"></i><br>
                <h3>Certified Trainers</h3>
            </li>
            <li><i class="fas fa-people-arrows large"></i><br>
                <h3>Personal training</h3>
            </li>
            <li><i class="fas fa-gifts large"></i><br>
                <h3>Gym Products</h3>
            </li>
            <li><i class="far fa-newspaper large"></i><br>
                <h3>Informative Blogs</h3>
            </li>
        </ul>
    </div>
    <div class="ad_register">
        <h2 class="text-center" style="color: white; font-size: 2rem;">Register Now to Join AAA-Gyms</h2>
        <p class="ad_text  text-center ">We provide you the best services,products and training sessions</p>
        <p class="ad_text  text-center ">Hurry!!Grab a seat <span>NOW!!</span></p>
        <h4 class="text-center" style="color: white;">Click below to register</h4>
        <i class="fas fa-arrow-down"></i>
        <a href="register.php" class="add">Register</a>
    </div>
    <!-- /branding -->
    <!-- Footer -->
    <?php include("components/footer.php");?>
    <!-- /Footer -->

</body>
<script src="assets/js/script.js"></script>

</html>
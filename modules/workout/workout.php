<?php include("../../path.php");
include(ROOT_PATH."/components/database/db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Select Workout to Begin
    </title>

    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/workout.css">
    <link rel="stylesheet" href="../../assets/css/registeration.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <?php include(ROOT_PATH ."/components/messages.php");?>
    <div class="container">
    
    <div class="item" id="item1">

        <div class="titl1">Strength Training </div>
        <div class="titlmid1">
            <img src="https://fitnessvolt.com/wp-content/uploads/2020/04/hafthor-bjornsson-520kg-deadlift.jpg" class="img">
        </div>
        <div class="titlend1">
            
        </div>
    </div>
    <div class="item" id="item2">
      <div class="titlmid1">
        <img src="https://www.healthkart.com/connect/wp-content/uploads/2016/11/banner-2-1280x720.jpg" alt=""  class="img">
      </div>
      <div class="titlend1">
        
      </div>
      <div class="titl1">BODYBUILDING </div>
    </div>
    <div class="item" id="item3">
        <div class="titl1">FAT LOSS </div>
        <div class="titlmid1"><img src="https://sp-ao.shortpixel.ai/client/q_lossy,ret_img,w_2048,h_1147/https:/sixworkout.com/wp-content/uploads/2018/07/AdobeStock_164981310.jpeg" alt="" class="img"></div>
        <div class="titlend1"></div>
    </div>
    <div class="item" id="item4">
        <div class="titl1">Calisthenics </div>
        <div class="titlmid1">
            <img src="https://i0.wp.com/blog.alexdevero.com/wp-content/uploads/2016/02/CalisthenicsWhy-It-Is-The-Best-Hobby-post.jpg?fit=1024%2C576&ssl=1" alt="" class="img">
        </div>
        <div class="titlend1"></div>
    </div>
    <div class="item" id="item5">
        <div class="titl1">Weight Gain </div>
        <div class="titlmid1">
            <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/321/321518/protein-shakes-are-good-weight-gain-foods.jpg?w=1155&h=1541" alt="" class="img">
        </div>
        <div class="titlend1"></div>
    </div>
    <div class="item" id="item6">
        <div class="titl1">Gymnastics </div>
        <div class="titlmid1">
            <img src="" alt="" class="img">
        </div>
        <div class="titlend1"></div>
    </div>
</div>
    

    <!-- workout module to be done by avishkar -->
    <!-- use functions mentioned in database/db.php to edit data in msql database -->
    <!-- Bro for css use classes mentioned in style.css for styling in assets folder -->
    <!-- for eg to style an input box use class="text-input" to maintain uniformity dont create seperate classes again for same thing-->
    <!-- also try to use bootstrap for skipping css and faster coding
just include bootstrap css and script link in workout.php <head></head> element 
-->
    <!-- check youtube to use bootsrap 
-->
    <!-- i m pasting a link below to learn bootstrap us it for referance 
-->
    <?php $url = "https://youtu.be/eow125xV5-c"?>
</body>

</html>
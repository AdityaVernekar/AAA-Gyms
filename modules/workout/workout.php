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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <?php include(ROOT_PATH ."/components/messages.php");?>
    <h1 id="work" style="text-align: center; margin-top: 10px; padding-top: 10px;font-size:40px;">SELECT A WORKOUT PLAN
    </h1>
    <div class="container">
        <div class="item" id="item1">
            <a href="strength.php">
                <div class="titlmid1">
                    <img src="https://fitnessvolt.com/wp-content/uploads/2020/04/hafthor-bjornsson-520kg-deadlift.jpg"
                        class="img">
                </div>
                <div class="titlend1">

                </div>
                <div class="titl1">
                    Strength Training
            </a>
        </div>
    </div>
    <div class="item" id="item2">
        <a href="bodybuilding.php">
            <div class="titlmid1">
                <img src="https://www.healthkart.com/connect/wp-content/uploads/2016/11/banner-2-1280x720.jpg" alt=""
                    class="img">
            </div>
            <div class="titlend1">

            </div>
            <div class="titl1">BODY BUILDING </div>
        </a>
    </div>
    <div class="item" id="item3">
        <a href="FatLoss.php">
            <div class="titlmid1"><img src="../../assets/img/fatloss.webp" alt="" class="img"></div>
            <div class="titlend1"></div>
            <div class="titl1"> FAT LOSS </div>
        </a>
    </div>
    <div class="item" id="item4">
        <a href="Fatloss.php">
            <div class="titlmid1">
                <img src="https://i0.wp.com/blog.alexdevero.com/wp-content/uploads/2016/02/CalisthenicsWhy-It-Is-The-Best-Hobby-post.jpg?fit=1024%2C576&ssl=1"
                    alt="" class="img">
            </div>
            <div class="titlend1"></div>
            <div class="titl1">Body Toning </div>
        </a>
    </div>
    <div class="item" id="item5">
        <a href="Weight_gain.php">
            <div class="titlmid1">
                <img src="../../assets/img/weight_gain.jpg" alt="" class="img">
            </div>
            <div class="titlend1"></div>
            <div class="titl1"> Weight Gain</div>
        </a>
    </div>
    <div class="item" id="item6">
        <a href="Weight_gain.php">
            <div class="titlmid1">
                <img src="../../assets/img/leanbulk.jpg" alt="" class="img">
            </div>
            <div class="titlend1"></div>
            <div class="titl1">

                Lean Bulk
            </div>
        </a>
    </div>
    </div>


    <?php include(ROOT_PATH."/components/footer.php");?>
</body>

</html>
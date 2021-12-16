<?php include("../../path.php");
include(ROOT_PATH."/controllers/workout.php");?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <!-- <link rel="stylesheet" href="../../assets/css/workout.css"> -->
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title>Weight gain</title>
    <style>
    table,
    td,
    th {
        border: 1px solid rgba(0, 0, 0, .1);
    }

    table {
        border-collapse: separate;
        border-spacing: 0;
        border-width: 1px 0 0 1px;
        border-color: grey;
        background-color: #f5f5f5;
    }

    .table {

        height: 44px;
        border: 2px solid black;
    }

    .td1 {
        width: 947px;
        border-color: #222222;
        background-color: #333333;
        text-align: center;
        height: 60px;

    }

    .span1 {
        color: #ffffff;
        font-size: 16pt;

    }

    .td2 {
        width: 947px;
        border-color: #222222;
        background-color: #59b2f0;
        text-align: center;
        height: 60px;

    }

    .td3 {
        width: 342px;
        text-align: center;
    }

    .span2 {
        font-size: 12pt;

    }

    .td4 {
        width: 144px;
        text-align: center;
    }

    .td5 {
        width: 342px
    }

    .td6 {
        width: 144px;
        text-align: center;
    }

    .span3 {
        font-family: 12pt;
    }

    .container {
        padding: 60px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        flex-direction: column;
        /* right: 109px; */
    }

    .work {
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode";
        font-size: 40px;
    }
    </style>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");
    if(!isset($_SESSION['id'])){
        header("location:".BASE_URL."/default.php");
        
        
    }
    else{
        if($is_workout_set=="Lean Bulk"){
            echo "<h1 class='work' style='text-align: center; margin-top: 10px; padding-top: 10px;'>Lean Bulk</h1>";
        }
        else{
            echo "<h1 class='work' style='text-align: center; margin-top: 10px; padding-top: 10px;'>Weight Gain</h1>";
        }
    }
    
    
    ?>

    <div class="container">


        <table class="table" style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td class="td1" colspan="4">
                        <span class="span1"><STROng>BACK AND BICEPS </STROng></span>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="4">
                        <span class="span1"> <strong>MONDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td class="td3">
                        <span class="span2">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p style="font-size:12pt;">Jumping Jacks</p>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Bent Over Barbell Rows</a>
                    </td>
                    <td class="td6">
                        <span class="span3">4</span>
                    </td>
                    <td class="td6">
                        <span class="span3">12</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p class="span2">Wide Grip Lat Pull Down</p>
                    </td>
                    <td class="td6">
                        <span class="span3">4 </span>
                    </td>
                    <td class="td6">
                        <span class="span3">10</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Lat Pushdowns</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">8</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p>Barbell Biceps Curls</p>
                    </td>
                    <td class="td6">
                        <span class="span3">4</span>
                    </td>
                    <td class="td6">
                        <span class="span3">8</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Preachers curls</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">12</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td class="td1" colspan="4">
                        <span class="span1"><STROng> CHEST TRICEPS AND SHOULDERS</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="4">
                        <span class="span1"> <strong>TUESDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td class="td3">
                        <span class="span2">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Bench Press</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Chest Dips</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">12</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p class="span2">Overhead Triceps Extension</p>
                    </td>
                    <td class="td6">
                        <span class="span3">3 </span>
                    </td>
                    <td class="td6">
                        <span class="span3">12</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Tricep Pulldown</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">12</span>
                    </td>
                    <td class="td6">
                        <span class="span3">120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Sideer Lateral To Front Raise</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">10</span>
                    </td>
                    <td class="td6">
                        <span class="span3">120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Shoukder Press</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">12</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td class="td1" colspan="4">
                        <span class="span1"><STROng> LEGS</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="4">
                        <span class="span1"> <strong>WEDNESDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td class="td3">
                        <span class="span2">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Squats</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Dumbbell Lunges</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">25</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p class="span2">Leg Curls</p>
                    </td>
                    <td class="td6">
                        <span class="span3">3 </span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Bench Dips</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Leg Extensions</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">

            <tbody>
                <tr>
                    <td class="td1" colspan="4">
                        <span class="span1"><STROng> PULL</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="4">
                        <span class="span1"> <strong>THURSDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td class="td3">
                        <span class="span2">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Cable Rows</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Deadlift</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">25</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p class="span2">Pull Ups</p>
                    </td>
                    <td class="td6">
                        <span class="span3">3 </span>
                    </td>
                    <td class="td6">
                        <span class="span3">30</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Face Pull</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Seated Incline Curls</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td class="td1" colspan="4">
                        <span class="span1"><STROng> PUSH</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="4">
                        <span class="span1"> <strong>FRIDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td class="td3">
                        <span class="span2">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Incline Bench Press</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Cable Crossover</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">25</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p class="span2">Skull Crushers</p>
                    </td>
                    <td class="td6">
                        <span class="span3">3 </span>
                    </td>
                    <td class="td6">
                        <span class="span3">30</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Lateral Raises</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">plank</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">

            <tbody>
                <tr>
                    <td class="td1" colspan="4">
                        <span class="span1"><STROng> LEGS</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="4">
                        <span class="span1"> <strong>SATURDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td class="td3">
                        <span class="span2">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td class="td4">
                        <span class="span2">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Dumbbell Squat And Swing</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                    <td class="td6">
                        <span class="span3">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Machine Hack Squat</a>
                    </td>
                    <td class="td6">
                        <span class="span3">3</span>
                    </td>
                    <td class="td6">
                        <span class="span3">25</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <p class="span2">Romanian Deadlift</p>
                    </td>
                    <td class="td6">
                        <span class="span3">3 </span>
                    </td>
                    <td class="td6">
                        <span class="span3">30</span>
                    </td>
                    <td class="td6">
                        <span class="span3">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">Bodyweight Squats</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td class="td5">
                        <a href="" target="_blank">DB Side Plank</a>
                    </td>
                    <td class="td6">
                        <span class="span3">5</span>
                    </td>
                    <td class="td6">
                        <span class="span3">50</span>
                    </td>
                    <td class="td6">
                        <span class="span3">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include(ROOT_PATH .'/components/footer.php'); ?>
</body>


</html>
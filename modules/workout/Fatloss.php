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
    <title>FAT LOSS</title>
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

    .container {
        padding: 60px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        flex-direction: column;

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
        if($is_workout_set=="Body Toning"){
            echo "<h1 class='work' style='text-align: center; margin-top: 10px; padding-top: 10px;'>Body Toning Plan</h1>";
        }
        else{
            echo "<h1 class='work' style='text-align: center; margin-top: 10px; padding-top: 10px;'>Fat Loss Plan</h1>";
        }
    }
    ?>
    <div class="container">


        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng>Low Impact Cardio </STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>MONDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;   text-align: center;">
                        <span style="font-size: 12pt;">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size:12pt;">Jumping Jacks</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Jumping Sqaut</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">25</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Lateral Squat</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">10</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Forward Lunges</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">10</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p></p>Treadmill Run</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15 min(2-3km)</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Plank</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30-60 sec</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> COMPOUND LIFTS</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>TUESDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;   text-align: center;">
                        <span style="font-size: 12pt;">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Squat Jump</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Burpees</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">12</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Inchworm</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">12</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Barbell Jammers</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">12</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">DB Incline bench press</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">10</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Dumbell Pullovr</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">12</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> TREADMILL RUN, BODYWEIGHT
                                WORKOUT</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>WEDNESDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;   text-align: center;">
                        <span style="font-size: 12pt;">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Lunges</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Jumping Jacks</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">25</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Squat</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Bench Dips</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Dead Hang</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">

            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> JUMPING ROPE AND
                                COMPOUND</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>THURSDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;   text-align: center;">
                        <span style="font-size: 12pt;">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Jumping Rope</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Deadlift</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">25</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Barbell Bent Over Row</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Face Pull</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Barbell Upright Row</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <h3>PULL WORKOUT B </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> CARDIO AND BOYDWEIGHT</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>FRIDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;   text-align: center;">
                        <span style="font-size: 12pt;">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Jumping Jacks</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Mountain Climbing</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">25</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Reverse Crunches</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Leg Raises</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Plank</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">

            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> DUMBEBELL HIIT EXERCISE</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>SATURDAY</strong></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;   text-align: center;">
                        <span style="font-size: 12pt;">
                            <strong>EXERCISE</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>Sets </strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REP GOAL TOTAL</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>REST</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Dumbbell Squat And Swing</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">90-120 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">DB Farmers Carry Walk</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">25</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Dumbbell Man-Makers</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">DB Box</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">DB Side Plank</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include(ROOT_PATH .'/components/footer.php'); ?>
</body>

</html>
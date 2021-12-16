<?php include("../../path.php");
include(ROOT_PATH."/components/database/db.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <!-- <link rel="stylesheet" href="../../assets/css/workout.css"> -->
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title>BODYBUILDING WORKOUT PLAN</title>
</head>
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
    /* position: relative; */
    flex-direction: column;
    /* right: 109px; */
}

.work {
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode";
    font-size: 40px;
}
</style>

<body>
    <?php include(ROOT_PATH."/components/header.php");
    if(!isset($_SESSION['id'])){
        header("location:".BASE_URL."/default.php");
        
        
    }
    
    ?>

    <h1 class="work" style="text-align: center; margin-top: 10px; padding-top: 10px;">BODY BUILDING</h1>
    <div class="container">
        <table style="height :44px; border: 2px solid black;">
            <h3>PUSH WORKOUT A </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> CHEST, SHOULDER AND
                                TRICEP</STROng></span>
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
                        <p style="font-size:12pt;">Flat Barbell Bench Press</p>
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
                        <a href="" target="_blank">Seated Behind The Neck Press</a>
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
                        <p style="font-size: 12pt;">Tricep Dips</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Standing Cable Crossovers</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">40 sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Seated Tricep Extesnions</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Seated Dumbbell Lateral Raises</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15 sec</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black;">
            <h3>PULL WORKOUT A </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> BACK, BICEP AND TRAPS</STROng></span>
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
                        <a href="" target="_blank">Barbell Conventional Deadlift</a>
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
                        <a href="" target="_blank">Chin-ups</a>
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
                        <p style="font-size: 12pt;">Chest Supported Rows</p>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 </span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">60sec</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Shrugs</a>
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
                        <a href="" target="_blank">Standing Barbell Curls</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">30</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Standing Cable Reverse Fly</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">50</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">15 sec</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="height :44px; border: 2px solid black;">
            <h3>LEG WORKOUT A </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> QUADS, HAMSTRINGS &
                                CALVES</STROng></span>
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
                        <a href="" target="_blank">Barbell Back Squat</a>
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
                        <a href="" target="_blank">Barbell Good Mornings</a>
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
                        <p style="font-size: 12pt;">Leg Press</p>
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
                        <a href="" target="_blank">Leg Curl</a>
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
                        <a href="" target="_blank">Calf Raises</a>
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
        <table style="height :44px; border: 2px solid black;">
            <h3>PUSH WORKOUT B </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> CHEST, SHOULDERS &
                                TRICEPS</STROng></span>
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
                        <a href="" target="_blank">Standing Overhead Press</a>
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
                        <a href="" target="_blank">Incline Bench Press</a>
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
                        <p style="font-size: 12pt;">Close Grip Bench Press</p>
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
                        <a href="" target="_blank">Seated Machine Fly</a>
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
                        <a href="" target="_blank">Standing Tricep Pushdown</a>
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
        <table style="height :44px; border: 2px solid black;">
            <h3>PULL WORKOUT B </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> BACK, BICEPS & TRAPS</STROng></span>
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
                        <a href="" target="_blank">Barbell Snatch Grip</a>
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
                        <a href="" target="_blank">Barbell Rows</a>
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
                        <p style="font-size: 12pt;">1-arm Rows</p>
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
                        <a href="" target="_blank">Incline Dumbell Curl</a>
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
                        <a href="" target="_blank">Seated Machine Reverse Fly</a>
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
        <table style="height :44px; border: 2px solid black;">
            <h3>LEG WORKOUT B </h3>
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> QUADS, HAMSTRINGS &
                                CALVES</STROng></span>
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
                        <a href="" target="_blank">Barbell Front Squat</a>
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
                        <a href="" target="_blank">Barbell Romanian Deadlifts</a>
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
                        <p style="font-size: 12pt;">Barbell Hip Thrusts</p>
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
                        <a href="" target="_blank">Dumbell Lunges</a>
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
                        <a href="" target="_blank">Seated Leg Extensions</a>
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
    <?php include(ROOT_PATH."/components/footer.php");?>
</body>

</html>
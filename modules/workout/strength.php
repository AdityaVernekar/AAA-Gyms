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
    <title>Strength Training</title>
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
        right: 109px;
    }
    </style>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");
    if(!isset($_SESSION['id'])){
        header("location:".BASE_URL."/default.php");
        
        
    }?>
    <div class="container">


        <table style="height :44px; border: 2px solid black;">
            <tbody>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #333333; text-align: center; height:60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"><STROng> STRENGTH TRAINING
                                PROGRAM</STROng></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>DAY 1</strong></span>
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
                            <strong>Sets x Reps</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>%1RM</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>1st set RPE</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size:12pt;">Squat Variant</p>
                        <p style="font-size: 12pt;"></p>
                        <span style="font-size: 12pt;">»</span>
                        <a href="" target="_blank">Barbell Squats</a>&nbsp;(Either low or high bar position),&nbsp;
                        <a href="" target="_blank">Front squat</a>
                        &nbsp;,
                        <a href="" target="_blank"> Zercher squat</a>
                        ,&nbsp; or <a href="" target="">Safety-bar Back squats</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 7-9</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">7</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Bench Press</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 7-9</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">67-72.5%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">7</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p style="font-size: 12pt;">Vertical pull</p>
                        <p></p>
                        <span style="font-size: 12pt;">»</span>
                        <a href=" " target="_blank" rel="noopener noreferrer">Chin-ups</a>&nbsp;or <a href=" "
                            target=_blank>pull-ups</a>(use band assist if required, add weight if they are too easy.)
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 7-9</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black; border-collapse: separate; border-spacing: 0 1em;">
            <tbody>

                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>DAY 2</strong></span>
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
                            <strong>Sets x Reps</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>%1RM</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>1st set RPE</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank" style="font-size: 12pt;">BACK SQUAT</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 1-3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">80-85%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                </tr>

                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Bench Press</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 1-3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">80-85%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">DEADLIFT</a>
                        <p></p>
                        <span style="font-size: 12pt;">»</span>
                        &nbsp;Conventional Deadlift or Sumo Deadlift. Choose one or the other and do it consistently on
                        all
                        training days you deadlift
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 1-3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">80-85%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Vertical Push</a>
                        <p></p>
                        <span style="font-size: 12pt;">»</span>
                        <a href="http://" target="_blank" rel="noopener noreferrer">Overhead Barbell Press</a>&nbsp;or
                        <a href="http://" target="_blank" rel="noopener noreferrer">Dumbell Press</a>&nbsp;(Standing or
                        seated),&nbsp;
                        <a href="">Landmine Press</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 1-3</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">5</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black; border-collapse: separate; border-spacing: 0 1em;">
            <tbody>

                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>DAY 3</strong></span>
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
                            <strong>Sets x Reps</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>%1RM</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>1st set RPE</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank" style="font-size: 12pt;">BACK SQUAT</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 3-5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">82-87.5%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>

                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Bench Press</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 3-5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">82-87.5%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p>Horizontal Pull</p>
                        <span style="font-size: 12pt;">»</span>
                        <a href="" target="_blank">Cable rows</a>, <a href="http://" target="_blank"
                            rel="noopener noreferrer">Dumbell rows</a>,
                        <a href="http://" target="_blank" rel="noopener noreferrer"> Barbell Rows</a>, <a href="http://"
                            target="_blank" rel="noopener noreferrer">Seal Rows</a>,
                        <a href="http://" target="_blank" rel="noopener noreferrer">TRX Rows</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 4-6</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">Leg Curls</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 12</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table style="height :44px; border: 2px solid black; border-collapse: separate; border-spacing: 0 1em;">
            <tbody>

                <tr>
                    <td style="width: 947px; border-color: #222222; background-color: #59b2f0; text-align: center; height: 60px;"
                        colspan="4">
                        <span style="color: #ffffff; font-size: 16pt;"> <strong>DAY 4</strong></span>
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
                            <strong>Sets x Reps</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>%1RM</strong>
                        </span>
                    </td>
                    <td style="width: 144px; text-align:center ;">
                        <span style="font-size: 12pt;">
                            <strong>1st set RPE</strong>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank" style="font-size: 12pt;">BENCH VARIANT</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 6-8</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>

                <tr>
                    <td style="width: 342px;">
                        <a href="" target="_blank">DEADLIFT</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 3-5</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">82-87.5%</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 342px;">
                        <p>Horizontal Pull</p>
                        <span style="font-size: 12pt;">»</span>
                        <a href="" target="_blank">Cable rows</a>, <a href="http://" target="_blank"
                            rel="noopener noreferrer">Dumbell rows</a>,
                        <a href="http://" target="_blank" rel="noopener noreferrer"> Barbell Rows</a>, <a href="http://"
                            target="_blank" rel="noopener noreferrer">Seal Rows</a>,
                        <a href="http://" target="_blank" rel="noopener noreferrer">TRX Rows</a>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">3 x 8-12</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">NA</span>
                    </td>
                    <td style="width: 144px; text-align: center; ">
                        <span style="font-family: 12pt;">8</span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <?php include(ROOT_PATH .'/components/footer.php'); ?>
</body>

</html>
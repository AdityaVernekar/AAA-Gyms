<?php include("../../path.php");
include(ROOT_PATH."/controllers/workout.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/workout.css">
    <title>Select Workout</title>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <?php include(ROOT_PATH ."/components/messages.php");?>

    <div class="container">
        <h1>Select Workout</h1>

        <div class="info">
            <span>You can view a detailed Information on all Workouts.Click<a
                    href="<?php echo BASE_URL.'/modules/workout/workout.php' ?>">here</a></span>

        </div>

        <p>Fill the form below to continue using AAA-gyms Services</p>
        <form action="index.php" method="post">
            <div class="plan-name">
                <label for="plan_name">Select a plan</label>
                <select name="plan_name" id="paln">
                    <option value="Strength Training">Strength Training</option>
                    <option value="BODYBUILDING">BODYBUILDING</option>
                    <option value="Calisthenics">Calisthenics</option>
                    <option value="Weight Gain ">Weight Gain </option>
                    <option value="Gymnastics">Gymnastics</option>
                    <option value="Body Toning">Body Toning</option>

                </select>

            </div>
            <div class="duration">
                <label for="duration">Select a duration</label>
                <select name="duration" id="duration">
                    <option value="4 week">4 week</option>
                    <option value="8 weeks">8 weeks</option>
                    <option value="12 weeks">12 weeks</option>


                </select>
            </div>
            <div class="branch">
                <label for="barnch">Choose Your Nearest Gym</label>
                <select name="branch" id="duration">
                    <option value="Ponda">Ponda</option>
                    <option value="Margao">Margao</option>
                    <option value="Panjim">Panjim</option>


                </select>
            </div>

            <button type="submit" class="btn" name="submit-workout">Submit</button>

        </form>

    </div>
</body>

</html>
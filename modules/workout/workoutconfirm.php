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

        <div class="confirm-container">
            <p>You have selected the following workout</p>
            <span>To continue with this plan Please continue with payment</span>
            <form action="workoutconfirm.php" method="post">


                <div class="workout-details">
                    <h4><?php echo $_SESSION['plan_name']; ?></h4>
                    <span>
                        <label for="">Price:</label>
                        <input type="text" readonly class="text-input" value="1200" name="price">

                    </span>
                </div>
        </div>

        <button type="submit" class="btn" name="submit-plan">Submit</button>

        </form>

    </div>
</body>

</html>
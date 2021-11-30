<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include(ROOT_PATH."/components/database/db.php");
$table = 'workout';
$workout_plan = "";
$duration="";
$user_id="";
$username="";
$branch="";





if(isset($_POST['submit-workout'])){
    $workout_plan = $_POST['plan_name'];
    $duration = $_POST['duration'];
    $branch=$_POST['branch'];
    $user_id = $_SESSION['id'];
    $username = $_SESSION['name'];
    $_POST['user_id'] = $user_id;
    $_POST['username'] = $username;

    unset($_POST['submit-workout']);
   
    // dd($_POST);
    $workout_id = create($table, $_POST);
    header("location: " . BASE_URL . "/modules/workout/workout.php");

}
































?>
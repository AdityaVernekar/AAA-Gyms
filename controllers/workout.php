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
    
    unset($_POST['submit-workout']);

   
    // dd($_POST);
    
    
    
    $_SESSION['plan_name'] = $workout_plan;
    $_SESSION['duration'] = $duration;
    $_SESSION['branch'] = $branch;
    // dd($_SESSION);
    header("location: " . BASE_URL . "/modules/workout/workoutconfirm.php");
    


}
if(isset($_POST['submit-plan'])){
    $_POST['plan_name'] = $_SESSION['plan_name'];
    $_POST['duration'] = $_SESSION['duration'];
    $_POST['branch'] = $_SESSION['branch'];
    $_POST['user_id'] = $_SESSION['id'];
    $_POST['username'] = $_SESSION['name'];
    $_POST['price']=$_POST['price'];
    unset($_POST['submit-plan']);
    // dd($_POST);

    $workout_id = create($table, $_POST);
    header("location: " . BASE_URL . "/modules/workout/workout.php");

}































?>
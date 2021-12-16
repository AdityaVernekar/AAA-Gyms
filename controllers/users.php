<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include(ROOT_PATH."/components/database/db.php");
include(ROOT_PATH."/helpers/validateUsers.php");
include(ROOT_PATH."/helpers/middlewares.php");
include(ROOT_PATH."/helpers/validateOtp.php");
$errors = array();
$table="users";
$name = '';
$id='';
$admin='';
$email='';
$password='';
$cpassword='';
$mobile='';
$dob='';
$height='';
$weight='';

//function to login a user
function loginUser($user){
    //log in user
    $_SESSION['id']=$user['id'];
    $_SESSION['name']= $user['name'];
    $_SESSION['admin']=$user['admin'];
    $_SESSION['email']= $user['email'];
    $_SESSION['message']="You are now logged in";
    $_SESSION['type']='success';

    if ($_SESSION['admin']==1) {
        header("location:".BASE_URL."/admin/dashboard.php");
    }
    else {
        $logged_user = selectOne("workout",['user_id'=>$_SESSION['id']]);
        $is_workout_set = $logged_user['plan_name'];
        if($is_workout_set=="no_plan_selected"){
            header("location:".BASE_URL."/modules/workout/index.php");
        }
        else if (!$logged_user)
        {
            header("location:".BASE_URL."/modules/workout/index.php");
        }
        else if($is_workout_set == "Strength Training"){
            header("location:".BASE_URL."/modules/workout/strength.php");
        }
        else if($is_workout_set == "bodybuilding"){
            header("location:".BASE_URL."/modules/workout/bodybuilding.php");
        }
        else if($is_workout_set == "Fat Loss"){
            header("location:".BASE_URL."/modules/workout/Fatloss.php");
        }
        else if($is_workout_set == "Weight Gain"){
            header("location:".BASE_URL."/modules/workout/Weight_gain.php");
        }
        else if($is_workout_set == "Lean Bulk"){
            header("location:".BASE_URL."/modules/workout/Weight_gain.php");
        }
        else{

            header("location:".BASE_URL."/modules/workout/Fatloss.php");
        }
        
        
        
        
    } 
    
    exit();

    
    
    
    
}

//function to register a user
if(isset($_POST['register-btn'])|| isset($_POST['create-admin'])){
    $errors = validateUsers($_POST);
    if(count($errors)===0){
        unset($_POST['register-btn'],$_POST['cpassword'],$_POST['create-admin']);
        $_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
            
        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            sendotp($_POST); 
            $_SESSION['message'] = 'Admin user created';
            $_SESSION['type'] = 'success';
            header("location:".BASE_URL."/modules/workout/workout.php"); 
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create('users',$_POST);
            sendotp($_POST);     
        }   
       
        
           
        
    }
    else{
        $name =$_POST['name'] ;
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $mobile = $_POST['phone'];
        $dob = $_POST['dob'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
    }
    
    
    
}
// funtion to log in user
if(isset($_POST['login-btn'])){
    $errors = validateLogin($_POST);
    if(count($errors)===0){
        $user = selectOne('users', ['email'=> $_POST['email']]);

        if($user && password_verify($_POST['password'],$user['password'])){
            
            loginUser($user);
            
        }
        else{
                array_push($errors,"Wrong Credentials");
             
        }
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    
}






?>
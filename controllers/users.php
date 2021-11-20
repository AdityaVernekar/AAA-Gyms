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

    if ($_SESSION['admin']) {
        header("location:".BASE_URL."/admin/dashboard.php");
    } else {
        header("location:".BASE_URL."/modules/workout/workout.php");
    }
    exit();

    
    
    
    
}


// function validateOTP($otp){
//     $otp = $_POST['otp'];
//     if($otp == $org_otp){
//         echo "otp correct";
//         return true;
        
//     }
//     else{
//         array_push($errors,"Wrong OTP");
//         return false;
//     }
// }

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
        // $user = selectOne('users',['id'=> $user_id]);
        
           
        
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
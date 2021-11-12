<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include(ROOT_PATH."/components/database/db.php");
include(ROOT_PATH."/helpers/validateUsers.php");
include(ROOT_PATH."/helpers/validateOtp.php");
$errors = array();
$name = '';
$id='';
$email='';
$password='';
$cpassword='';

//function to login a user
function loginUser($user){
    //log in user
    $_SESSION['id']=$user['id'];
    $_SESSION['name']= $user['name'];
    $_SESSION['email']= $user['email'];
    $_SESSION['message']="You are now logged in";
    $_SESSION['type']='success';

    

    header("location:".BASE_URL."/modules/registeration/sendmail.php");
    
    
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
if(isset($_POST['register-btn'])){
    $errors = validateUsers($_POST);
    if(count($errors)===0){
        unset($_POST['register-btn'],$_POST['cpassword']);
        $_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
            
            
            $user_id = create('users',$_POST);
            $user = selectOne('users',['id'=> $user_id]);
            // sendotp($user);
            loginUser($user);
           
        
    }
    else{
        $name =$_POST['name'] ;
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
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
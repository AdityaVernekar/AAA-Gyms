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
$mobile='';
$dob='';
$height='';
$weight='';

//function to login a user
function loginUser($user){
    //log in user
    $_SESSION['id']=$user['id'];
    $_SESSION['name']= $user['name'];
    $_SESSION['email']= $user['email'];
    $_SESSION['message']="You are now logged in";
    $_SESSION['type']='success';

    

    header("location:".BASE_URL."/modules/workout/workout.php");
    
    
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
        sendotp($_POST); 
        // $user = selectOne('users',['id'=> $user_id]);
        
           
        
    }
    else{
        $name =$_POST['name'] ;
        
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
if(isset($_POST['addon-btn'])){
//     $errors = validateInfo($_POST);
//     if(count($errors)===0){
//         $id = $_POST['id'];
//         unset($_POST['addon-btn'],$_POST['id']);
        

           
            
//             $count = update('users',$id,$_POST);
//             $_SESSION['message']='data updated sucessfully';
//             $_SESSION['type']='success';
//             exit();
        
//     }
//     else{
//         $mobile = $_POST['phone'];
//         $dob = $_POST['dob'];
//         $height = $_POST['height'];
//         $weight = $_POST['weight'];
// }
dd($_POST);
}





?>
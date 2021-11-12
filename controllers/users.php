<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include(ROOT_PATH."/components/database/db.php");
include(ROOT_PATH."/helpers/validateUsers.php");
$errors = array();
$name = '';
$id='';
$email='';
$password='';
$cpassword='';
$org_otp="";
//function to login a user
function loginUser($user){
    //log in user
    $_SESSION['id']=$user['id'];
    $_SESSION['name']= $user['name'];
    $_SESSION['message']="You are now logged in";
    $_SESSION['type']='success';

    

    header("location:".BASE_URL."/modules/registeration/sendmail.php");
    
    
    exit();
}

//function to send otp email
function sendotp($user){
    $org_otp = generateNumericOTP();

    $to_email = $user['email'];
    $subject = "Simple Email Test via PHP";
    $body = "Hi,your otp is $org_otp";
    $headers = "From: aaagyms27@gmail.com";
    
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email...";
    } else {
        echo "Email sending failed...";
    }
    header("location:".BASE_URL."/modules/registeration/sendmail.php");
}

//function to register a user
if(isset($_POST['register-btn'])){
    $errors = validateUsers($_POST);
    if(count($errors)===0){
        unset($_POST['register-btn'],$_POST['cpassword']);
        $_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
            
            
            $user_id = create('users',$_POST);
            $user = selectOne('users',['id'=> $user_id]);
            sendotp($user);
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

//otp generation
function generateNumericOTP() { 
      
    // Take a generator string which consist of 
    // all numeric digits 
    $generator = "1357902468"; 
  
    // Iterate for n-times and pick a single character 
    // from generator and append it to $result 
      
    // Login for generating a random character from generator 
    //     ---generate a random number 
    //     ---take modulus of same with length of generator (say i) 
    //     ---append the character at place (i) from generator to result 
  
    $result = ""; 
  
    for ($i = 1; $i <= 6; $i++) { 
        $result .= substr($generator, (rand()%(strlen($generator))), 1); 
    } 
  
    // Return result 
    return $result; 
} 


if(isset($_POST['otp-btn'])){
    $otp = $_Post['otp'];
    if($otp == $org_otp){
        $user = selectOne('users',['email'=>$email]);
        loginUser($user);
    }
    else{
        array_push($errors,"Wrong OTP");
    }

}
?>
<?php



$errors = array();
$org_otp = "";
$otp_in="";
$email_sent=false;
//function to send otp email
function sendotp($user){
    
    global $org_otp;
    $org_otp = generateNumericOTP();
    $_SESSION['otp'] = $org_otp;
    $to_email = $user['email'];
    $subject = "Registeration Successful";
    $body = "Thank You for Registering to AAA-Gyms,Your OTP is $org_otp";
    $headers = "From: aaagyms27@gmail.com";
   
   
    if (mail($to_email, $subject, $body, $headers)) {
        $email_sent=true;
    } else {
        $email_sent=false;
    }
    header("location:".BASE_URL."/modules/registeration/sendmail.php");
}
// function to handle otp submit
if(isset($_POST['otp-btn'])){
    $otp_in = $_POST['otp'];
    $errors = validateOtp($_POST);
    if(count($errors)==0){
        if($otp_in == $_SESSION['otp']){
       
            $user = selectOne('users',['email'=>$email]);
            loginUser($user);
           
        }
        else{
           $errors= array_push($errors,"Wrong OTP");
            
        }
    }
    else{
        $otp_in=$_POST['otp'];
    }
    
   

}

//otp generation
function generateNumericOTP() { 
      
    
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

?>
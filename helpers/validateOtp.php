<?php

$errors = array();
$org_otp = "";
$email_sent=false;
//function to send otp email
function sendotp($user){
    
    global $org_otp;
    $org_otp = generateNumericOTP();
    $to_email = $user['email'];
    $subject = "Simple Email Test via PHP";
    $body = "Hi,your otp is $org_otp";
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
    // if($otp == $org_otp){
    //     $user = selectOne('users',['email'=>$email]);
    //     loginUser($user);
    // }
    // else{
    //     array_push($errors,"Wrong OTP");
    // }
    echo $org_otp;
    echo "<br>";
    echo $otp_in;

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

?>
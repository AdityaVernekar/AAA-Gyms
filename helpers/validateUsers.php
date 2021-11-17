<?php
function validateUsers($user){
    $errors = array();
       
    if(empty($user['name'])){
    array_push($errors,"name is required");
    }
    if(empty($user['email'])){
    array_push($errors,"Email is required");
    }
    if(empty($user['password'])){
    array_push($errors,"Password is required");
    }

    if($user['password']!== $user['cpassword']){
    array_push($errors,"Passwords do not match");

    }
    if(empty($user['dob'])){
        array_push($errors,"Enter Date Of birth");

    }
    if(empty($user['phone'])){
        array_push($errors,"Enter Mobile number");
    }
    if(empty($user['height'])){
        array_push($errors,"Enter height");
    }
    if(empty($user['weight'])){
        array_push($errors,"Enter weight");
    }


    $existingUser = selectOne('users',['email'=> $user['email']]);
    if($existingUser){
        
         
            array_push($errors,"Email Already Exists");
        
    }
    return $errors;
}

function validateLogin($user){
    $errors = array();
       
    if(empty($user['email'])){
    array_push($errors,"email is required");
    }
    
    if(empty($user['password'])){
    array_push($errors,"Password is required");
    }

    return $errors;
}
// validate otp
function validateOtp($user){
    $errors = array();
    if(empty($user['otp'])){
        array_push($errors,"OTP is required");
    }
    return $errors;
}



?>
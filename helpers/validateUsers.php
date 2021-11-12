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


    $existingUser = selectOne('users',['email'=> $user['email']]);
    if(isset($existingUser)){
        
         
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

?>
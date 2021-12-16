<?php

function validateOrders($orders) {
    $errors = array();

    if(empty($orders['fname'])) {
        array_push($errors, 'First Name is required');
    }
    if(empty($orders['lname'])) {
        array_push($errors, 'Last Name is required');
    }
    if(empty($orders['address'])) {
        array_push($errors, 'Address is required');
    }
    if(empty($orders['phone'])) {
        array_push($errors, 'Phone Number is required');
    }
    if(empty($orders['payment'])) {
        array_push($errors, 'Please select a payment method');
    }
    if(empty($orders['city'])) {
        array_push($errors, 'Enter a city');
    }
    if(empty($orders['agree'])) {
        array_push($errors, 'You must agree to the terms and conditions');
    }
   
    return $errors;
}


?>
<?php
//validation function

function phoneVal($number)
{
    return preg_match('/^[0-9]{11}+$/', $number);
}

//form validation php code
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $error = [];
    if (empty($name)) {
        $error['nameError'] = 'Please enter your name';
    }
    if (empty($email)) {
        $error['emailError'] = 'Please enter your email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['emailError'] = "Invalid email format";
    }
    if (empty($phone)) {
        $error['phoneError'] = 'Please enter your number';
    } elseif (phoneVal($phone) == false) {
        $error['phoneError'] = 'Invalid phone number';
    }
    if (empty($error)) {
        $success = 'Data Inserted';
        $name = '';
        $email = '';
        $phone = '';
    }
}


//form view page
include 'formval.php';
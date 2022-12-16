<?php
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
<?php
// Database Connection
require('db.con.php');

//Sign Up Form Validation
if (isset($_POST['submit'])) {
    //Taken data from html form
    $fname = trim(htmlentities($_POST['fname']));
    $lname = trim(htmlentities($_POST['lname']));
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $encPassword = md5($password);
    $photo = $_FILES['photo'];

    //image upload
    $photo_ex = explode('.', $photo['name']);
    $photoType = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
    
    //Validation
    $error = [];
    if (empty($fname)) {
        $error['fnameError'] = '<i class="bi bi-x-circle"></i> Please enter your first name!';
    }
    if (empty($lname)) {
        $error['lnameError'] = '<i class="bi bi-x-circle"></i> Please enter your last name!';
    }
    if (empty($email)) {
        $error['emailError'] = '<i class="bi bi-x-circle"></i> Please enter your email!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)) {
        $error['emailError'] = '<i class="bi bi-x-circle"></i> Invalid email address!';
    }
    if (empty($password)) {
        $error['passwordError'] = '<i class="bi bi-x-circle"></i> Please enter your password!';
    } elseif (strlen($password) < 8) {
        $error['passwordError'] = '<i class="bi bi-x-circle"></i> Must be use minimum 8 character password!';
    }
    $photoName = NULL;
    if ($photo['name']) {
        if (!in_array(strtolower(end($photo_ex)), $photoType)) {
            $error['photoError'] = '<i class="bi bi-x-circle"></i> Upload valid image!';
        } elseif ($photo['size'] > 5242880) {
            $error['photoError'] = '<i class="bi bi-x-circle"></i> Max upload file size 5mb!';
        } else {
            $photoName = uniqid() . '.' . end($photo_ex);
            move_uploaded_file($photo['tmp_name'], 'upload/profileImage/' . $photoName);
        }
    }
    // if (empty($photo['name'])) {
    //     $error['photoError'] = '<i class="bi bi-x-circle"></i> Please choose your image!';
    // }
    if ($error == []) {
        $query = "INSERT INTO users(fname, lname, email, password, photo) VALUES('$fname', '$lname', '$email', '$encPassword', '$photoName')";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $success = 'Sing Up Successfully Done!';
        }
    }
}

// View Page
require('home.view.php');
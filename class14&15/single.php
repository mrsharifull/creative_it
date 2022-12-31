<?php
//Database connection
require('db.con.php');

//Get id by url
$id = base64_decode($_GET['id']);
if (!(int)$id) {
    header('location:users.php');
}

//Select query
$query = "SELECT id, fname, lname, email, photo FROM users WHERE id = $id";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
}

//View Page
include('view/single.view.php');
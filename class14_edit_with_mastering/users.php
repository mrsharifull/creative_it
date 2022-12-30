<?php
//Database connection
require('db.con.php');


$query = "SELECT id, fname, lname, email, photo FROM users ORDER BY id DESC";
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, true);
}

//View page
include('view/users.view.php');
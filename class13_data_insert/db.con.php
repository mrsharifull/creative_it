<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'batch_2205');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connect) {
    die('Database connection failed' . mysqli_connect_error());
}
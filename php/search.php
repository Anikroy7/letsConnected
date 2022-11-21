<?php
session_start();
include_once 'config.php';
$outgoing_id = $_SESSION['unique_id'];
$searchValue = mysqli_real_escape_string($conn, $_POST['searchValue']);

$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id= {$outgoing_id} AND (fname LIKE '%{$searchValue}%' OR lname LIKE '%{$searchValue}%' )");
$output = '';


if (mysqli_num_rows($sql) > 0) {
    include 'usersData.php';
} else {
    $output .= "No users found to your keyword!";
}

echo $output;

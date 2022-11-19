<?php
session_start();

include_once 'config.php';


$sql = mysqli_query($conn, "SELECT *  FROM users");
$output = '';
if (mysqli_num_rows($sql) == 1) {
    $output = "<p class='text-center text-gray-500'>No users found for chat with you</p>";
} elseif (mysqli_num_rows($sql) > 0) {
    include 'usersData.php';
}

echo $output;

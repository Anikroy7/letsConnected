<?php
session_start();

include_once 'config.php';
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT *  FROM users WHERE NOT unique_id= {$outgoing_id}");
$output = '';
if (mysqli_num_rows($sql) == 1) {
    $output = "<p class='text-center text-gray-500'>No users found for chat with you</p>";
} elseif (mysqli_num_rows($sql) > 0) {
    include 'usersData.php';
}

echo $output;

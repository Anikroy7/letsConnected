<?php
include_once 'config.php';
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

    // Check the email valid or invalid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email duplication check
    } else {
        echo $email . " is an invalid email";
    }
} else {
    echo "All fields are required";
}

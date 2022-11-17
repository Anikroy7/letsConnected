<?php
session_start();
include_once 'config.php';


$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($email) && !empty($password)) {

    // Get the user form database 
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}' AND password= '{$password}'");

    // echo mysqli_num_rows($sql);
    // Cheak the users who already registerd or not
    if (mysqli_num_rows($sql) > 0) {
        //For valid users
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['unique_id'] = $row['unique_id'];
        echo "successfull";
    } else {
        echo 'Your Password or email is wrong!';
    }
} else {
    echo "All Fields are required!";
}

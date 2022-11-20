<?php

session_start();

if (isset($_SESSION['unique_id'])) {
    include_once 'config.php';
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if (!empty($message)) {
        $sql = mysqli_query($conn, "INSERT INTO  messages (outgoing_msg_id, incoming_msg_id, message) VALUES ('{$outgoing_id}', '{$incoming_id}', '{$message}')");
        echo $message, $incoming_id, $incoming_id;
    }
} else {
    header('location: login.php');
}

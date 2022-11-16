<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'chat');


// Check connection
if ($conn) {
    echo "Connected successfully";
} else {
    echo "Failed to connect";
}

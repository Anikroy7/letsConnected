<?php

session_start();
include_once 'config.php';
// $fname = mysqli_real_escape_string($conn, $_GET['fname']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);



if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

    // Check the email valid or invalid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email duplication check
        $sql = mysqli_query($conn, "SELECT email from users WHERE email ='{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email- this email is already exits, please try with another email";
        } else {
            if (isset($_FILES['image'])) {
                //Get the image name
                $image_name = $_FILES['image']['name'];
                $image_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                // Cheak the image extension
                $explode_img = explode('.', $image_name);
                $img_extension = end($explode_img); //Get the extension

                // Valid extension we accepted
                $valid_extension = ['jpeg', 'png', 'jpg'];

                if (in_array($img_extension, $valid_extension)) {
                    $time = time();
                    // rename the old image for move to our folder
                    $new_image = $time . $image_name;

                    if (move_uploaded_file($tmp_name, 'images/' . $new_image)) {
                        $status = 'Active now';


                        // Create a unique id for insert to database
                        $unique_id = rand(time(), 100000000);

                        // Insert the all valid data to database 

                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, image, status ) VALUES ('{$unique_id}', '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_image}', '{$status}')");


                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "successfull";
                            }
                        } else {
                            "Something went wrong!! please try again. ";
                        }
                    }
                } else {
                    echo "Please provide valid extension like ('jpeg', 'png', 'jpg')";
                }
            }
        }
    } else {
        echo $email . " is an invalid email";
    }
} else {
    echo "All fields are required ";
}

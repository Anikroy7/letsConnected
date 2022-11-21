<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once 'config.php';
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = '';
    $sql = mysqli_query($conn, "SELECT * FROM messages LEFT JOIN users ON users.unique_id= messages.incoming_msg_id WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id ={$incoming_id}) OR (outgoing_msg_id= {$incoming_id} AND incoming_msg_id ={$outgoing_id}) ORDER BY msg_id ASC");

    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
            if ($row['outgoing_msg_id'] === $outgoing_id) {
                # For message sender
                $output .= '<div class="flex justify-end py-2 px-3 ">
                                <p class="break-words text-sm bg-gray-800 text-white w-64 p-2 rounded-l-xl rounded-tr-xl">
                                ' . $row['message'] . '
                                </p>
                            </div>';
            } else {
                #For other person messge sender

                $output .= '<div class="flex justify-start px-3">
                                <div class="flex items-center">
                                    <div class="mr-2 mt-9">
                                        <img class="w-8 h-8 rounded-full" src="https://placeimg.com/192/192/people" />
                                    </div>
                                    <p class="break-words text-sm bg-white text-black w-64 p-2 rounded-l-xl rounded-tr-xl">
                                    ' . $row['message'] . '
                                    </p>
                                </div>
                            </div>
                            ';
            }
        }
        echo $output;
    }
} else {
    header('location: login.php');
}

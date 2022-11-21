<?php


while ($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);

    (mysqli_num_rows($query2) > 0) ? $result = $row2['message'] : $result = "No message available";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
    if (isset($row2['outgoing_msg_id'])) {
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    } else {
        $you = "";
    }
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";



    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '">
                    <section class="flex justify-between items-center mb-5">
                        <div iv class="flex items-center justify-center">
                        <div class="avatar">
                            <div class="w-12 rounded-full">
                                <img src="php/images/' . $row['image'] . '" />
                            </div>
                        </div>
                            <div class="ml-5">
                                <span class="block">' . $row["fname"] . ' ' . $row["lname"] . '</span>
                                <small class="text-zinc-400">' . $you . $msg . '</small>
                            </div>
                        </div>
                        <div id="status_div" class="bg-neutral-focus bg-green-500 rounded-full w-3 h-3 mr-7 ' . $offline . ' ">
                        </div>
                    </section>
                </a>';
}

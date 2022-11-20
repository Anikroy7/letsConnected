<?php

while ($row = mysqli_fetch_assoc($sql)) {
    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '">
                    <section class="flex justify-between items-center mb-5">
                        <div iv class="flex items-center justify-center">
                        <div class="avatar">
                            <div class="w-12 rounded-full">
                                <img src="php/images/' . $row['image'] . '" />
                            </div>
                        </div>
                            <div class="ml-5">
                                <span class="block">' . $row["fname"] . $row["lname"] . '</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>
                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>
                </a>';
}

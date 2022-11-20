<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header('location: login.php');
}

?>

<?php include_once 'header.php' ?>



<body>
    <!-- Register account section -->

    <section class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-white shadow-xl">
            <section id="chat_container" class=" h-96">

                <!-- Main user -->

                <?php
                include_once 'php/config.php';
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id={$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>


                <section class="sticky top-0 z-20 bg-white px-5 py-5">
                    <div class="flex justify-between">
                        <div class="flex items-center justify-center">
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img src="php/images/<?php echo $row['image']; ?> " />

                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block"><?php echo $row['fname'] . ' ' . $row['lname']; ?></span>
                                <small>
                                    <?php echo $row['status']; ?>
                                </small>
                            </div>
                            <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 relative left-[4px] mt-[30px]">
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Chat message container -->

                <section id="chat_msg_container" class="mt-5 bg-zinc-200">





                    <!--My chat section 1-->
                    <!--      <div class="flex justify-end p-5">
                        <p class="text-sm bg-gray-800 text-white w-64 p-2 rounded-l-xl text-yellow-50 rounded-tr-xl">
                            Lorem
                            ipsum dolor
                            sit amet
                            consectetur,
                            adipisicing
                            elit.</p>
                    </div> -->


                    <!-- Other person chat section- 1 -->

                    <!--         <div class="px-5">
                        <div class="avatar">
                            <div class="w-8 h-8 rounded-full mr-2 mt-9">
                                <img src="https://placeimg.com/192/192/people" />
                            </div>
                            <p class="text-sm bg-white text-white w-64 p-2 rounded-r-xl text-gray-800 rounded-tl-xl">
                                Lorem
                                ipsum dolor
                                sit amet
                                consectetur,
                                adipisicing
                                elit.</p>
                        </div>
                    </div> -->
                </section>


            </section>
            <section class="py-5">
                <div class="ml-8">
                    <form autocomplete="off" id="chatForm">
                        <input type="text" name="outgoing_id" hidden value="<?php echo $_SESSION['unique_id']; ?>">
                        <input type="text" name="incoming_id" hidden value="<?php echo $user_id; ?>">
                        <input id='input_field' type="text" class="border-2 w-72 px-2" name="message" id="message_field" placeholder="Type your message here..">
                        <button id="sendBtn" class="bg-gray-800 hover:bg-gray-900">
                            <i class="fab fa-telegram-plane text-white px-3 p-1"></i>
                        </button>
                    </form>
                </div>
            </section>
        </div>
    </section>


    <!-- Custom js Link -->
    <script src="javascript/chat.js"></script>
</body>

</html>
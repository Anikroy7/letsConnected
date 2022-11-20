<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header('location: login.php');
}

?>


<?php include_once('header.php'); ?>

<?php
include_once 'php/config.php';
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {

    $row = mysqli_fetch_assoc($sql);
}
?>

<body>
    <!-- Register account section -->

    <section class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-white shadow-xl">
            <section id="users_container" class="h-96">

                <!-- Main users -->
                <div class="sticky top-0 z-20 bg-white px-3 shadow-sm py-1">
                    <div class="flex justify-between">
                        <div class="flex items-center justify-center">
                            <div class="avatar">
                                <div class="w-12 rounded-full">
                                    <img src="php/images/<?php echo $row['image']; ?> " />

                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">
                                    <?php echo $row['fname'] . ' ' . $row['lname']; ?>
                                </span>
                                <small>
                                    <?php echo $row['status']; ?>
                                </small>
                            </div>
                        </div>
                        <div>
                            <button class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm px-5 text-white transition duration-200 ease-in-out hover:bg-gray-900">
                                <a href="php/logout.php">Logout</a>
                            </button>
                        </div>
                    </div>
                    <div class="h-px bg-slate-200 w-full my-3"></div>

                    <div class="row mb-4 text-center">
                        <input id="searchField" type="text" class="col-8 w-40 pl-2" name="search" id="" placeholder="Select an user for chat">
                        <button id="searchBtn" class="relative right-[10px] left-[2px] px-2 col-4">
                            <i id="searchIcon" class="fas fa-search "></i>
                            <img id="closeIcon" src="myImages/close.png" class="h-3 relative top-[-17px]" alt="">
                        </button>
                    </div>
                </div>




                <!------------------------ All users  ---------------->
                <section id="allUsersDiv" class="z-10 bg-zinc-100 p-3">

                </section>
                <!-- users section end -->
            </section>

        </div>
    </section>

    <!-- Custom js -->
    <script src="javascript/users.js"></script>
</body>

</html>
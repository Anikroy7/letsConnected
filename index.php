<?php include_once('header.php'); ?>


<body>
    <!-- Register account section -->

    <section class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-gray-800 text-2xl py-2">Let's Connected</h2>
                <div class="h-px bg-slate-200 w-full mb-3"></div>
                <div id="error_div" class="h-10 rounded bg-red-200 text-center w-full flex justify-center items-center hidden">
                    <p class="text-gray-700 py-3"">This is an error message</p>
                </div>

                <!-- Input Section Start -->
                <section>
                    <form action=" #" id="registrationForm" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="flex gap-4">
                        <div class="w-full max-w-xs">
                            <label class="label">
                                <span class="label-text">First Name</span>
                            </label>
                            <input name='fname' type="text" placeholder="First Name" class="input input-bordered w-full max-w-xs py-0" />
                        </div>
                        <div class="w-full max-w-xs">
                            <label class="label">
                                <span class="label-text">Last Name</span>
                            </label>
                            <input name="lname" type="text" placeholder="Last Name" class="input input-bordered w-full max-w-xs p-1" />
                        </div>
                    </div>
                    <div class="w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" placeholder="Enter your email" class="input input-bordered w-full max-w-xs p-1" />
                    </div>
                    <div class="w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input id="passwordField" name="password" type="password" placeholder="Enter your password" class="input input-bordered w-full max-w-xs p-1" />
                        <i id="passwordEye" class="fa fa-eye fa-disabled relative left-[290px] top-[-30px]"></i>
                    </div>
                    <div class="w-full max-w-xs py-4">
                        <label for="avatar">Select Image</label>
                        <input type="file" id="image" name="image" accept="image/png, image/jpeg">
                    </div>
                    <div class="w-full max-w-xs mt-3">
                        <input id="registerBtn" type="submit" id="submit" name="submit" value="Let's chat together" class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-2 text-center text-sm  uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">
                    </div>
                    </form>

                    <div class="w-full max-w-xs mt-3">

                        <p>
                            <small> Already signed up?</small>
                            <small>
                                <a class="text-neutral-500" href="login.php">Login now</a>
                            </small>
                        </p>
                    </div>

    </section>

    </div>
    </div>
    </section>

    <!-- Custom js link -->
    <script src="javascript/passBtnToggle.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>
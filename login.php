<?php include_once('header.php'); ?>


<body>
    <!-- Register account section -->

    <section class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-gray-800 text-2xl py-2">Let's Connected</h2>
                <div class="h-px bg-slate-200 w-full mb-3"></div>
                <div id="error_div" class="h-10 rounded bg-red-200 text-center w-full flex justify-center items-center hidden">
                    <small class="text-red-300 ">This is an error message</small>
                </div>

                <!-- Input Section Start -->
                <section>

                    <form action="" method="POST" id="loginForm">
                        <div class="w-full max-w-xs">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input name="email" type="email" placeholder="Enter your email" class="input input-bordered w-full max-w-xs p-1" />
                        </div>
                        <div class="w-full max-w-xs">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input name="password" id="passwordField" type="password" placeholder="Enter your password" class="input input-bordered w-full max-w-xs p-1" />
                            <i id="passwordEye" class="fa fa-eye fa-disabled relative left-[290px] top-[-30px]"></i>
                        </div>
                        <div class="w-full max-w-xs mt-3">

                            <input id="loginBtn" type="submit" id="submit" name="submit" value="Let's chat together" class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-2 text-center text-sm  uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">
                        </div>
                    </form>
                    <div class="w-full max-w-xs mt-3">

                        <p>
                            <small> Not yet signed up?</small>
                            <small>
                                <a class="text-neutral-500" href="index.php">Signup now</a>
                            </small>
                        </p>
                    </div>

                </section>

            </div>
        </div>
    </section>

    <!-- Custom javascript added  -->
    <script src="javascript/passBtnToggle.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>
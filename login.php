<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom css Link -->
    <link rel="stylesheet" href="custom.css">

    <!-- Google Fonts Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital@1&family=Oswald&display=swap" rel="stylesheet">

    <!-- Font Awesome Cdn link -->
    <script src="https://kit.fontawesome.com/b6b2afb38b.js" crossorigin="anonymous"></script>

    <!-- Tailwind and Daisy ui Cdn Link -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.40.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Let's Connected</title>

</head>

<body>
    <!-- Register account section -->

    <section class="flex justify-center items-center h-screen">
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-gray-800 text-2xl py-2">Let's Connected</h2>
                <div class="h-px bg-slate-200 w-full mb-3"></div>
                <div class="h-10 rounded bg-red-200 text-center w-full flex justify-center items-center hidden">
                    <small class="text-red-700 ">This is an error message</small>
                </div>

                <!-- Input Section Start -->
                <section>

                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="Enter your email"
                            class="input input-bordered w-full max-w-xs p-1" />
                    </div>
                    <div class="form-control w-full max-w-xs">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input id="passwordField" type="password" placeholder="Enter your password"
                            class="input input-bordered w-full max-w-xs p-1" />
                        <i id="passwordEye" class="fa fa-eye fa-disabled relative left-[290px] top-[-30px]"></i>
                    </div>
                    <div class="form-control w-full max-w-xs mt-3">

                        <input type="submit" id="submit" name="submit" value="Let's chat together"
                            class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-2 text-center text-sm  uppercase text-white transition duration-200 ease-in-out hover:bg-gray-900">
                    </div>
                    <div class="form-control w-full max-w-xs mt-3">

                        <p>
                            <small> Not yet signed up?</small>
                            <small>
                                <a class="text-neutral-500" href="/login.html">Signup now</a>
                            </small>
                        </p>
                    </div>

                </section>

            </div>
        </div>
    </section>

    <!-- Custom javascript added  -->
    <script src="javascript/passBtnToggle.js"></script>
</body>

</html>
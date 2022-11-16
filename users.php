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
        <div class="card w-96 bg-white shadow-xl">
            <section id="users_container" class="h-96 ">

                <!-- Main users -->
                <div class="sticky top-0 z-20 bg-white px-3 shadow-sm py-1">
                    <div class="flex justify-between">
                        <div class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small>Active now</small>
                            </div>
                        </div>
                        <div>
                            <button
                                class="inline-block cursor-pointer rounded-md bg-gray-800 px-4 py-3 text-center text-sm px-5 text-white transition duration-200 ease-in-out hover:bg-gray-900">
                                Logout
                            </button>
                        </div>
                    </div>
                    <div class="h-px bg-slate-200 w-full my-3"></div>

                    <div class="row mb-4 text-center">
                        <input id="searchField" type="text" class="border col-8 w-64 pl-2" name="search" id=""
                            placeholder="Enter your name to search..">
                        <button id="searchBtn"
                            class="bg-gray-800 text-white relative right-[10px] px-2 hover:bg-red-900 transition duration-200 ease-in-out col-4">
                            <i class="fas fa-search"></i>
                        </button>
                        <p id="emptySearchError" class="text-red-600 hidden">Please select an user first!</p>
                    </div>
                </div>




                <!------------------------ All users  ---------------->
                <section class="z-10 bg-zinc-100 p-3">

                    <!-- 1 user -->
                    <section class="flex justify-between items-center ">
                        <div iv class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>

                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>

                    <!-- 2 user -->
                    <section class="flex justify-between items-center mt-6">
                        <div class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>

                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>



                    <!-- 3 user -->
                    <section class="flex justify-between items-center mt-6">
                        <div class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>

                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>



                    <!-- 4 user -->
                    <section class="flex justify-between items-center mt-6">
                        <div class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>

                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>




                    <!-- 5 user -->
                    <section class="flex justify-between items-center mt-6">
                        <div class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>

                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>




                    <!-- 6 user -->
                    <section class="flex justify-between items-center mt-6">
                        <div class="flex items-center justify-center">
                            <div class="avatar placeholder">
                                <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                    <span>AR</span>
                                </div>
                            </div>
                            <div class="ml-5">
                                <span class="block">Anik Roy</span>
                                <small class="text-zinc-400">This is test message</small>
                            </div>
                        </div>

                        <div class="bg-neutral-focus bg-green-500 rounded-full w-2 h-2 mr-7">
                        </div>
                    </section>

                </section>
                <!-- users section end -->
            </section>

        </div>
    </section>

    <!-- Custom js -->
    <script src="javascript/users.js"></script>
</body>

</html>
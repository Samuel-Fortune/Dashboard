<?php 
    require_once ("./config.php");




    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    if ($con !== false){

        echo "connection Successful";
    }

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }


?> 
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Page</title>

        <!--Stylesheet-->
        <link rel="stylesheet" href="./css/tailwind-output.css" />

        <!--Font-awesome-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>

    <body>
        <section>
            <div class="flex flex-row w-full md:w-[70%] lg:w-1/2 mx-auto mt-28 shadow-lg rounded-md">
                <div class="w-full">
                    <img class="w-full h-full rounded-md"
                        src="https://images.unsplash.com/photo-1661956602116-aa6865609028?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=800&q=60"
                        alt="" />
                </div>
                <div class="w-full">
                    <div class="pl-8 pr-8 flex flex-col gap-5">
                        <div>
                            <h1 class="text-[30px] font-semibold tracking-wide">Login</h1>
                        </div>
                        <div>
                            <span class="leading-9">
                                <h2>Login to your account</h2>
                            </span>
                            <span>
                                <p class="text-slate-300">
                                    Thank you for getting back to us. Let us give you aceess to
                                    everything by Login
                                </p>
                            </span>
                        </div>
                        <div>
                            <form action="process.login.php" method="post">
                                <div class="flex flex-col gap-3">
                                    <label for="name">Username</label>
                                    <input class="border-slate-200 h-10 pl-2 border-[1px] rounded-md" type="text"
                                        name="name" id="" placeholder="Email or Username" />
                                </div>
                                <div class="flex flex-col gap-3 pt-5">
                                    <label for="password"> Password</label>
                                    <input class="border-slate-200 pl-2 h-10 border-[1px] rounded-md" type="password"
                                        name="" id="" placeholder="password" />
                                </div>
                                <div class="flex flex-row justify-between pt-3 pb-5">
                                    <div class="flex flex-row-reverse gap-2">
                                        <label for="">Remember me</label>
                                        <input type="checkbox" name="" id="" />
                                    </div>
                                    <div>
                                        <a class="hover:text-blue-600" href="">Reset Password?</a>
                                    </div>
                                </div>
                                <div
                                    class="w-full hover:animate-pulse bg-blue-600 rounded-md flex h-11 justify-center place-items-center">
                                    <button class="text-white" type="submit">Sign in</button>
                                </div>
                                <div class="flex flex-row pt-7 pb-6 gap-2">
                                    <span>
                                        <p>Don't have an account yet?</p>
                                    </span>
                                    <span>
                                        <a class="text-blue-500" href="./signup.html">Sign Up</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
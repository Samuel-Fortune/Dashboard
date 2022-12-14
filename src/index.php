<?php 



        

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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
    <!--Side Menu-->
    <section class="relative">
        <div class="w-full h-screen flex flex-row absolute">
            <div class="bg-white w-[20%] h-full hidden sm:hidden md:block lg:block md:fixed lg:fixed">
                <div class="w-full pt-9 place-items-center flex justify-center">
                    <div class="w-full flex justify-center flex-col place-items-center gap-5">
                        <img class="h-20 w-20 rounded-full border-4 border-white"
                            src="https://secure.gravatar.com/avatar/b2dcff2b0cae6ba36254f446cffe9b95?s=128&d=mm&r=g"
                            alt="" />

                        <span class="flex flex-col justify-center place-items-center gap-2">
                            <h2 class="font-bold" style="cursor: pointer">
                                Michael Atkisons
                            </h2>
                            <ul>
                                <li>
                                    <a class="text-blue-500 cursor-pointer" href="">My profile</a>
                                </li>
                            </ul>
                        </span>
                        <div class="w-[70%] border-b-[1px] border-slate-300"></div>
                    </div>
                </div>
                <!--Menu-->
                <section>
                    <div class="w-full flex flex-col pl-10 pt-10">
                        <div>
                            <h2>MENU</h2>
                        </div>
                        <div class="flex flex-col space-y-3 pt-5">
                            <!--Dashboard-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-gauge-high text-green-400"></i>
                                </span>
                                <span>
                                    <a class="cursor-pointer" href="https://samuelexchange.com/">Dashboard</a>
                                </span>
                            </div>
                            <!--Transaction-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-credit-card text-green-400"></i>
                                </span>
                                <span class="flex flex-col">
                                    <a class="font-bold tracking-wide cursor-pointer" href="">Transactions</a>
                                    <span class="w-full flex flex-col justify-center place-items-center">
                                        <a class="cursor-pointer" href="">Payments</a>
                                        <a class="cursor-pointer" href="">Games</a>
                                    </span>
                                </span>
                            </div>
                            <!--Players-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-trophy text-green-400"></i>
                                </span>
                                <span>
                                    <a class="cursor-pointer" href="">Players</a>
                                </span>
                            </div>
                            <!--Staffs-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-user text-green-400"></i>
                                </span>
                                <span>
                                    <a class="cursor-pointer" href="">Staff</a>
                                </span>
                            </div>

                            <!--Devices-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-star text-green-400"></i>
                                </span>
                                <span>
                                    <a class="cursor-pointer" href="">Devices</a>
                                </span>
                            </div>

                            <!--Agent-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-chart-pie text-green-400"></i>
                                </span>
                                <span>
                                    <a class="cursor-pointer" href="">Agents</a>
                                </span>
                            </div>

                            <!--Reports-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-briefcase text-green-400"></i>
                                </span>
                                <span class="flex flex-col">
                                    <a class="font-bold tracking-wide cursor-pointer" href="">Reports</a>
                                    <span class="w-full flex flex-col justify-center place-items-center">
                                        <a class="cursor-pointer" href="">Players</a>
                                        <a class="cursor-pointer" href="">Games</a>
                                        <a class="cursor-pointer" href="">Payments</a>
                                    </span>
                                </span>
                            </div>

                            <!--Game-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-chess-knight text-green-400 cursor-pointer"></i>
                                </span>
                                <span>
                                    <a href="">Games</a>
                                </span>
                            </div>

                            <!--Confirgurations-->
                            <div class="flex flex-row gap-3">
                                <span>
                                    <i class="fa-solid fa-gear text-green-400 cursor-pointer"></i>
                                </span>
                                <span>
                                    <a href="">Configurations</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!--Main Menu-->
            <div class="bg-[#F9F9F9] w-full h-full">
                <div class="w-full flex flex-col pl-[20%]">
                    <div class="w-full flex flex-row justify-evenly pt-14 pl-[2%] pr-[2%]">
                        <div class="w-full flex flex-col">
                            <span class="w-full justify-center">
                                <h1 class="text-black text-[40px] leading-[55px] tracking-wide font-medium">
                                    Reports
                                </h1>
                            </span>
                            <span>
                                <p class="text-[#A5AAC0]">Saturday, 19 November 2022</p>
                            </span>
                        </div>
                        <div class="flex flex-row-reverse w-[36%] pt-[15px]">
                            <div class="w-full">
                                <img class="h-20 w-20 rounded-full float-right border-4 border-white"
                                    src="https://secure.gravatar.com/avatar/b2dcff2b0cae6ba36254f446cffe9b95?s=128&d=mm&r=g"
                                    alt="" />
                            </div>
                            <div class="w-full">
                                <h2 class="text-[#8990AD] font-bold">Andrew Johnstons</h2>
                                <span>
                                    <ul>
                                        <li>
                                            <a class="text-blue-500 float-right" href="">Log out</a>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!--Staff Bio-->
                    <section class="w-full h-full pt-[5%]">
                        <div class="w-full pl-[2%] pr-[2%] flex flex-col gap-5">
                            <div>
                                <h1 class="text-black text-[25px] tracking-wide font-normal">
                                    Staff Bio
                                </h1>
                            </div>
                            <div class="bg-white w-1/2 h-full pb-8 rounded-md shadow-md">
                                <form action="" method="post">
                                    <div class="flex flex-row w-full gap-5 pt-8">
                                        <!--First Name-->
                                        <div class="flex flex-col pl-8 gap-2">
                                            <label class="text-[#8990AD]" for="name">First Name
                                            </label>
                                            <input class="border-slate-200 border-[1px] pl-2 h-10 rounded-md"
                                                type="text" name="name" id="name" placeholder="First Name" required />
                                        </div>

                                        <!--Last Name-->
                                        <div class="flex flex-col gap-2">
                                            <label class="text-[#8990AD]" for="name">Last Name
                                            </label>
                                            <input class="border-slate-200 border-[1px] pl-2 h-10 rounded-md"
                                                type="text" name="name" id="name" required />
                                        </div>
                                    </div>

                                    <div class="flex flex-row w-full gap-5 pt-8">
                                        <!--Staff Email-->
                                        <div class="flex flex-col pl-8 gap-2">
                                            <label class="text-[#8990AD]" for="name">Staff Email
                                            </label>
                                            <input class="border-slate-200 border-[1px] pl-2 h-10 rounded-md"
                                                type="email" name="email" id="email" placeholder="you@me.com"
                                                required />
                                        </div>

                                        <!--Phone Number-->
                                        <div class="flex flex-col gap-2">
                                            <label class="text-[#8990AD]" for="name">Phone Number
                                            </label>
                                            <input class="border-slate-200 border-[1px] pl-2 h-10 rounded-md"
                                                type="number" name="number" id="number" placeholder="+234-7777-7777"
                                                required />
                                        </div>
                                    </div>

                                    <div class="flex flex-row w-full gap-5 pt-8">
                                        <!--Company-->
                                        <div class="flex flex-col pl-8 gap-2">
                                            <label class="text-[#8990AD]" for="name">Company
                                            </label>
                                            <input
                                                class="border-slate-200 border-[1px] bg-[#E3E0E0] pl-2 h-10 rounded-md"
                                                type="text" name="text" id="text" placeholder="TYL" required />
                                        </div>

                                        <!--State-->
                                        <div class="flex flex-col gap-2">
                                            <label class="text-[#8990AD]" for="name">State </label>
                                            <input class="border-slate-200 border-[1px] pl-2 h-10 rounded-md"
                                                type="text" name="text" id="text" placeholder="ALL" required />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                    <!--Roles-->
                    <section class="w-full h-full pt-[5%]">
                        <div class="w-full pl-[2%] pr-[2%] flex flex-col gap-5">
                            <div>
                                <h1 class="text-black text-[25px] tracking-wide font-normal">
                                    Roles
                                </h1>
                            </div>
                            <div class="bg-white w-1/2 h-full pb-8 rounded-md shadow-md">
                                <form action="" method="post">
                                    <div class="flex flex-row w-full gap-5 pt-8">



                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
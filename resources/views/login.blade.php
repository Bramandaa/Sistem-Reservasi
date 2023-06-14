<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="w-full h-screen bg-[#D9BD8E]">
        <!-- Logo -->
        <div class="flex w-full justify-center py-16">
            <img class="w-52" src="/assets/logo.png" alt="Warung Kampungku">
        </div>

        <!-- Input Wrapper -->
        <div class="flex flex-col w-full items-center space-y-4">
            <!-- Input -->
            <div class="w-[75%] flex items-center bg-[#FFFDF5]/[0.72] px-4 py-2 space-x-4 rounded-[20px]">
                <div class="w-8 p-1">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_97_677)">
                            <path
                                d="M17.9238 17.259C16.9311 15.534 15.0668 14.375 12.9375 14.375H10.0625C7.9332 14.375 6.06895 15.534 5.07617 17.259C6.65742 19.0199 8.94844 20.125 11.5 20.125C14.0516 20.125 16.3426 19.0154 17.9238 17.259ZM0 11.5C0 8.45001 1.2116 5.52494 3.36827 3.36827C5.52494 1.2116 8.45001 0 11.5 0C14.55 0 17.4751 1.2116 19.6317 3.36827C21.7884 5.52494 23 8.45001 23 11.5C23 14.55 21.7884 17.4751 19.6317 19.6317C17.4751 21.7884 14.55 23 11.5 23C8.45001 23 5.52494 21.7884 3.36827 19.6317C1.2116 17.4751 0 14.55 0 11.5ZM11.5 12.2188C12.3578 12.2188 13.1805 11.878 13.787 11.2714C14.3936 10.6649 14.7344 9.84219 14.7344 8.98438C14.7344 8.12656 14.3936 7.30389 13.787 6.69733C13.1805 6.09076 12.3578 5.75 11.5 5.75C10.6422 5.75 9.81951 6.09076 9.21295 6.69733C8.60639 7.30389 8.26562 8.12656 8.26562 8.98438C8.26562 9.84219 8.60639 10.6649 9.21295 11.2714C9.81951 11.878 10.6422 12.2188 11.5 12.2188Z"
                                fill="#865B33" />
                        </g>
                        <defs>
                            <clipPath id="clip0_97_677">
                                <rect width="23" height="23" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <input class="w-full bg-transparent text-[#865B33] placeholder:text-[#865B33] focus:outline-none"
                    type="text" placeholder="Email or Username">
            </div>

            <!-- Input -->
            <div class="w-[75%] flex items-center bg-[#FFFDF5]/[0.72] px-4 py-2 space-x-4 rounded-[20px]">
                <div class="w-8 p-1">
                    <svg class="w-full" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_97_687)">
                            <path
                                d="M5.78571 5.90625V7.875H12.2143V5.90625C12.2143 4.09336 10.7759 2.625 9 2.625C7.22411 2.625 5.78571 4.09336 5.78571 5.90625ZM3.21429 7.875V5.90625C3.21429 2.64551 5.8058 0 9 0C12.1942 0 14.7857 2.64551 14.7857 5.90625V7.875H15.4286C16.8469 7.875 18 9.05215 18 10.5V18.375C18 19.8229 16.8469 21 15.4286 21H2.57143C1.15313 21 0 19.8229 0 18.375V10.5C0 9.05215 1.15313 7.875 2.57143 7.875H3.21429Z"
                                fill="#865B33" />
                        </g>
                        <defs>
                            <clipPath id="clip0_97_687">
                                <rect width="18" height="21" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <input class="w-full bg-transparent text-[#865B33] placeholder:text-[#865B33] focus:outline-none"
                    type="text" placeholder="Password">
            </div>

            <!-- Input -->
        </div>

        <div class="pt-20 space-y-4">
            <!-- Button Register-->
            <div class="flex w-full justify-center">
                <div class="font-medium text-white text-base px-[75px] py-[12px] bg-[#865B33] rounded-[20px]">
                    Login
                </div>
            </div>

            <!-- Button Login-->
            <div class="flex w-full justify-center">
                <a  href="/register" class="font-bold text-[#865B33] text-base">
                    Register
                </a>
            </div>
        </div>
    </div>
</body>

</html>

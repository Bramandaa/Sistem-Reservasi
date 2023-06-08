<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Menu</title>
</head>
<body>
    <div class="mx-4">
        <!-- header -->
        <div class="flex justify-between items-center pt-4 pb-8">
            <div class="font-bold text-3xl">Menu</div>

            <!-- Cart -->
            <a class="p-2 rounded-[10px] bg-[#EBD2A2] shadow-lg" href="/checkout">
                <svg width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_16_1069)">
                        <path d="M10.5512 0.115809C11.0634 0.377918 11.2587 1.00097 10.9939 1.508L7.45226 8.24979H17.5477L14.0061 1.508C13.7413 1.00097 13.941 0.377918 14.4488 0.115809C14.9566 -0.1463 15.5859 0.0513558 15.855 0.55409L19.8958 8.24979H21.4627H23.6111H23.9583C24.5356 8.24979 25 8.70956 25 9.28104C25 9.85253 24.5356 10.3123 23.9583 10.3123H23.0903L20.6641 19.9158C20.3559 21.1404 19.2448 21.9998 17.9687 21.9998H7.03125C5.75521 21.9998 4.6441 21.1404 4.33594 19.9158L1.90972 10.3123H1.04167C0.46441 10.3123 0 9.85253 0 9.28104C0 8.70956 0.46441 8.24979 1.04167 8.24979H1.38889H3.53733H5.10417L9.14496 0.55409C9.40972 0.0470589 10.0391 -0.1463 10.5512 0.115809ZM4.05816 10.3123L6.35851 19.4174C6.43663 19.7224 6.71441 19.9373 7.03125 19.9373H17.9687C18.2856 19.9373 18.5634 19.7224 18.6415 19.4174L20.9418 10.3123H4.05816ZM9.72222 13.406V16.8435C9.72222 17.415 9.25781 17.8748 8.68056 17.8748C8.1033 17.8748 7.63889 17.415 7.63889 16.8435V13.406C7.63889 12.8346 8.1033 12.3748 8.68056 12.3748C9.25781 12.3748 9.72222 12.8346 9.72222 13.406ZM12.5 12.3748C13.0773 12.3748 13.5417 12.8346 13.5417 13.406V16.8435C13.5417 17.415 13.0773 17.8748 12.5 17.8748C11.9227 17.8748 11.4583 17.415 11.4583 16.8435V13.406C11.4583 12.8346 11.9227 12.3748 12.5 12.3748ZM17.3611 13.406V16.8435C17.3611 17.415 16.8967 17.8748 16.3194 17.8748C15.7422 17.8748 15.2778 17.415 15.2778 16.8435V13.406C15.2778 12.8346 15.7422 12.3748 16.3194 12.3748C16.8967 12.3748 17.3611 12.8346 17.3611 13.406Z" fill="#4D301B"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_16_1069">
                            <rect width="25" height="22" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        
        <!-- Search Bar -->
        <div class="w-full flex items-center rounded-[15px] bg-[#EBD2A2] space-x-2 px-4 py-2">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4_127)">
                    <path d="M12.1875 6.09375C12.1875 7.43848 11.751 8.68066 11.0156 9.68848L14.7246 13.4004C15.0908 13.7666 15.0908 14.3613 14.7246 14.7275C14.3584 15.0937 13.7637 15.0937 13.3975 14.7275L9.68848 11.0156C8.68066 11.7539 7.43848 12.1875 6.09375 12.1875C2.72754 12.1875 0 9.45996 0 6.09375C0 2.72754 2.72754 0 6.09375 0C9.45996 0 12.1875 2.72754 12.1875 6.09375ZM6.09375 10.3125C6.64776 10.3125 7.19635 10.2034 7.7082 9.99137C8.22004 9.77935 8.68511 9.4686 9.07686 9.07686C9.4686 8.68511 9.77936 8.22004 9.99137 7.7082C10.2034 7.19635 10.3125 6.64776 10.3125 6.09375C10.3125 5.53974 10.2034 4.99115 9.99137 4.4793C9.77936 3.96746 9.4686 3.50239 9.07686 3.11064C8.68511 2.7189 8.22004 2.40815 7.7082 2.19613C7.19635 1.98412 6.64776 1.875 6.09375 1.875C5.53974 1.875 4.99115 1.98412 4.4793 2.19613C3.96746 2.40815 3.50239 2.7189 3.11064 3.11064C2.7189 3.50239 2.40815 3.96746 2.19613 4.4793C1.98412 4.99115 1.875 5.53974 1.875 6.09375C1.875 6.64776 1.98412 7.19635 2.19613 7.7082C2.40815 8.22004 2.7189 8.68511 3.11064 9.07686C3.50239 9.4686 3.96746 9.77935 4.4793 9.99137C4.99115 10.2034 5.53974 10.3125 6.09375 10.3125Z" fill="#4D301B"/>
                </g>
                <defs>
                    <clipPath id="clip0_4_127">
                        <rect width="15" height="15" fill="white"/>
                    </clipPath>
                </defs>
            </svg>            
            <input class="text-[#4D301B] w-full bg-[#EBD2A2] focus:outline-none placeholder-[#4D301B]/[0.4]" placeholder="Search Food"></input>
        </div>

        <!-- Menu Category -->
        <div class="flex items-end w-full space-x-2 text-[#4D301B] px-1 py-2">
            <div class="font-bold text-2xl">Popular</div>
            <div class="text-lg">Breakfast</div>
            <div class="text-lg">Lunch</div>
            <div class="text-lg">Dessert</div>
            <div class="text-lg">Drinks</div>
        </div>

        <!-- Menu Wrapper -->
        <div class="grid grid-cols-2 w-full gap-4 mb-20">

            <!-- Card Wrapper-->
            <div class="w-full">
                <!-- Card -->
                <div class="aspect-square bg-[#D9BD8E]/[0.4] rounded-t-[15px] shadow-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://www.masakapahariini.com/wp-content/uploads/2020/10/cap-cay_edited.jpg" alt="Sayur Cap Cay">
                </div>
                <div class="bg-[#D9BD8E] rounded-b-[15px]">
                    <div class="p-2">
                        <div class="font-bold text-xs text-[#4D301B]">Cap Cay</div>
                        <div class="font-bold text-base text-[#4D301B]">Rp.15.000</div>
                        <div class="flex w-full justify-end">
                            <div class="flex w-fit items-center space-x-1 py-1 px-2 rounded-[20px] bg-[#4D301B]">
                                <svg class="aspect-square w-3" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4_130)">
                                        <path d="M9.0625 5.00001C9.0625 6.07745 8.63449 7.11077 7.87262 7.87263C7.11075 8.6345 6.07744 9.06251 5 9.06251C3.92256 9.06251 2.88925 8.6345 2.12738 7.87263C1.36551 7.11077 0.9375 6.07745 0.9375 5.00001C0.9375 3.92257 1.36551 2.88926 2.12738 2.12739C2.88925 1.36552 3.92256 0.937511 5 0.937511C6.07744 0.937511 7.11075 1.36552 7.87262 2.12739C8.63449 2.88926 9.0625 3.92257 9.0625 5.00001ZM0 5.00001C0 6.32609 0.526784 7.59786 1.46447 8.53555C2.40215 9.47323 3.67392 10 5 10C6.32608 10 7.59785 9.47323 8.53553 8.53555C9.47322 7.59786 10 6.32609 10 5.00001C10 3.67393 9.47322 2.40216 8.53553 1.46448C7.59785 0.526796 6.32608 1.14441e-05 5 1.14441e-05C3.67392 1.14441e-05 2.40215 0.526796 1.46447 1.46448C0.526784 2.40216 0 3.67393 0 5.00001ZM4.53125 2.34376V5.00001C4.53125 5.15626 4.60938 5.30275 4.74023 5.39064L6.61523 6.64064C6.83008 6.78517 7.12109 6.72657 7.26562 6.50978C7.41016 6.29298 7.35156 6.00392 7.13477 5.85939L5.46875 4.75001V2.34376C5.46875 2.084 5.25977 1.87501 5 1.87501C4.74023 1.87501 4.53125 2.084 4.53125 2.34376Z" fill="#EBD2A2"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_130">
                                            <rect width="10" height="10" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="text-[#EBD2A2] text-xs">15 Min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Wrapper-->
            <div class="w-full">
                <!-- Card -->
                <div class="aspect-square bg-[#D9BD8E]/[0.4] rounded-t-[15px] shadow-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://i.ytimg.com/vi/lXeOP5YFNWw/maxresdefault.jpg" alt="Sayur Cap Cay">
                </div>
                <div class="bg-[#D9BD8E] rounded-b-[15px]">
                    <div class="p-2">
                        <div class="font-bold text-xs text-[#4D301B]">Cumi Goreng</div>
                        <div class="font-bold text-base text-[#4D301B]">Rp.20.000</div>
                        <div class="flex w-full justify-end">
                            <div class="flex w-fit items-center space-x-1 py-1 px-2 rounded-[20px] bg-[#4D301B]">
                                <svg class="aspect-square w-3" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4_130)">
                                        <path d="M9.0625 5.00001C9.0625 6.07745 8.63449 7.11077 7.87262 7.87263C7.11075 8.6345 6.07744 9.06251 5 9.06251C3.92256 9.06251 2.88925 8.6345 2.12738 7.87263C1.36551 7.11077 0.9375 6.07745 0.9375 5.00001C0.9375 3.92257 1.36551 2.88926 2.12738 2.12739C2.88925 1.36552 3.92256 0.937511 5 0.937511C6.07744 0.937511 7.11075 1.36552 7.87262 2.12739C8.63449 2.88926 9.0625 3.92257 9.0625 5.00001ZM0 5.00001C0 6.32609 0.526784 7.59786 1.46447 8.53555C2.40215 9.47323 3.67392 10 5 10C6.32608 10 7.59785 9.47323 8.53553 8.53555C9.47322 7.59786 10 6.32609 10 5.00001C10 3.67393 9.47322 2.40216 8.53553 1.46448C7.59785 0.526796 6.32608 1.14441e-05 5 1.14441e-05C3.67392 1.14441e-05 2.40215 0.526796 1.46447 1.46448C0.526784 2.40216 0 3.67393 0 5.00001ZM4.53125 2.34376V5.00001C4.53125 5.15626 4.60938 5.30275 4.74023 5.39064L6.61523 6.64064C6.83008 6.78517 7.12109 6.72657 7.26562 6.50978C7.41016 6.29298 7.35156 6.00392 7.13477 5.85939L5.46875 4.75001V2.34376C5.46875 2.084 5.25977 1.87501 5 1.87501C4.74023 1.87501 4.53125 2.084 4.53125 2.34376Z" fill="#EBD2A2"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_130">
                                            <rect width="10" height="10" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="text-[#EBD2A2] text-xs">10 Min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Wrapper-->
            <div class="w-full">
                <!-- Card -->
                <div class="aspect-square bg-[#D9BD8E]/[0.4] rounded-t-[15px] shadow-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://asset.kompas.com/crops/Y6xWmJamfhj6sUrj77z55OktS6w=/0x0:1000x667/780x390/data/photo/2020/10/18/5f8bfec7812bd.jpg" alt="Sayur Cap Cay">
                </div>
                <div class="bg-[#D9BD8E] rounded-b-[15px]">
                    <div class="p-2">
                        <div class="font-bold text-xs text-[#4D301B]">Gurame</div>
                        <div class="font-bold text-base text-[#4D301B]">Rp.45.000</div>
                        <div class="flex w-full justify-end">
                            <div class="flex w-fit items-center space-x-1 py-1 px-2 rounded-[20px] bg-[#4D301B]">
                                <svg class="aspect-square w-3" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4_130)">
                                        <path d="M9.0625 5.00001C9.0625 6.07745 8.63449 7.11077 7.87262 7.87263C7.11075 8.6345 6.07744 9.06251 5 9.06251C3.92256 9.06251 2.88925 8.6345 2.12738 7.87263C1.36551 7.11077 0.9375 6.07745 0.9375 5.00001C0.9375 3.92257 1.36551 2.88926 2.12738 2.12739C2.88925 1.36552 3.92256 0.937511 5 0.937511C6.07744 0.937511 7.11075 1.36552 7.87262 2.12739C8.63449 2.88926 9.0625 3.92257 9.0625 5.00001ZM0 5.00001C0 6.32609 0.526784 7.59786 1.46447 8.53555C2.40215 9.47323 3.67392 10 5 10C6.32608 10 7.59785 9.47323 8.53553 8.53555C9.47322 7.59786 10 6.32609 10 5.00001C10 3.67393 9.47322 2.40216 8.53553 1.46448C7.59785 0.526796 6.32608 1.14441e-05 5 1.14441e-05C3.67392 1.14441e-05 2.40215 0.526796 1.46447 1.46448C0.526784 2.40216 0 3.67393 0 5.00001ZM4.53125 2.34376V5.00001C4.53125 5.15626 4.60938 5.30275 4.74023 5.39064L6.61523 6.64064C6.83008 6.78517 7.12109 6.72657 7.26562 6.50978C7.41016 6.29298 7.35156 6.00392 7.13477 5.85939L5.46875 4.75001V2.34376C5.46875 2.084 5.25977 1.87501 5 1.87501C4.74023 1.87501 4.53125 2.084 4.53125 2.34376Z" fill="#EBD2A2"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_130">
                                            <rect width="10" height="10" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="text-[#EBD2A2] text-xs">30 Min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Wrapper-->
            <div class="w-full">
                <!-- Card -->
                <div class="aspect-square bg-[#D9BD8E]/[0.4] rounded-t-[15px] shadow-lg overflow-hidden">
                    <img class="w-full h-full object-cover" src="https://i.ytimg.com/vi/j9a9EB0pGTo/maxresdefault.jpg" alt="Sayur Cap Cay">
                </div>
                <div class="bg-[#D9BD8E] rounded-b-[15px]">
                    <div class="p-2">
                        <div class="font-bold text-xs text-[#4D301B]">Ayam Goreng</div>
                        <div class="font-bold text-base text-[#4D301B]">Rp.15.000</div>
                        <div class="flex w-full justify-end">
                            <div class="flex w-fit items-center space-x-1 py-1 px-2 rounded-[20px] bg-[#4D301B]">
                                <svg class="aspect-square w-3" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_4_130)">
                                        <path d="M9.0625 5.00001C9.0625 6.07745 8.63449 7.11077 7.87262 7.87263C7.11075 8.6345 6.07744 9.06251 5 9.06251C3.92256 9.06251 2.88925 8.6345 2.12738 7.87263C1.36551 7.11077 0.9375 6.07745 0.9375 5.00001C0.9375 3.92257 1.36551 2.88926 2.12738 2.12739C2.88925 1.36552 3.92256 0.937511 5 0.937511C6.07744 0.937511 7.11075 1.36552 7.87262 2.12739C8.63449 2.88926 9.0625 3.92257 9.0625 5.00001ZM0 5.00001C0 6.32609 0.526784 7.59786 1.46447 8.53555C2.40215 9.47323 3.67392 10 5 10C6.32608 10 7.59785 9.47323 8.53553 8.53555C9.47322 7.59786 10 6.32609 10 5.00001C10 3.67393 9.47322 2.40216 8.53553 1.46448C7.59785 0.526796 6.32608 1.14441e-05 5 1.14441e-05C3.67392 1.14441e-05 2.40215 0.526796 1.46447 1.46448C0.526784 2.40216 0 3.67393 0 5.00001ZM4.53125 2.34376V5.00001C4.53125 5.15626 4.60938 5.30275 4.74023 5.39064L6.61523 6.64064C6.83008 6.78517 7.12109 6.72657 7.26562 6.50978C7.41016 6.29298 7.35156 6.00392 7.13477 5.85939L5.46875 4.75001V2.34376C5.46875 2.084 5.25977 1.87501 5 1.87501C4.74023 1.87501 4.53125 2.084 4.53125 2.34376Z" fill="#EBD2A2"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4_130">
                                            <rect width="10" height="10" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="text-[#EBD2A2] text-xs">15 Min</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Bottom Navbar -->
    <div class="fixed flex justify-between items-center w-full bottom-0 py-4 px-8 bg-[#EBD2A2] rounded-t-[20px]">
        <!-- Button -->
        <a class="space-y-2" href="/">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_16_468)">
                    <path d="M23.2143 0C22.3214 0 16.0714 1.5625 16.0714 8.59375V14.0625C16.0714 15.7861 17.673 17.1875 19.6429 17.1875H21.4286V23.4375C21.4286 24.3018 22.2266 25 23.2143 25C24.202 25 25 24.3018 25 23.4375V17.1875V11.7188V1.5625C25 0.698242 24.202 0 23.2143 0ZM3.57143 0.78125C3.57143 0.380859 3.23103 0.0488281 2.77344 0.00488281C2.31585 -0.0390625 1.90848 0.224609 1.80804 0.610352L0.117187 7.26562C0.0390625 7.57324 0 7.88574 0 8.19824C0 10.4395 1.95871 12.2803 4.46429 12.4805V23.4375C4.46429 24.3018 5.26228 25 6.25 25C7.23772 25 8.03571 24.3018 8.03571 23.4375V12.4805C10.5413 12.2803 12.5 10.4395 12.5 8.19824C12.5 7.88574 12.4609 7.57324 12.3828 7.26562L10.692 0.610352C10.5915 0.219727 10.173 -0.0390625 9.72098 0.00488281C9.26897 0.0488281 8.92857 0.380859 8.92857 0.78125V7.33398C8.92857 7.59766 8.68304 7.8125 8.3817 7.8125C8.0971 7.8125 7.86272 7.62207 7.83482 7.37305L7.13728 0.712891C7.09821 0.307617 6.71317 0 6.25 0C5.78683 0 5.40179 0.307617 5.36272 0.712891L4.67076 7.37305C4.64286 7.62207 4.40848 7.8125 4.12388 7.8125C3.82254 7.8125 3.57701 7.59766 3.57701 7.33398V0.78125H3.57143ZM6.26674 8.20312H6.25H6.23326L6.25 8.16895L6.26674 8.20312Z" fill="#4D301B"/>
                </g>
                <defs>
                    <clipPath id="clip0_16_468">
                        <rect width="25" height="25" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
            <div class="w-[25px] h-1 rounded bg-[#4D301B]"></div>
        </a>

        <!-- Button -->
        <a class="space-y-2" href="/seat">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_16_470)">
                    <path d="M13.8393 2.34375V12.5H16.5179V2.86621C17.8516 3.54004 18.75 4.80469 18.75 6.25V12.5H21.4286V6.25C21.4286 2.79785 18.231 0 14.2857 0H10.7143C6.76897 0 3.57143 2.79785 3.57143 6.25V12.5H6.25V6.25C6.25 4.80469 7.14844 3.54004 8.48214 2.86621V12.5H11.1607V2.34375H13.8393ZM2.67857 14.0625C2.00335 14.0625 1.38393 14.3945 1.08259 14.9268L0.189732 16.4893C-0.089286 16.9727 -0.0558039 17.5488 0.267857 18.0078C0.591518 18.4668 1.16629 18.75 1.78571 18.75V23.4375C1.78571 24.3018 2.58371 25 3.57143 25C4.55915 25 5.35714 24.3018 5.35714 23.4375V18.75H19.6429V23.4375C19.6429 24.3018 20.4408 25 21.4286 25C22.4163 25 23.2143 24.3018 23.2143 23.4375V18.75C23.8337 18.75 24.4085 18.4717 24.7321 18.0078C25.0558 17.5439 25.0893 16.9727 24.8103 16.4893L23.9174 14.9268C23.6161 14.3945 22.9967 14.0625 22.3214 14.0625H2.67857Z" fill="#4D301B"/>
                </g>
                <defs>
                    <clipPath id="clip0_16_470">
                    <rect width="25" height="25" fill="white"/>
                    </clipPath>
                </defs>
            </svg>                
            <!-- <div class="w-[25px] h-1 rounded bg-[#4D301B]"></div> -->
        </a>

        <!-- Button -->
        <a class="space-y-2" href="/myOrder">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.57143 3.90625C3.08036 3.90625 2.67857 4.25781 2.67857 4.6875V20.3125C2.67857 20.7422 3.08036 21.0938 3.57143 21.0938H21.4286C21.9196 21.0938 22.3214 20.7422 22.3214 20.3125V4.6875C22.3214 4.25781 21.9196 3.90625 21.4286 3.90625H3.57143ZM0 4.6875C0 2.96387 1.60156 1.5625 3.57143 1.5625H21.4286C23.3984 1.5625 25 2.96387 25 4.6875V20.3125C25 22.0361 23.3984 23.4375 21.4286 23.4375H3.57143C1.60156 23.4375 0 22.0361 0 20.3125V4.6875ZM5.35714 7.8125C5.35714 7.3981 5.54528 7.00067 5.88017 6.70765C6.21505 6.41462 6.66926 6.25 7.14286 6.25C7.61646 6.25 8.07066 6.41462 8.40555 6.70765C8.74043 7.00067 8.92857 7.3981 8.92857 7.8125C8.92857 8.2269 8.74043 8.62433 8.40555 8.91735C8.07066 9.21038 7.61646 9.375 7.14286 9.375C6.66926 9.375 6.21505 9.21038 5.88017 8.91735C5.54528 8.62433 5.35714 8.2269 5.35714 7.8125ZM11.1607 7.8125C11.1607 7.16309 11.7578 6.64062 12.5 6.64062H17.8571C18.5993 6.64062 19.1964 7.16309 19.1964 7.8125C19.1964 8.46191 18.5993 8.98438 17.8571 8.98438H12.5C11.7578 8.98438 11.1607 8.46191 11.1607 7.8125ZM11.1607 12.5C11.1607 11.8506 11.7578 11.3281 12.5 11.3281H17.8571C18.5993 11.3281 19.1964 11.8506 19.1964 12.5C19.1964 13.1494 18.5993 13.6719 17.8571 13.6719H12.5C11.7578 13.6719 11.1607 13.1494 11.1607 12.5ZM11.1607 17.1875C11.1607 16.5381 11.7578 16.0156 12.5 16.0156H17.8571C18.5993 16.0156 19.1964 16.5381 19.1964 17.1875C19.1964 17.8369 18.5993 18.3594 17.8571 18.3594H12.5C11.7578 18.3594 11.1607 17.8369 11.1607 17.1875ZM7.14286 14.0625C6.66926 14.0625 6.21505 13.8979 5.88017 13.6049C5.54528 13.3118 5.35714 12.9144 5.35714 12.5C5.35714 12.0856 5.54528 11.6882 5.88017 11.3951C6.21505 11.1021 6.66926 10.9375 7.14286 10.9375C7.61646 10.9375 8.07066 11.1021 8.40555 11.3951C8.74043 11.6882 8.92857 12.0856 8.92857 12.5C8.92857 12.9144 8.74043 13.3118 8.40555 13.6049C8.07066 13.8979 7.61646 14.0625 7.14286 14.0625ZM5.35714 17.1875C5.35714 16.7731 5.54528 16.3757 5.88017 16.0826C6.21505 15.7896 6.66926 15.625 7.14286 15.625C7.61646 15.625 8.07066 15.7896 8.40555 16.0826C8.74043 16.3757 8.92857 16.7731 8.92857 17.1875C8.92857 17.6019 8.74043 17.9993 8.40555 18.2924C8.07066 18.5854 7.61646 18.75 7.14286 18.75C6.66926 18.75 6.21505 18.5854 5.88017 18.2924C5.54528 17.9993 5.35714 17.6019 5.35714 17.1875Z" fill="#4D301B"/>
            </svg>
            <!-- <div class="w-[25px] h-1 rounded bg-[#4D301B]"></div> -->
        </a>

        <!-- Button -->
        <a class="space-y-2" href="/profile">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_16_474)">
                    <path d="M12.5 12.5C14.3944 12.5 16.2112 11.8415 17.5508 10.6694C18.8903 9.49732 19.6429 7.9076 19.6429 6.25C19.6429 4.5924 18.8903 3.00269 17.5508 1.83058C16.2112 0.65848 14.3944 0 12.5 0C10.6056 0 8.78878 0.65848 7.44924 1.83058C6.10969 3.00269 5.35714 4.5924 5.35714 6.25C5.35714 7.9076 6.10969 9.49732 7.44924 10.6694C8.78878 11.8415 10.6056 12.5 12.5 12.5ZM9.94978 14.8438C4.45312 14.8438 0 18.7402 0 23.5498C0 24.3506 0.742188 25 1.65737 25H23.3426C24.2578 25 25 24.3506 25 23.5498C25 18.7402 20.5469 14.8438 15.0502 14.8438H9.94978Z" fill="#4D301B"/>
                </g>
                <defs>
                    <clipPath id="clip0_16_474">
                    <rect width="25" height="25" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
            <!-- <div class="w-[25px] h-1 rounded bg-[#4D301B]"></div> -->
        </a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashpro by BuildWithAngga</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>

<body class="font-['Poppins'] bg-[#f5f5f5]">

    <!-- menu on navbar mobile view -->
    <div class="flex flex-row justify-between lg:hidden bg-white p-5">
        <div class="logo flex flex-row justify-center items-center gap-x-2">
            <svg id="logo-85" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="ccustom" fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 0C15.5228 0 20 4.47715 20 10V0H30C35.5228 0 40 4.47715 40 10C40 15.5228 35.5228 20 30 20C35.5228 20 40 24.4772 40 30C40 32.7423 38.8961 35.2268 37.1085 37.0334L37.0711 37.0711L37.0379 37.1041C35.2309 38.8943 32.7446 40 30 40C27.2741 40 24.8029 38.9093 22.999 37.1405C22.9756 37.1175 22.9522 37.0943 22.9289 37.0711C22.907 37.0492 22.8852 37.0272 22.8635 37.0051C21.0924 35.2009 20 32.728 20 30C20 35.5228 15.5228 40 10 40C4.47715 40 0 35.5228 0 30V20H10C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM18 10C18 14.4183 14.4183 18 10 18V2C14.4183 2 18 5.58172 18 10ZM38 30C38 25.5817 34.4183 22 30 22C25.5817 22 22 25.5817 22 30H38ZM2 22V30C2 34.4183 5.58172 38 10 38C14.4183 38 18 34.4183 18 30V22H2ZM22 18V2L30 2C34.4183 2 38 5.58172 38 10C38 14.4183 34.4183 18 30 18H22Z"
                    fill="#5417D7"></path>
            </svg>
            <h2 class="font-bold logo text-2xl text-indigo-950">
                DashPro
            </h2>
        </div>
        <a href="#" id="btn-dropdown" class="flex flex-row items-center p-2 border border-gray-300 rounded-full">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 7H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                <path d="M3 12H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
                <path d="M3 17H21" stroke="#292D32" stroke-width="2" stroke-linecap="round" />
            </svg>



        </a>
    </div>
    <!-- end menu mobile -->

    <!-- floating menu navigation on mobile -->
    <div id="dropdown-menu"
         class="lg:hidden flex flex-col gap-y-16 absolute left-0 top-[160px] bg-white w-screen h-screen p-10 z-20">
        <div class="flex flex-col md:flex-row gap-x-24 gap-y-10">
            <div class="flex flex-col gap-y-4 ">
                <h6 class="text-sm text-gray-400 font-semibold">
                    GENERAL
                </h6>
                <ul class="flex flex-col gap-y-7">
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.44"
                                    d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                    stroke="#6d28d9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            My Overview
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <g opacity="0.4">
                                    <path
                                        d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                        stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32"
                                        stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                        stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>

                            Post Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            Special Rewards
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.0005 12C13.8305 12 15.1805 10.51 15.0005 8.68L14.3405 2H9.67048L9.00048 8.68C8.82048 10.51 10.1705 12 12.0005 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M18.3108 12C20.3308 12 21.8108 10.36 21.6108 8.35L21.3308 5.6C20.9708 3 19.9708 2 17.3508 2H14.3008L15.0008 9.01C15.1708 10.66 16.6608 12 18.3108 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M5.64037 12C7.29037 12 8.78037 10.66 8.94037 9.01L9.16037 6.8L9.64037 2H6.59037C3.97037 2 2.97037 3 2.61037 5.6L2.34037 8.35C2.14037 10.36 3.62037 12 5.64037 12Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <g opacity="0.4">
                                    <path
                                        d="M3.00977 11.2197V15.7097C3.00977 20.1997 4.80977 21.9997 9.29977 21.9997H14.6898C19.1798 21.9997 20.9798 20.1997 20.9798 15.7097V11.2197"
                                        stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                        stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                            </svg>


                            Manage Stores
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-y-4">
                <h6 class="text-sm text-gray-400 font-semibold">
                    OTHERS
                </h6>
                <ul class="flex flex-col gap-y-7">
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4"
                                    d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path opacity="0.4"
                                    d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14"
                                    stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>



                            Admin Groups
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.6707 14.3L21.2707 19.3C21.1207 20.83 21.0007 22 18.2907 22H5.71074C3.00074 22 2.88074 20.83 2.73074 19.3L2.33074 14.3C2.25074 13.47 2.51074 12.7 2.98074 12.11C2.99074 12.1 2.99074 12.1 3.00074 12.09C3.55074 11.42 4.38074 11 5.31074 11H18.6907C19.6207 11 20.4407 11.42 20.9807 12.07C20.9907 12.08 21.0007 12.09 21.0007 12.1C21.4907 12.69 21.7607 13.46 21.6707 14.3Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" />
                                <path opacity="0.4"
                                    d="M3.5 11.4298V6.27979C3.5 2.87979 4.35 2.02979 7.75 2.02979H9.02C10.29 2.02979 10.58 2.40979 11.06 3.04979L12.33 4.74979C12.65 5.16979 12.84 5.42979 13.69 5.42979H16.24C19.64 5.42979 20.49 6.27979 20.49 9.67979V11.4698"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path opacity="0.4" d="M9.42969 17H14.5697" stroke="#292D32" stroke-width="2"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>



                            All Directories
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.34"
                                    d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                    stroke="#292D32" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end menu navigation -->

    <div class="flex flex-row justify-start">
        <div class="h-screen fixed left-sidebar flex-none bg-white py-6 px-4 w-[250px] lg:block hidden">
            <div class="flex flex-col justify-between">
                <div class="logo flex flex-row justify-center items-center gap-x-2">
                    <svg id="logo-85" width="40" height="40" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path class="ccustom" fill-rule="evenodd" clip-rule="evenodd"
                            d="M10 0C15.5228 0 20 4.47715 20 10V0H30C35.5228 0 40 4.47715 40 10C40 15.5228 35.5228 20 30 20C35.5228 20 40 24.4772 40 30C40 32.7423 38.8961 35.2268 37.1085 37.0334L37.0711 37.0711L37.0379 37.1041C35.2309 38.8943 32.7446 40 30 40C27.2741 40 24.8029 38.9093 22.999 37.1405C22.9756 37.1175 22.9522 37.0943 22.9289 37.0711C22.907 37.0492 22.8852 37.0272 22.8635 37.0051C21.0924 35.2009 20 32.728 20 30C20 35.5228 15.5228 40 10 40C4.47715 40 0 35.5228 0 30V20H10C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0ZM18 10C18 14.4183 14.4183 18 10 18V2C14.4183 2 18 5.58172 18 10ZM38 30C38 25.5817 34.4183 22 30 22C25.5817 22 22 25.5817 22 30H38ZM2 22V30C2 34.4183 5.58172 38 10 38C14.4183 38 18 34.4183 18 30V22H2ZM22 18V2L30 2C34.4183 2 38 5.58172 38 10C38 14.4183 34.4183 18 30 18H22Z"
                            fill="#5417D7"></path>
                    </svg>
                    <h2 class="font-bold logo text-2xl text-indigo-950">
                        CariFilm
                    </h2>
                </div>
                <div class="flex flex-col gap-y-10 mt-10">
                    <div class="flex flex-col gap-y-4">
                        <h6 class="text-sm text-gray-400 font-semibold">
                            GENERAL
                        </h6>
                        <ul class="flex flex-col gap-y-7">
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-violet-700">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.44"
                                            d="M7.33008 14.4898L9.71008 11.3998C10.0501 10.9598 10.6801 10.8798 11.1201 11.2198L12.9501 12.6598C13.3901 12.9998 14.0201 12.9198 14.3601 12.4898L16.6701 9.50977"
                                            stroke="#6d28d9" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    My Overview
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.0008 22H16.0008C20.0208 22 20.7408 20.39 20.9508 18.43L21.7008 10.43C21.9708 7.99 21.2708 6 17.0008 6H7.0008C2.7308 6 2.0308 7.99 2.3008 10.43L3.0508 18.43C3.2608 20.39 3.9808 22 8.0008 22Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M8 6V5.2C8 3.43 8 2 11.2 2H12.8C16 2 16 3.43 16 5.2V6"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M14 13V14C14 14.01 14 14.01 14 14.02C14 15.11 13.99 16 12 16C10.02 16 10 15.12 10 14.03V13C10 12 10 12 11 12H13C14 12 14 12 14 13Z"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M21.65 11C19.34 12.68 16.7 13.68 14 14.02" stroke="#292D32"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M2.61914 11.2695C4.86914 12.8095 7.40914 13.7395 9.99914 14.0295"
                                                stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                    </svg>


                                    Post Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.6992 18.9799H7.29922C6.87922 18.9799 6.40922 18.6499 6.26922 18.2499L2.12922 6.66986C1.53922 5.00986 2.22922 4.49986 3.64922 5.51986L7.54922 8.30986C8.19922 8.75986 8.93922 8.52986 9.21922 7.79986L10.9792 3.10986C11.5392 1.60986 12.4692 1.60986 13.0292 3.10986L14.7892 7.79986C15.0692 8.52986 15.8092 8.75986 16.4492 8.30986L20.1092 5.69986C21.6692 4.57986 22.4192 5.14986 21.7792 6.95986L17.7392 18.2699C17.5892 18.6499 17.1192 18.9799 16.6992 18.9799Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.34" d="M6.5 22H17.5" stroke="#292D32" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.34" d="M9.5 14H14.5" stroke="#292D32" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    Special Rewards
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0005 12C13.8305 12 15.1805 10.51 15.0005 8.68L14.3405 2H9.67048L9.00048 8.68C8.82048 10.51 10.1705 12 12.0005 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.3108 12C20.3308 12 21.8108 10.36 21.6108 8.35L21.3308 5.6C20.9708 3 19.9708 2 17.3508 2H14.3008L15.0008 9.01C15.1708 10.66 16.6608 12 18.3108 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5.64037 12C7.29037 12 8.78037 10.66 8.94037 9.01L9.16037 6.8L9.64037 2H6.59037C3.97037 2 2.97037 3 2.61037 5.6L2.34037 8.35C2.14037 10.36 3.62037 12 5.64037 12Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <g opacity="0.4">
                                            <path
                                                d="M3.00977 11.2197V15.7097C3.00977 20.1997 4.80977 21.9997 9.29977 21.9997H14.6898C19.1798 21.9997 20.9798 20.1997 20.9798 15.7097V11.2197"
                                                stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z"
                                                stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </g>
                                    </svg>


                                    Manage Stores
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <h6 class="text-sm text-gray-400 font-semibold">
                            OTHERS
                        </h6>
                        <ul class="flex flex-col gap-y-7">
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.16055 10.87C9.06055 10.86 8.94055 10.86 8.83055 10.87C6.45055 10.79 4.56055 8.84 4.56055 6.44C4.56055 3.99 6.54055 2 9.00055 2C11.4505 2 13.4405 3.99 13.4405 6.44C13.4305 8.84 11.5405 10.79 9.16055 10.87Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M16.4093 4C18.3493 4 19.9093 5.57 19.9093 7.5C19.9093 9.39 18.4093 10.93 16.5393 11C16.4593 10.99 16.3693 10.99 16.2793 11"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M4.1607 14.56C1.7407 16.18 1.7407 18.82 4.1607 20.43C6.9107 22.27 11.4207 22.27 14.1707 20.43C16.5907 18.81 16.5907 16.17 14.1707 14.56C11.4307 12.73 6.9207 12.73 4.1607 14.56Z"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path opacity="0.4"
                                            d="M18.3398 20C19.0598 19.85 19.7398 19.56 20.2998 19.13C21.8598 17.96 21.8598 16.03 20.2998 14.86C19.7498 14.44 19.0798 14.16 18.3698 14"
                                            stroke="#292D32" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    Admin Groups
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.6707 14.3L21.2707 19.3C21.1207 20.83 21.0007 22 18.2907 22H5.71074C3.00074 22 2.88074 20.83 2.73074 19.3L2.33074 14.3C2.25074 13.47 2.51074 12.7 2.98074 12.11C2.99074 12.1 2.99074 12.1 3.00074 12.09C3.55074 11.42 4.38074 11 5.31074 11H18.6907C19.6207 11 20.4407 11.42 20.9807 12.07C20.9907 12.08 21.0007 12.09 21.0007 12.1C21.4907 12.69 21.7607 13.46 21.6707 14.3Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10" />
                                        <path opacity="0.4"
                                            d="M3.5 11.4298V6.27979C3.5 2.87979 4.35 2.02979 7.75 2.02979H9.02C10.29 2.02979 10.58 2.40979 11.06 3.04979L12.33 4.74979C12.65 5.16979 12.84 5.42979 13.69 5.42979H16.24C19.64 5.42979 20.49 6.27979 20.49 9.67979V11.4698"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path opacity="0.4" d="M9.42969 17H14.5697" stroke="#292D32" stroke-width="2"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>



                                    All Directories
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex flex-row gap-x-2 font-semibold text-base text-indigo-950">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.34"
                                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M2 12.8799V11.1199C2 10.0799 2.85 9.21994 3.9 9.21994C5.71 9.21994 6.45 7.93994 5.54 6.36994C5.02 5.46994 5.33 4.29994 6.24 3.77994L7.97 2.78994C8.76 2.31994 9.78 2.59994 10.25 3.38994L10.36 3.57994C11.26 5.14994 12.74 5.14994 13.65 3.57994L13.76 3.38994C14.23 2.59994 15.25 2.31994 16.04 2.78994L17.77 3.77994C18.68 4.29994 18.99 5.46994 18.47 6.36994C17.56 7.93994 18.3 9.21994 20.11 9.21994C21.15 9.21994 22.01 10.0699 22.01 11.1199V12.8799C22.01 13.9199 21.16 14.7799 20.11 14.7799C18.3 14.7799 17.56 16.0599 18.47 17.6299C18.99 18.5399 18.68 19.6999 17.77 20.2199L16.04 21.2099C15.25 21.6799 14.23 21.3999 13.76 20.6099L13.65 20.4199C12.75 18.8499 11.27 18.8499 10.36 20.4199L10.25 20.6099C9.78 21.3999 8.76 21.6799 7.97 21.2099L6.24 20.2199C5.33 19.6999 5.02 18.5299 5.54 17.6299C6.45 16.0599 5.71 14.7799 3.9 14.7799C2.85 14.7799 2 13.9199 2 12.8799Z"
                                            stroke="#292D32" stroke-width="2" stroke-miterlimit="10"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-auto w-screen lg:pl-[250px]">
            <div class="w-full navbar bg-white py-4 px-7">
                <div class="flex flex-row justify-between">
                    <div class="relative w-full md:w-[500px]">
                    </div>
                    <div class="user flex-row items-center gap-x-3 hidden md:flex">
                        <div class="flex flex-col text-right ">
                            <h3 class="text-indigo-950 font-semibold text-base">
                                Irez Abdullah
                            </h3>
                            <p class="text-gray-500 text-sm">
                                @shayna
                            </p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1616325629936-99a9013c29c6?q=80&w=3387&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" class="h-[50px] w-[50px] rounded-full object-cover">
                    </div>
                </div>
            </div>


            {{-- <section class="header px-7 pt-10">
                <div class="flex flex-col gap-y-5 md:flex-row md:items-center justify-between w-full">
                    <!-- Section Title -->
                    <div class="title">
                        <h1 class="text-2xl text-indigo-950 font-bold mb-2">Dashboard Overview</h1>
                        <p class="text-sm text-gray-500">Manage CariFilm</p>
                    </div>
            
                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 md:gap-5 mt-4 md:mt-0">
                        <a href="" class="w-full md:w-auto text-center px-7 py-3 rounded-full text-base font-semibold text-indigo-950 bg-white border border-indigo-300 hover:bg-indigo-50 transition-all">
                            Filter
                        </a>
                        <a href="" class="w-full md:w-auto text-center px-7 py-3 rounded-full text-base font-semibold text-white bg-violet-700 hover:bg-violet-600 transition-all">
                            Export Data
                        </a>
                    </div>
                </div>
            </section> --}}
            

        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btndropdown = document.getElementById('btn-dropdown');
            const dropdownmenu = document.getElementById('dropdown-menu');

            btndropdown.addEventListener("click", function () {
                dropdownmenu.classList.toggle("hidden");
            });

            document.addEventListener("click", function (event) {
                if (!btndropdown.contains(event.target) && !dropdownmenu.contains(event.target)) {
                    dropdownmenu.classList.add("hidden");
                }
            });
        });
    </script>
</body>

</html>
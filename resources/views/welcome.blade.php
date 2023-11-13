<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qinep</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased" id="style-4">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-[#FCF5ED] selection:bg-red-500 selection:text-white w-screen" >
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 flex justify-between py-3 px-16 w-screen z-10 bg-[#000000]">
                    @auth
                        <a href="/" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">                           
                        <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24" fill="none">
                            <path d="M12 18C12 20.2091 10.2091 22 8 22C5.79086 22 4 20.2091 4 18C4 15.7909 5.79086 14 8 14C10.2091 14 12 15.7909 12 18Z" stroke="#1C274C" stroke-width="1.5"/>
                            <path d="M12 18V6" stroke="#1C274C" stroke-width="1.5"/>
                            <path d="M16.1167 10.0587L13.4833 8.74199C13.1184 8.55954 12.9359 8.46831 12.7852 8.35309C12.3949 8.05463 12.128 7.62291 12.0357 7.14028C12 6.95397 12 6.74998 12 6.34199C12 5.3709 12 4.88536 12.1196 4.55528C12.4356 3.68288 13.3101 3.14239 14.2317 3.24989C14.5804 3.29057 15.0147 3.50771 15.8833 3.94199L18.5167 5.25871C18.8816 5.44117 19.0641 5.5324 19.2148 5.64761C19.6051 5.94608 19.872 6.3778 19.9643 6.86043C20 7.04673 20 7.25073 20 7.65871C20 8.6298 20 9.11535 19.8804 9.44543C19.5644 10.3178 18.6899 10.8583 17.7683 10.7508C17.4196 10.7101 16.9853 10.493 16.1167 10.0587Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        <p class="text-gray-400 font-bold text-2xl mt-4">Qinep</p>
                        </div>
                        </a>
                        <div>
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        </div>    
                    @else
                        <a href="/" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">                           
                        <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24" fill="none">
                            <path d="M12 18C12 20.2091 10.2091 22 8 22C5.79086 22 4 20.2091 4 18C4 15.7909 5.79086 14 8 14C10.2091 14 12 15.7909 12 18Z" stroke="#1C274C" stroke-width="1.5"/>
                            <path d="M12 18V6" stroke="#1C274C" stroke-width="1.5"/>
                            <path d="M16.1167 10.0587L13.4833 8.74199C13.1184 8.55954 12.9359 8.46831 12.7852 8.35309C12.3949 8.05463 12.128 7.62291 12.0357 7.14028C12 6.95397 12 6.74998 12 6.34199C12 5.3709 12 4.88536 12.1196 4.55528C12.4356 3.68288 13.3101 3.14239 14.2317 3.24989C14.5804 3.29057 15.0147 3.50771 15.8833 3.94199L18.5167 5.25871C18.8816 5.44117 19.0641 5.5324 19.2148 5.64761C19.6051 5.94608 19.872 6.3778 19.9643 6.86043C20 7.04673 20 7.25073 20 7.65871C20 8.6298 20 9.11535 19.8804 9.44543C19.5644 10.3178 18.6899 10.8583 17.7683 10.7508C17.4196 10.7101 16.9853 10.493 16.1167 10.0587Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                        <p class="text-gray-400 font-bold text-2xl mt-4">Qinep</p>
                        </div>
                        <div class="mt-4">
                        <a href="{{ route('album') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2">Album</a>
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2">Log in</a>                            
                        </div>
                        </a>
                    @endauth                
                </div>
            @endif
            <div class="md:flex justify-between w-[100%] md:w-[70%] px-20 ">
                <div class="w-[100%] md:w-[200px] md:h-[200px]">
                    <img src="{{ asset('profile.jpg') }}" class="cover mt-20 rounded-md w-[100%]" alt="hero" />            
                </div>
                <div class="mt-8 md:w-2/5 w-[100%]">
                    <p class="text-xl font-extrabold text-center ">SKILLS</p>
                    <div class="mt-4">
                        <p class="text-sm font-semibold">Audio</p>
                        <div class="relative w-full h-3 bg-gray-200 rounded-full mt-1">
                            <div class="absolute top-0 left-0 h-3 bg-[#1F1717] rounded-full" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm font-semibold">Web</p>
                        <div class="relative w-full h-3 bg-gray-200 rounded-full mt-1">
                            <div class="absolute top-0 left-0 h-3 bg-[#1F1717] rounded-full" style="width: 70%;"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-sm font-semibold">Mobile</p>
                        <div class="relative w-full h-3 bg-gray-200 rounded-full mt-1">
                            <div class="absolute top-0 left-0 h-3 bg-[#1F1717] rounded-full" style="width: 60%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

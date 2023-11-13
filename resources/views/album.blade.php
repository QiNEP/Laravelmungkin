<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
    <div class="relative justify-center items-center min-h-screen bg-center bg-[#FCF5ED] selection:bg-red-500 selection:text-white overflow-x-hidden" >
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 flex justify-between py-3 px-16 w-screen z-10 bg-[#B3B5BA]">
                @auth
                    <a href="/" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">                           
                    <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24" fill="none">
                        <path d="M12 18C12 20.2091 10.2091 22 8 22C5.79086 22 4 20.2091 4 18C4 15.7909 5.79086 14 8 14C10.2091 14 12 15.7909 12 18Z" stroke="#1C274C" stroke-width="1.5"/>
                        <path d="M12 18V6" stroke="#1C274C" stroke-width="1.5"/>
                        <path d="M16.1167 10.0587L13.4833 8.74199C13.1184 8.55954 12.9359 8.46831 12.7852 8.35309C12.3949 8.05463 12.128 7.62291 12.0357 7.14028C12 6.95397 12 6.74998 12 6.34199C12 5.3709 12 4.88536 12.1196 4.55528C12.4356 3.68288 13.3101 3.14239 14.2317 3.24989C14.5804 3.29057 15.0147 3.50771 15.8833 3.94199L18.5167 5.25871C18.8816 5.44117 19.0641 5.5324 19.2148 5.64761C19.6051 5.94608 19.872 6.3778 19.9643 6.86043C20 7.04673 20 7.25073 20 7.65871C20 8.6298 20 9.11535 19.8804 9.44543C19.5644 10.3178 18.6899 10.8583 17.7683 10.7508C17.4196 10.7101 16.9853 10.493 16.1167 10.0587Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <p class="text-slate-900 font-bold text-2xl mt-4">Qinep</p>
                    </div>
                    <div>
                        <a href="{{ url('/dashboard') }}" class="font-bold text-black dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    </div>
                    </a>
                @else
                    <a href="/" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">                           
                    <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64px" height="64px" viewBox="0 0 24 24" fill="none">
                        <path d="M12 18C12 20.2091 10.2091 22 8 22C5.79086 22 4 20.2091 4 18C4 15.7909 5.79086 14 8 14C10.2091 14 12 15.7909 12 18Z" stroke="#1C274C" stroke-width="1.5"/>
                        <path d="M12 18V6" stroke="#1C274C" stroke-width="1.5"/>
                        <path d="M16.1167 10.0587L13.4833 8.74199C13.1184 8.55954 12.9359 8.46831 12.7852 8.35309C12.3949 8.05463 12.128 7.62291 12.0357 7.14028C12 6.95397 12 6.74998 12 6.34199C12 5.3709 12 4.88536 12.1196 4.55528C12.4356 3.68288 13.3101 3.14239 14.2317 3.24989C14.5804 3.29057 15.0147 3.50771 15.8833 3.94199L18.5167 5.25871C18.8816 5.44117 19.0641 5.5324 19.2148 5.64761C19.6051 5.94608 19.872 6.3778 19.9643 6.86043C20 7.04673 20 7.25073 20 7.65871C20 8.6298 20 9.11535 19.8804 9.44543C19.5644 10.3178 18.6899 10.8583 17.7683 10.7508C17.4196 10.7101 16.9853 10.493 16.1167 10.0587Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                    <p class="text-slate-900 font-bold text-2xl mt-4">Qinep</p>
                    </div>
                    <div class="mt-4">
                        <a href="/" class="font-bold text-black dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2">Profile</a>
                        <a href="{{ route('album') }}" class="font-bold text-black hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2">Album</a>
                        <a href="{{ route('login') }}" class="font-bold text-black hover:text-gray-900 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mx-2">Log in</a>                            
                    </div>
                    </a>
                @endauth                
            </div>
        @endif
        @foreach ($album as $album)
            <div class ="md:mt-20 w-screen h-[400px] bg-cover border-y-4 border-cyan-900 sm:mt-[5.5rem] mt-0" style="background-image: url('{{$album->image}}')">
                <div class="bg-black text-center rounded-b-2xl mx-auto border">
                    <p class="mx-24 text-white font-bold text-xl">{{$album->album_name}}</p>
                </div>

                <div class="mt-10 md:flex md:justify-between">
                <!-- Audio Player -->
                <div class="md:mx-10 mx-auto">
                    <audio controls controlsList="nodownload" class="audio-player md:mx-10 mx-auto my-0">
                        <source src="{{ asset('audio/martyr.mp3')}}" type="audio/mpeg">
                    </audio>

                    <!-- Details -->
                    <div class="md:mx-10 mx-auto my-0 bg-black rounded-md w-36 opacity-70 mt-3">
                        <p class="text-white ml-2 font-bold opacity-100 text-sm">Genre &nbsp; : {{ $album->genre}}</p>
                        <p class="text-white ml-2 font-bold opacity-100 text-sm">Year  &emsp; : {{ $album->years}}</p>
                        <p class="text-white ml-2 font-bold opacity-100 text-sm">BPM   &ensp;&nbsp; : {{ $album->bpm}}</p>
                        <p class="text-white ml-2 font-bold opacity-100 text-sm">DO = {{ $album->kunci}}</p>
                    </div>
                </div>
                
                <div class="md:mt-0 mt-10">
                    <!-- Music List -->
                    <div class="md:mx-10 mx-auto my-0">
                        <?php $music = explode(' ', $album->music_list); $id = 1; 
                        echo "<button class='bg-slate-50 w-16 active:bg-slate-400 hover:bg-slate-200 p-1 rounded-md font-bold duration-200 md:mr-64' onclick='listMusic($id)'>Music</button>";
                        echo "<ul class='opacity-0 hidden' id='$id'>";
                        ?>
                        @foreach ($music as $music)
                            <li><p class="md:mr-64 font-bold text-xl text-white text-center">{{$music}}</p></li>
                        @endforeach
                        </ul>
                        <?php $id = $id + 1 ?>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        </div>
    </body>
    <script src="{{ asset('js/musiclist.js') }}"></script>
    
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit</title>
</head>
<body class="bg-gray-900">
    <div class="container my-10">
        <form>
            <div class="flex justify-center">
                <div class="w-1/2">
                    <h1 class="text-2xl text-center text-white mb-10 mt-10 font-bold">Edit Album</h1>
                    <div class="mb-5">
                        <label for="album_name" class="block mb-2 text-sm font-bold text-gray-700">Album Name</label>
                        <input type="text" name="album_name" id="album_name" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none" placeholder="Album Name" value="{{ $album->album_name }}">
                    </div>
                    <div class="mb-5">
                        <label for="genre" class="block mb-2 text-sm font-bold text-gray-700">Genre</label>
                        <input type="text" name="genre" id="genre" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none" placeholder="Genre" value="{{ $album->genre }}">
                    </div>
                    <div class="mb-5">
                        <label for="years" class="block mb-2 text-sm font-bold text-gray-700">Year</label>
                        <input type="text" name="years" id="years" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none" placeholder="Year" value="{{ $album->years }}">
                    </div>
                    <div class="mb-5">
                        <img src="{{ $album->image }}" class="w-40 bg-cover" />
                        <label for="image" class="block mb-2 text-sm font-bold text-gray-700">Image</label>
                        <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none" placeholder="Image" value="{{ $album->image }}">
                    </div>
                    <div class="mb-10">
                        <label for="audio_sample" class="block mb-2 text-sm font-bold text-gray-700">Audio Sample</label>
                        <input type="file" name="audio_sample" id="audio_sample" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none" placeholder="Audio Sample" value="{{ $album->audio_sample }}">
                        <audio controls controlsList="nodownload" class="audio-player my-5 cb-shadow"><source src="{{ asset($album->audio_sample)}}" type="audio/mpeg"></audio>
                    </div>
                    <a href="{{ route('album.update') }}" class="bg-white hover:bg-green-400 active:bg-green-500 text-black p-2 rounded-md hover:bg-b duration-200">Update</a>
                </div>
            </div>
    </div>
</body>
</html>
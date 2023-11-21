<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white"> 
    <div class="flex justify-center">
        <div>
            <h1 class="text-2xl text-center mb-10 mt-10 font-bold">Add Album</h1>
            <form enctype="multipart/form-data" class="bg-slate-950 p-10 rounded-lg mb-10" method="POST" action="{{ route('album.add') }}" id="insertdata">
                @csrf
                <label for="album_name">Album Name</label><br>
                <input class="border bg-gray-950" type="text" id="title" name="album_name" required><br>
                <label for="years">Year </label><br>
                <input class="border bg-gray-950" type="text" id="artist" name="years" required><br>
                <label for="genre">Genre</label><br>
                <input class="border bg-gray-950" type="text" id="genre" name="genre" required><br>                
                <label for="bpm">BPM</label><br>
                <input class="border bg-gray-950" type="text" id="bpm" name="bpm" required><br>
                <label for="kunci">Key</label><br>
                <input class="border bg-gray-950" type="text" id="kunci" name="kunci" required><br>
                <label for="image">Image</label><br>
                <input accept=".jpg,.jpeg,.png" class="border bg-gray-950" type="file" id="image" name="image" required><br>
                <label for="audio_sample" >Audio Sample</label><br>
                <input accept=".mp3" class="border bg-gray-950" type="file" id="audio_sample" name="audio_sample" required><br>
                <label for="music_list">Music List</label><br>                
                <textarea class="border bg-gray-950" name="music_list" form="insertdata" required></textarea><br><br>

                <input type="submit" class="rounded-md px-2 cursor-pointer p-1 bg-blue-600 hover:bg-blue-700 active:bg-blue-800" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
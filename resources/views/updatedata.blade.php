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
            <h1 class="text-2xl text-center mb-10 mt-10 font-bold">Edit Album</h1>
            <table class="table-auto border">
            <thead class="border">
                <tr>
                    <th class="border p-1">Album Name</th>
                    <th class="border p-1">Genre</th>
                    <th class="border p-1">Year</th>
                    <th class="border p-1">Image</th>
                    <th class="border p-1">Audio Sample</th>
                    <th class="border p-1">BPM</th>
                    <th class="border p-1">Key</th>
                    <th class="border p-1">Music List</th>
                    <th class="border p-1">Action</th>
                </tr>
            </thead>
            @foreach ($album as $album)
            <tbody>
                <tr>
                    <td class="border text-center text-xs">{{ $album->album_name }}</td>
                    <td class="border text-center text-xs">{{ $album->genre }}</td>
                    <td class="border text-center text-xs">{{ $album->years }}</td>
                    <td class="border text-center text-xs flex justify-center"><img src="{{ $album->image }}" class="w-40 bg-cover" /></td>
                    <td class="border text-center text-xs"><audio controls controlsList="nodownload" class="audio-player md:mx-10 mx-auto my-0 cb-shadow"><source src="{{ asset($album->audio_sample)}}" type="audio/mpeg"></audio></td>
                    <td class="border text-center text-xs">{{ $album->bpm }}</td>
                    <td class="border text-center text-xs">{{ $album->kunci }}</td>
                    <td class="border text-center text-xs">{{ $album->music_list }}</td>
                    <td class="border text-center text-lg font-semibold"><a class="bg-slate-700 hover:bg-slate-800 active:bg-slate-900 rounded-2xl p-1" href="{{route('updatedata.edit', ['uuid'=>$album->uuid])}}">Edit</a></td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</body>
</html>
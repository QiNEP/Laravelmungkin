<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumsController extends Controller
{
    public function index()
    {
        return view('album');
    }
    
    public function getAlbum()
    {
        $data = album::all();
        return view('album', ['album' => $data]);
    }

    public function getAlbumUpdate(){ 
        $data = album::all();
        return view('updatedata', ['album' => $data]);
    }
    
    public function store(Request $request)
    {

        $uuid = uuid_create();
        $album_name = $request->input('album_name');
        $years = $request->input('years');
        $genre = $request->input('genre');
        $path = $request->file('image')->store('public/images');
        $audio_sample = $request->file('audio_sample')->store('public/audio');
        $bpm = $request->input('bpm');
        $kunci = $request->input('kunci');
        $music_list = $request->input('music_list');

        $pathFinalImg = '/storage/images/' . $request->file('image')->hashName();
        $pathFinalAudio = '/storage/audio/' . $request->file('audio_sample')->hashName();

        DB::table('albums')->insert([
            'uuid' => $uuid,
            'album_name' => $album_name,
            'years' => $years,
            'genre' => $genre,
            'image' => $pathFinalImg,
            'audio_sample' => $pathFinalAudio,
            'bpm' => $bpm,
            'kunci' => $kunci,
            'music_list' => $music_list,
        ]);

        return redirect()->route('succadd')
            ->with('success', 'Album created successfully.');
    }

    public function update(Request $request, $uuid)
    {
        $path = $request->file('image')->store('public/images');
        $audio_sample = $request->file('audio_sample')->store('public/audio');

        $pathFinalImg = '/storage/images/' . $request->file('image')->hashName();
        $pathFinalAudio = '/storage/audio/' . $request->file('audio_sample')->hashName();

        $data = DB::table('albums')->where('uuid', $uuid)->first();
        $data->name = $request->input('name');
        $data->years = $request->input('years');
        $data->genre = $request->input('genre');
        $data->image = $pathFinalImg;
        $data->audio_sample = $pathFinalAudio;
        $data->bpm = $request->input('bpm');
        $data->kunci = $request->input('kunci');
        $data->music_list = $request->input('music_list');
        $data->save();

        return redirect()->route('succadd')
            ->with('success', 'Album updated successfully.');

    }

    public function edit($uuid){
        $data = DB::table('albums')->where('uuid', $uuid)->first();
        return view('edit', ['album' => $data]);
    }

    public function delete(Request $request)
    {
        $album_name = $request->input('album_name');

        DB::table('albums')->where('album_name', '=', $album_name)->delete();
        return redirect()->route('succdel')
            ->with('success', 'Album deleted successfully');
    }
}

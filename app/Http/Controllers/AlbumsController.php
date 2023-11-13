<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;

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
    
    public function store(Request $request)
    {
        $request->validate([
            'album_name' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'image' => 'required',
            'audio_sample' => 'required',
            'bpm' => 'required',
            'key' => 'required',
            'music_list' => 'required',
        ]);

        album::create($request->all());

        return redirect()->route('album')
            ->with('success', 'Album created successfully.');
    }
}

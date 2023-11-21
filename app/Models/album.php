<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;

    public $table = 'albums';
    protected $fillable = [
        'uuid',
        'album_name',
        'genre',
        'years',
        'image',
        'audio_sample',
        'bpm',
        'kunci',
        'music_list',
    ];

}

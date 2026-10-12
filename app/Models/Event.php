<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'kategori',
        'tanggal_event',
        'lokasi',
        'deskripsi',
        'gambar',
    ];
}

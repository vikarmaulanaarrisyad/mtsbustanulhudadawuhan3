<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'gambar',
        'penulis',
        'status',
        'published_at'
    ];

    // Relasi many-to-many dengan kategori
    public function kategori()
    {
        return $this->belongsToMany(KategoriBerita::class, 'berita_kategori', 'berita_id', 'kategori_id');
    }
}

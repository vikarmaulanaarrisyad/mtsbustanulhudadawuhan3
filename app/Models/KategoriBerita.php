<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kategori_berita';

    protected $fillable = [
        'nama',
        'slug'
    ];

    // Relasi many-to-many dengan berita
    public function berita()
    {
        return $this->belongsToMany(Berita::class, 'berita_kategori', 'kategori_id', 'berita_id');
    }
}

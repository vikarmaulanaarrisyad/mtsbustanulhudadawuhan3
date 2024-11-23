<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run()
    {
        Gallery::create([
            'judul' => 'Kegiatan Upacara Bendera',
            'deskripsi' => 'Dokumentasi upacara bendera memperingati Hari Kemerdekaan.',
            'tipe' => 'foto',
            'file_path' => 'gallery/upacara.jpg',
        ]);

        Gallery::create([
            'judul' => 'Perayaan Hari Guru',
            'deskripsi' => 'Kegiatan perayaan Hari Guru di sekolah.',
            'tipe' => 'video',
            'file_path' => 'gallery/hari_guru.mp4',
        ]);
    }
}

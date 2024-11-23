<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\KategoriBerita;
use Illuminate\Database\Seeder;

class KategoriBeritaSeeder extends Seeder
{
    public function run()
    {
        $categories = ['Pendidikan', 'Kegiatan Sekolah', 'Pengumuman', 'Prestasi'];

        foreach ($categories as $category) {
            KategoriBerita::create([
                'nama' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}

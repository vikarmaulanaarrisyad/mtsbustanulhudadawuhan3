<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use App\Models\KategoriBerita;

class BeritaKategoriSeeder extends Seeder
{
    public function run()
    {
        // Membuat 100 berita
        Berita::factory()->count(100)->create()->each(function ($berita) {
            // Mendapatkan semua kategori yang ada
            $kategoriIds = KategoriBerita::inRandomOrder()->take(rand(1, 4))->pluck('id');

            // Mengaitkan berita dengan kategori secara acak
            $berita->kategori()->attach($kategoriIds);
        });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;

class ProfilSekolahSeeder extends Seeder
{
    public function run()
    {
        ProfilSekolah::create([
            'nama_sekolah' => 'SMA Negeri 1 Contoh',
            'alamat' => 'Jl. Pendidikan No.123, Contoh Kota',
            'telepon' => '02112345678',
            'email' => 'info@sman1contoh.sch.id',
            'visi' => 'Menciptakan generasi yang unggul dan berkarakter.',
            'misi' => 'Memberikan pendidikan berkualitas dan berintegritas.',
            'sejarah' => 'Didirikan pada tahun 1980 sebagai sekolah unggulan.',
            'logo' => 'logo_sekolah.png',
        ]);
    }
}

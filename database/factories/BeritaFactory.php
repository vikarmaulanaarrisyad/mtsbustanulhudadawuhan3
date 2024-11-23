<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeritaFactory extends Factory
{
    protected $model = \App\Models\Berita::class;

    public function definition()
    {
        // Set Faker dengan locale Indonesia
        $this->faker = \Faker\Factory::create('id_ID');

        $judul = $this->faker->sentence;
        return [
            'judul' => $judul,
            'slug' => Str::slug($judul),
            'isi' => $this->faker->paragraphs(5, true),
            'gambar' => 'default.jpg', // Ganti dengan path gambar default atau random
            'user_id' => 1,
            'status' => 'published',
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}

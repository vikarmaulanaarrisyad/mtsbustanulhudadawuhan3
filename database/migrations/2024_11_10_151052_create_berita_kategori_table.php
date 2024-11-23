<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berita_kategori', function (Blueprint $table) {
            $table->id();
            $table->foreignId('berita_id')->constrained('berita')->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained('kategori_berita')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_kategori');
    }
};
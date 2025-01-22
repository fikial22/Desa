<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->string('judul_galeri');
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_upload');
            $table->string('kategori')->nullable(); // Foto atau Video
            $table->string('file'); // Path ke file
            $table->foreignId('id_desa')->constrained('desa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};

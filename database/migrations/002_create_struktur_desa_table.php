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
        Schema::create('struktur_desa', function (Blueprint $table) {
            $table->id('id_struktur');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('foto')->nullable();
            $table->string('kontak')->nullable();
            $table->foreignId('id_desa')->constrained('desa', 'id')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('struktur_desa');
    }
};

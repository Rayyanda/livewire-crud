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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('prodi');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('ttl');
            $table->year('th_masuk');
            $table->string('email');
            $table->unsignedBigInteger('fakultas_id');
            $table->foreign('fakultas_id')->references('id')->on('fakultas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};

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
        Schema::create('data_undangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->string('nama_lengkap_pria');
            $table->string('nama_panggilan_pria');
            $table->string('nama_lengkap_wanita');
            $table->string('nama_panggilan_wanita');
            $table->string('foto_pasangan1')->nullable();
            $table->string('foto_pasangan2')->nullable();
            $table->string('foto_galeri1')->nullable();
            $table->string('foto_galeri2')->nullable();
            $table->string('foto_galeri3')->nullable();
            $table->string('foto_galeri4')->nullable();
            $table->string('foto_galeri5')->nullable();
            $table->string('foto_galeri6')->nullable();
            $table->string('foto_galeri7')->nullable();
            $table->string('foto_galeri8')->nullable();
            $table->string('foto_galeri9')->nullable();
            $table->string('foto_galeri10')->nullable();
            $table->string('media_sosial')->nullable();
            $table->date('hari_tgl');
            $table->time('waktu');
            $table->string('lokasi');
            $table->string('tema_pernikahan', 255);
            $table->string('link_undangan');
            $table->string('tema_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_undangan');
    }
};

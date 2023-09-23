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
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('foto')->nullable();
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

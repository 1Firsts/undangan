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
        Schema::create('data_order', function (Blueprint $table) {
            $table->id();
            $table->string('customer'); // Change to string for customer name
            $table->string('category'); // Change to string for category
            $table->integer('jumlah'); // Change to integer for quantity
            $table->enum('status', ['Batal', 'Dikerjakan', 'Selesai']); // Use enum for status
            $table->timestamps(); // Adds created_at and updated_at columns automatically
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_order');
    }
};

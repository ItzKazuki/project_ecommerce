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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->on('users')->references('id');
            $table->string('nama');
            $table->decimal('harga');
            $table->string('desc');
            $table->string('gambar');
            $table->integer('stok');
            $table->string('nama_penjual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

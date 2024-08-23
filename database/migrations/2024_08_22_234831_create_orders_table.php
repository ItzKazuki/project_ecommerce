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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_discount');
            $table->decimal('min_belanja');
            $table->timestamp('masa_berlaku');
            $table->string('desc');
            $table->integer('total_discount');
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('discount_id');
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->string('nama_pembeli');
            $table->string('nama_barang');
            $table->string('nama_seller');
            $table->string('alamat');
            $table->integer('ongkos_kirim');
            $table->integer('biaya_admin');
            $table->integer('jumlah_barang');
            $table->string('metode_pembayaran');
            $table->integer('total_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

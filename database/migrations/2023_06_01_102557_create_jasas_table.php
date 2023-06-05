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
        Schema::create('jasas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barang_id');
            $table->string('id_jasa', 5);
            $table->string('nama_jasa', 50);
            $table->bigInteger('harga');
            $table->timestamps();
        });

        Schema::table('jasas', function (Blueprint $table) {
            $table->foreign('barang_id')->references('id')->on('barangs')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasas');
    }
};

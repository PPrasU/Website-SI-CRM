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
        Schema::create('penukaran_poins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poin_id');
            $table->string('id_penukaranpoin', 6);
            $table->biginteger('bayarpoin');
            $table->biginteger('diskon');
            $table->timestamps();
        });

        Schema::table('penukaran_poins', function (Blueprint $table) {
            $table->foreign('poin_id')->references('id')->on('poins')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penukaran_poins');
    }
};

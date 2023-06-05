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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengguna_id');
            $table->unsignedBigInteger('peringkatM_id');
            $table->string('id_member', 8);
            $table->string('nama', 100);
            $table->string('jenis_kelamin', 10);
            $table->biginteger('no_hp');
            $table->string('alamat');
            $table->biginteger('poin');
            $table->timestamps();
        });

        Schema::table('members', function (Blueprint $table) {
            $table->foreign('pengguna_id')->references('id')->on('penggunas')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('peringkatM_id')->references('id')->on('poins')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

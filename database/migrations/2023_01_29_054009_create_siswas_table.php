<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $siswa) {
            $siswa->id();
            $siswa->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $siswa->string('alamat');
            $siswa->foreignId('kelas_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $siswa->string('no_hp');
            $siswa->string('email');
            $siswa->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};

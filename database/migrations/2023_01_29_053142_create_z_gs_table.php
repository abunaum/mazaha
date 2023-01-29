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
        Schema::create('gs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('alamat');
            $table->string('jabatan');
            $table->string('bidang_studi');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gs');
    }
};

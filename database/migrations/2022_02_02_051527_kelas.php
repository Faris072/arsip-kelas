<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->bigIncrements('id_kelas');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('user')->onDelete('cascade');
            $table->string('nama_kelas', 50);
            $table->integer('angkatan');
            $table->text('deskripsi_kelas',1000)->nullable();
            $table->string('foto_kelas')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

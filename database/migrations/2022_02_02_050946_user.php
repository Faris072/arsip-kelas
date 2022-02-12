<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 20)->unique();
            $table->string('nama_lengkap',100);
            $table->string('email')->unique();
            $table->string('password',1000);
            $table->string('telp')->unique();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat',1000)->nullable();
            $table->tinyInteger('admin');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            $table->softDeletes();//untuk soft delete
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

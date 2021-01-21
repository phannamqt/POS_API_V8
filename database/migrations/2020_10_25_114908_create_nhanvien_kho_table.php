<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien_kho', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kho_id')->references('id')->on('kho');
            $table->foreignId('nhanvien_id')->references('id')->on('nhanvien');
            $table->foreignId('trangthai_id')->references('id')->on('trangthai');
            $table->foreignId('nhanvientao_id')->references('id')->on('nhanvien');
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
        Schema::dropIfExists('nhanvien_kho');
    }
}

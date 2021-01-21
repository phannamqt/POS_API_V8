<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiemtichluyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diemtichluy', function (Blueprint $table) {
            $table->id();
            $table->integer('tongdiem');
            $table->foreignId('khachhang_id')->references('id')->on('khachhang');
            $table->foreignId('trangthai_id')->references('id')->on('trangthai');
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
        Schema::dropIfExists('diemtichluy');
    }
}

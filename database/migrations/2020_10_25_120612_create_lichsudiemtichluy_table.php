<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichsudiemtichluyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichsudiemtichluy', function (Blueprint $table) {
            $table->id();
            $table->integer('sodiem');
            $table->foreignId('khachhang_id')->references('id')->on('khachhang');
            $table->foreignId('loaidiemtichluy_id')->references('id')->on('loaidiemtichluy');
            $table->foreignId('chinhanh_id')->references('id')->on('chinhanh');
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
        Schema::dropIfExists('lichsudiemtichluy');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiamgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giamgia', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->string('ten')->unique();
            $table->foreignId('khachhang_id')->references('id')->on('khachhang');
            $table->foreignId('sanpham_id')->references('id')->on('sanpham');
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
        Schema::dropIfExists('giamgia');
    }
}

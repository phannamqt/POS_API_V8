<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaidiemtichluyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaidiemtichluy', function (Blueprint $table) {
            $table->id();
            $table->string('ten');
            $table->integer('diemquydoi');
            $table->foreignId('nhanvientao_id')->references('id')->on('nhanvien');
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
        Schema::dropIfExists('loaidiemtichluy');
    }
}

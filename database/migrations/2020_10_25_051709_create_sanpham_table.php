<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->string('ten')->unique();
            $table->foreignId('chinhanh_id')->references('id')->on('chinhanh');
            $table->foreignId('nhomsanpham_id')->references('id')->on('nhomsanpham');
            $table->foreignId('trangthai_id')->references('id')->on('trangthai');
            $table->decimal('giabanle',8,2);
            $table->decimal('giabansi',8,2);
            $table->smallInteger('tontoithieu')->nullable();
            $table->smallInteger('tontoida')->nullable();

            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('sanpham');
    }
}

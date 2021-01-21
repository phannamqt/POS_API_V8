<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50);
            $table->decimal('sodudauky', 8, 2);
            $table->decimal('sotienphaitra', 8, 2);
            $table->decimal('sotienthanhtoan', 8, 2);
            $table->decimal('conlai', 8, 2);
            $table->string('ghichu');
            $table->foreignId('donhang_id')->references('id')->on('donhang');
            $table->foreignId('phieuthuchi_id')->references('id')->on('phieuthuchi');
            $table->foreignId('khachhang_id')->references('id')->on('khachhang');
            $table->foreignId('nhanvientao_id')->references('id')->on('nhanvien');
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
        Schema::dropIfExists('thanhtoan');
    }
}

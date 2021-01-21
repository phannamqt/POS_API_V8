<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->string('hoten',150); 
            $table->string('email',191)->unique();
            $table->string('dienthoai',15)->nullable();
            $table->tinyInteger('gioitinh');
            $table->timestamp('ngaysinh')->nullable();
            $table->foreignId('chinhanh_id')->references('id')->on('chinhanh');
            $table->foreignId('nhanvientao_id')->references('id')->on('nhanvien'); 
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('khachhang');
    }
}

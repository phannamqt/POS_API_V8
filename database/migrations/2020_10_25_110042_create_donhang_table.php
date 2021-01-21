<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->foreignId('khachhang_id')->references('id')->on('khachhang');
            $table->foreignId('nhanvientao_id')->references('id')->on('nhanvien');
            $table->string('dienthoai',15)->nullable();
            $table->string('diachi')->nullable();

            $table->decimal('thanhtienvat',8,2)->nullable();
            $table->decimal('thanhtien',8,2)->nullable();
            $table->foreignId('giamgia_id')->references('id')->on('giamgia');
            $table->decimal('phamtramgiamgia',3,2)->nullable();
            $table->decimal('thanhtiengiamgia',8,2)->nullable();
            $table->decimal('tongtien',8,2)->nullable();

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
        Schema::dropIfExists('donhang');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieunhapchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhapchitiet', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('phieunhap_id')->references('id')->on('phieunhap');
            $table->foreignId('sanpham_id')->references('id')->on('sanpham');
            $table->foreignId('nhanviennhapkho_id')->references('id')->on('nhanvien');
            $table->foreignId('trangthai_id')->references('id')->on('trangthai');
            $table->string('solonhasanxuat',50)->nullable();
            $table->string('solohethong',50);
            $table->timestamp('ngaysanxuat')->nullable();
            $table->timestamp('ngayhethan')->nullable();

            $table->decimal('dongiavon',8,2)->nullable();
            $table->decimal('dongiaban',8,2)->nullable();
            $table->decimal('phantramvat',4,2);
            $table->decimal('tienvat',8,2);
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
        Schema::dropIfExists('phieunhapchitiet');
    }
}

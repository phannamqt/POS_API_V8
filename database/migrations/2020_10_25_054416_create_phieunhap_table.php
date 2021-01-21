<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->foreignId('kho_id')->references('id')->on('kho');
            $table->foreignId('nhacungcap_id')->references('id')->on('nhacungcap');
            $table->foreignId('nhanviennhapkho_id')->references('id')->on('nhanvien');
            $table->foreignId('nhanvienduyetnhapkho_id')->references('id')->on('nhanvien'); 
            $table->timestamp('ngaygioduyet')->nullable();
            $table->foreignId('trangthai_id')->references('id')->on('trangthai');
            $table->decimal('thanhtiengiavon',8,2);
            $table->decimal('thanhtiengiaban',8,2);
            $table->decimal('thanhtienvat',8,2);
            $table->string('sohoadon',50)->nullable();
            $table->timestamp('ngayhoadon')->nullable();
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
        Schema::dropIfExists('phieunhap');
    }
}

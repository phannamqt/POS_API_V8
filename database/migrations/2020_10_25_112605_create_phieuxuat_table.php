<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuxuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuxuat', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->foreignId('nhanvienxuatkho_id')->references('id')->on('nhanvien');
            $table->foreignId('donhang_id')->references('id')->on('donhang');
            $table->foreignId('kho_id')->references('id')->on('kho');
            $table->decimal('thanhtien',8,2)->nullable();
            $table->decimal('thanhtienvat',8,2)->nullable();
            $table->decimal('tongtien',8,2)->nullable();
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
        Schema::dropIfExists('phieuxuat');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuthuchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuthuchi', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50);
            $table->decimal('sotien', 8, 2);
            $table->foreignId('loaiphieuthuchi_id')->references('id')->on('loaiphieuthuchi');
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
        Schema::dropIfExists('phieuthuchi');
    }
}

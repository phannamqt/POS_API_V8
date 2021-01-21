<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chinhanh', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cuahang_id')->references('id')->on('cuahang');
            $table->string('ma',50)->unique();
            $table->string('ten');
            $table->string('dienthoai',15)->nullable();
            $table->foreignId('trangthai_id')->references('id')->on('trangthai');
            $table->timestamps();
        });

        Schema::table('chinhanh', function ($table) { 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chinhanh');
    }
}

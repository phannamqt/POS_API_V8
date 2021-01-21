<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuahangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuahang', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->string('ten'); 
            $table->timestamp('ngayhethan')->nullable();
            $table->string('dienthoai',15)->nullable();
            $table->string('email')->unique();
            $table->string('tenmien')->nullable();
            $table->string('logo');
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
        Schema::dropIfExists('cuahang');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->id();
            $table->string('ma',50)->unique();
            $table->string('ten')->unique();
            $table->string('dienthoai',15)->nullable();
            $table->string('email')->nullable();
            $table->string('diachi')->nullable();
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('nhacungcap');
    }
}

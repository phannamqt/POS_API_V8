<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieuxuatchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieuxuatchitiet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phieuxuat_id')->references('id')->on('phieuxuat');
            $table->foreignId('sanpham_id')->references('id')->on('sanpham');
            $table->decimal('soluong', 3, 2);
            $table->string('solohethong');
            $table->decimal('dongiavon', 8, 2);
            $table->decimal('dongiaban', 8, 2);
            $table->decimal('thanhtien', 8, 2);
            $table->decimal('phamtramvat', 3, 2);
            $table->decimal('thanhtienvat', 8, 2);
            $table->decimal('giamgia', 3, 2);
            $table->decimal('tongtien', 3, 2);
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
        Schema::dropIfExists('phieuxuatchitiet');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();                                 #購物車編號
            $table->unsignedBigInteger('users_id');             #使用者名稱
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('products_id'); #餐點編號
            $table->foreign('products_id')->references('id')->on('products');
            $table->integer('amount')->default('1');#數量
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
        Schema::dropIfExists('carts');
    }
}

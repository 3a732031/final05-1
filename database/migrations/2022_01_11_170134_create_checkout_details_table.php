<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_details', function (Blueprint $table) {
            $table->unsignedBigInteger('orders_id');    #訂單編號
            $table->foreign('orders_id')->references('id')->on('orders');
            $table->unsignedBigInteger('products_id');     #商品編號
            $table->integer('amount');                 #數量
            $table->integer('total');                  #總計
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
        Schema::dropIfExists('checkout_details');
    }
}

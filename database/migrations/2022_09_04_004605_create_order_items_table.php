<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('order_items')){
            Schema::create('order_items', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('product_id')->unsigned();
                $table->bigInteger('order_id')->unsigned();
                $table->bigInteger('user_id');
                $table->decimal('price');
                $table->integer('quantity');
                $table->timestamps();
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}

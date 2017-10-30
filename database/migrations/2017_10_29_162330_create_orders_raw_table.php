<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersRawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_raw', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('mid_id')->unsigned()->nullable();
            $table->string('order_id')->nullable();
            $table->integer('card_association_id')->unsigned()->nullable();
            $table->string('card_number', 16)->nullable();
            $table->string('bin', 6)->nullable();
            $table->string('last_four', 4)->nullable();
            $table->string('arn')->nullable();
            $table->decimal('amount', 9, 2)->nullable();
            $table->integer('currency_id')->unsigned()->nullable();
            $table->string('tracking_number')->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->datetime('transaction_date')->nullable();
            $table->boolean('active')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('orders_raw');
    }
}

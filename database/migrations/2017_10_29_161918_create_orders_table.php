<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('mid_id')->unsigned()->nullable();
            $table->string('order_id');
            $table->integer('card_association_id')->unsigned();
            $table->string('card_number', 16);
            $table->string('bin', 6);
            $table->string('last_four', 4);
            $table->string('arn');
            $table->decimal('amount', 9, 2);
            $table->integer('currency_id')->unsigned()->nullable();
            $table->string('tracking_number');
            $table->integer('product_id')->unsigned();
            $table->datetime('transaction_date');
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
        Schema::dropIfExists('orders');
    }
}

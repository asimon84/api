<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsRawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_raw', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('website_url')->nullable();
            $table->boolean('is_web_sale')->default(0);
            $table->boolean('is_recurring')->default(0);
            $table->boolean('is_shippable')->default(0);
            $table->longText('cover_letter')->nullable();
            $table->longText('order_page')->nullable();
            $table->longText('terms')->nullable();
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
        Schema::dropIfExists('products_raw');
    }
}

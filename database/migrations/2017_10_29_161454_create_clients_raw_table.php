<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsRawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_raw', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('business_website')->nullable();
            $table->string('business_phone', 25)->nullable();
            $table->string('business_email')->nullable();
            $table->string('contact_title', 25)->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone', 25)->nullable();
            $table->string('contact_email')->nullable();
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
        Schema::dropIfExists('clients_raw');
    }
}

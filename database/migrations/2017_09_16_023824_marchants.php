<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Marchants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marchants',  function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');
            $table->string('accountType');
            $table->string('businessName');
            $table->string('country');
            $table->string('city');
            $table->integer('phone');
            $table->string('email');
            $table->string('paymentMethods');
            $table->string('addrss');
            $table->string('zip_code');
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
        Schema::dropIfExists('marchants');
    }
}

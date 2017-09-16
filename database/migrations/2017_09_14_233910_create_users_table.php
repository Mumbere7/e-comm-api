<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
                $table->increments('id');
                $table->string('firstName');
                $table->string('lastName');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('phoneNumber', 15)->unique();
                $table->string('address');
                $table->date('dateOfBirth');
                $table->string('sex',1);
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
        Schema::dropIfExists('users');
    }
}

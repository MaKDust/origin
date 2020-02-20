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
            $table->bigIncrements('id');
            $table->integer('role')->default('0');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user')->default('guest');
            $table->string('name');
            $table->string('lastname')->default('guest');
            $table->string('address')->default('guest');
            $table->integer('celphone')->default('555');
            $table->string('country')->default('guest');
            $table->string('state')->default('guest');
            $table->string('postalcode')->default('guest');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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

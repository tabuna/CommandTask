<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->nullable();
            $table->string('avatar')->nullable();
            $table->string('website')->nullable();
            $table->text('about')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('sex')->nullable();
            $table->boolean('notification')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->drop('website');
            $table->drop('about');
            $table->drop('phone');
            $table->drop('sex');
            $table->drop('notification');
        });
    }
}

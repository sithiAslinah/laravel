<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use', function (Blueprint $table) {
                  $table->increments('id');

          $table->string('name');
          $table->string('username');
          $table->string('email');
          $table->string('password');

                      // required for Laravel 4.1.26
                      $table->string('remember_token', 100)->nullable();
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
        Schema::dropIfExists('use');
    }
}

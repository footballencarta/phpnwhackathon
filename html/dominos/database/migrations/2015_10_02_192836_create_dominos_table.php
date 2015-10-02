<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDominosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza', function($table) {
          $table->increments('id');
          $table->integer('order_id');
          $table->integer('current_order_status');
          $table->dateTime('created_at');
          $table->dateTime('last_updated_at')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pizza');
    }
}

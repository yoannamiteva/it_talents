<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('users_items', function (Blueprint $table) {
    		$table->increments('id');
    		$table->unsignedInteger('user_id');
    		$table->unsignedInteger('item_id');
    		$table->timestamps();
    		$table->foreign('user_id')
	    		->references('id')
	    		->on('users');
    		$table->foreign('item_id')
	    		->references('id')
	    		->on('items');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_items');
    }
}

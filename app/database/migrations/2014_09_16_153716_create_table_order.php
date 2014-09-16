<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrder extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table) {
			$table->increments('id');
			$table->string('number')->unique();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('user')->on('id');
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
		Schema::drop('order');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductOrder extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_order', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('amount')->unsigned();
			$table->integer('order_id')->unsigned();
			$table->foreign('order_id')->references('order')->on('id');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('product')->on('id');
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
		Schema::drop('product_order');
	}

}

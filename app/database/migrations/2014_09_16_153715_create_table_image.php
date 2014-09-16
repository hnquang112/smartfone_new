<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_image', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image', 256)->unique();
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
		Schema::drop('product_image');
	}

}

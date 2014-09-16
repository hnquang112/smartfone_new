<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduct extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 256)->unique();
			$table->integer('price')->unsigned();
			$table->integer('supplier_id')->unsigned();
			$table->foreign('supplier_id')->references('product_supplier')->on('id');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('product_category')->on('id');
			$table->integer('description_id')->unsigned();
			$table->foreign('description_id')->references('product_description')->on('id');
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
		Schema::drop('product');
	}

}

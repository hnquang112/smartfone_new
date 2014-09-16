<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_description', function(Blueprint $table) {
			$table->increments('id');
			$table->text('3g');
			$table->text('4g');
			$table->text('sim');
			$table->text('size');
			$table->text('weight');
			$table->text('display');
			$table->text('resolution');
			$table->text('storage');
			$table->text('wlan');
			$table->text('usb');
			$table->text('nfc');
			$table->text('gps');
			$table->text('bluetooth');
			$table->text('os');
			$table->text('cpu');
			$table->text('gpu');
			$table->text('camera');
			$table->text('front_camera');
			$table->text('battery');
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
		Schema::drop('product_description');
	}

}

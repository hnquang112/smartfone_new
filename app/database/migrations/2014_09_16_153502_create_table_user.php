<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password', 64);
			$table->string('name', 128)->nullable();
			$table->string('address', 256)->nullable();
			$table->integer('permission_id')->unsigned()->default(1);
			$table->foreign('permission_id')->references('user_permission')->on('id');
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
		Schema::drop('user');
	}

}

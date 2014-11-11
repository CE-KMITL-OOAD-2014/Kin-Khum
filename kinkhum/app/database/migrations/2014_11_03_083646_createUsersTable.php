<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('users', function($table){
		

			$table->increments('id');
			$table->string('username',99);
			$table->string('password',99);
			$table->string('name',99);
			$table->string('status',99);

			$table->unique('username');
			$table->timestamps();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

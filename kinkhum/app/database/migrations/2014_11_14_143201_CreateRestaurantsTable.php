<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('restaurants', function($table){
		

			$table->increments('id');
			$table->string('restaurant')->nullable();
			$table->string('type')->nullable();
			$table->string('address')->nullable();
			$table->string('detail')->nullable();
			$table->string('telephone')->nullable();
			$table->string('image')->nullable();
			$table->string('status')->nullable();
			$table->integer('vote')->nullable();


			
			$table->timestamps();
			$table->rememberToken();
		});
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('restaurants');
	}

}

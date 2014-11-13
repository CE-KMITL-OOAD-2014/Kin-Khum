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
			$table->string('restaurant');
			$table->string('type');
			$table->string('address');
			$table->string('detail');
			$table->string('telephone');
			$table->string('image');
			$table->string('status');
			$table->integer('vote');


			
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

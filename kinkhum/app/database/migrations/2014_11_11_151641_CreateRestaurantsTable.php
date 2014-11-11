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
			Schema::create('restaurants', function($table){
		

			$table->increments('id');
			$table->string('restaurant',99)->nullable(false);
			$table->string('type',99)->nullable(false);
			$table->string('detail',99)->nullable(false);
		
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
		Schema::drop('restaurants');
	}

}

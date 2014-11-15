<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('reviews', function($table){
		

			$table->increments('id');
			$table->string('idRestaurant')->nullable();
			$table->string('review')->nullable();
			$table->string('reviewImg')->nullable();
			$table->integer('voteRes')->nullable();
			

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
		Schema::drop('reviews');
	}

}

<?php 
	
	/**
	* 
	*/
	class editRestaurant extends PHPUnit_Framework_TestCase{
		
		public function editRestaurant(){
			
			$restaurant = new restaurant();
			$restaurant->setRestaurant($restaurant);
		}

		public function testComment(){
			$restaurant->textType = 'SeafoodRestaurant';
			$this->assertTrue('SeafoodRestaurant',restaurant("SeafoodRestaurant"));
		}
	
	}

?>
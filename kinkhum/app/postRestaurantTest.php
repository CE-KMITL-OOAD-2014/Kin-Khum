<?php

	/**
	* 
	*/
	class postRestaurant extends PHPUnit_Framework_TestCase{
		
		public function post(){
			$post= new postRestaurant ();
			$post->setPost($post);
			
		}
		public function testPost(){
			$post->postType = 'xxxRestaurant';
			$this->assertTrue('xxxRestaurant',post("xxxRestaurant"));
		}
	}

?>
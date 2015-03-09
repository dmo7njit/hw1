/*
	David O'Grady
	is218 HW 1 
	Constructor/Destructor
	*/
	
<?php

class Pets {


	function __constructor(){
		echo 'You have created a Pets class.';
	}

	function __destruct(){
		echo 'You have destructed this Pets class.';
	}
}

$pet = new Pets();

?>
<?php


class RoboCar {

	public $name = 'unknown';
	public $color = 'blue';

	public function __construct($carname)
	{
		$this->name = $carname;
	}

	// public function honk()
	// {
	// 	echo "Honk, Honk!";
	// }

		public function honk()
	{
		echo "Honk, Honk! from $this->name.\n";
	}

}

$roboCar = new RoboCar("RoboCar One"); 
// $roboCar->name = "RoboCar One";
echo $roboCar->name;
$roboCar->honk();
echo PHP_EOL;


$roboCar2 = new RoboCar(); 
$roboCar2->honk();
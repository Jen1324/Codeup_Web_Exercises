<?php

class Car 
{
	public $wheels = 4;
	public $doors = 4;
	public $year = '';

	public function __construct()
	{
		echo 'contruct runs';
	}

	public function start_engine()
	{
	return 'Engine started';
	}

	public function stops()
	{

	}

}

class Solora extends Car {
	
	public $doors = 2; 
	//public $doors = 2;

	public function __construct()
	{
	 // parent::start_engine();
	 // echo $this->start_engine();
	 echo 'run this one instead';
	}
}

$mycar = new Solora();
echo $mycar->doors;
// echo $mycar->year;
// echo '<br>';
// echo $mycar->doors;
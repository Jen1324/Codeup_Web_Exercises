<?php

class InvalidInputException extends Exception {

}

try 
{
	if ($argc != 2)
	{
		throw new Exception('You need to pass exactly one argument.');
	}
	if ($argv[1] != 'test')
	{
		throw new InvalidInputException('The first argument must be "test".');
	}
	var_dump($argv);
}


catch (InvalidInputException $ex)
{	
echo "Exception: " . $ex->getMessage() . PHP_EOL;
}

catch (Exception $ex)
{	
echo "Exception: " . $ex->getMessage() . PHP_EOL;
}

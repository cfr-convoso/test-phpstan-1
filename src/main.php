<?php declare(strict_types = 1);

// version 0.0.4
class HelloWorld
{
	public function sayHello(DateTimeImutable $date): void
	{
		echo 'Hello, ' . $date->format('j. n. Y');
	}
}

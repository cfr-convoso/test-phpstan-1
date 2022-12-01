<?php declare(strict_types = 1);

// version 0.0.12
class HelloWorld
{
	public function sayHello(DateTimeImutable $date): void
	{
		echo 'Hello, ' . $date->format('j. n. Y');
	}
	public function sayHello2(DateTimeImutable $date): void
	{
		echo 'Hello, ' . $date->format('j. n. Y');
	}
}

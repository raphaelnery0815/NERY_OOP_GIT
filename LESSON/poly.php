<?php

abstract class Person
{
	abstract public function greet();
}
class English extends Person
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German extends Person
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class American extends Person {
	public function greet()
	{
		return 'Hello!';
	}
}

class French extends Person
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

function greeting($people)
{
	foreach ($people as $person) {
		echo $person->greet() . PHP_EOL;
	}
}

$people = [
	new English(),
	new German(),
	new American(),
	new French()
	
];

greeting($people);
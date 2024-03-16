<?php


class Customer
{
	private $name;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}

$customer = new Customer();

$customer->setName('RAPHAEL NERY');
echo $customer->getName();


?>
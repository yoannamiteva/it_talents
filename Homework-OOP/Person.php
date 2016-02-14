<?php

class Person 
{
	private $name;
	
	private $personalNumber;
	
	private $isMale;
	
	private $age;
	
	private $money;
	
	private $friends = array();
	
	private $car;

	
	public function __construct($name, $personalNumber , $isMale)
	{
		$this->name = $name;
		$this->personalNumber = $personalNumber;
		$this->isMale = $isMale;
		$this->friends[] = new Person();
		$this->car = new Car();
	}
	
	public function setMoney($money)
	{
		$this->money= $money;
	}
	
	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}
	
	public function getPersonalNumber()
	{
		return $this->personalNumber;
	}
	
	public function getIsMale()
	{
		return $this->isMale;
	}
	
	public function getMoney()
	{
		return $this->money;
	}
	
	public function buyCar($car)
	{
		if($this->money > $car->getPrice())
		{
			$car->changeOwner($this);
			$this->money -= $car->getPrice();
			
			return true;
		}
		else 
		{
			echo 'There is not enough money!';
			return false;
		}
	}
	
	public function sellCarForScrap()
	{
		$price = $this->car->calculatePriceForScrap();
		$this->money += $price;
		return $this->money;
	}
	
}
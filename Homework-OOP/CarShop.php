<?php

class CarShop
{
	private $cars = array();
	
	
	public function addCar(Car $car)
	{
		$this->cars[] = $car;
	}
	
	public function getNextCar()
	{
		$lenght = $this->cars.lenght;
		return $this->cars[$lenght - 1];
	}
	
	public function sellNextCar(Person $buyer)
	{
		$car = $this->cars->getNextCar();
		if($buyer->buyCar($car))
		{
			$car->changeOwner($buyer);
		}
		else 
		{
			echo "You cannot sell the next car!";
		}	
	}
	
	public function removeCar($carToRemove)
	{
		foreach ($cars as $car)
		{
			if($car == $carToRemove)
			{
				$car = null;
			}
		}
	}
	
	public function showAllCarsInTheShop()
	{
		foreach($this->cars as $car)
		{
			echo $car->getModel(), " : " ,
			 	 $car->getColor(), " : " ,
			 	 $car->getPrice(), "EUR : " , 
				 ($car->getIsSportCar() ? "Sport" : "Casual"), PHP_EOL;
		}
	}
}